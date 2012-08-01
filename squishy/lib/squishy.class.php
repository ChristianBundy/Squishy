<?php
class squishy {

	//Regular variables 'n stuff.
	//Boring crap.
	public $str = '';
	private $region_cursor = 0;
	private $mysql;
	

	//MySQL data arrays.
	//Data will be stored here each time that information is pulled from a table.
	private $item = array();
	private $region = array();
	private $page = array();
	private $setting = array();
	private $template = array();
	private $user = array();
	private $blob = array();
	
	
	function __construct(array $config) {
		//MySQL connection
		$this->mysql = mysql_connect($config['mysql_hostname'], $config['mysql_username'], $config['mysql_password']);
		if ($this->mysql) {
			$db_select = mysql_select_db($config['mysql_database'], $this->mysql);
			if (!$db_select) {
				trigger_error('Can\'t select MySQL database: ' . mysql_error(), E_USER_ERROR);
			}
		} else {
			trigger_error('Can\'t connect to MySQL server: ' . mysql_error(), E_USER_ERROR);
		}
		
		//settings
		$setting_query = "SELECT * FROM `setting` WHERE 1";
		$setting_result = mysql_query($setting_query);
		while ($setting_row = mysql_fetch_assoc($setting_result)) {
			foreach ($setting_row as $key => $val) {
				$this->setting[$setting_row['key']]=$val;
			}
		}
		
		$page_query = "SELECT * FROM `page` WHERE `id`=0";
		$page_result = mysql_query($page_query);
		$page_row = mysql_fetch_assoc($page_result);
		foreach ($page_row as $key => $val) {
			$this->page[$key]=$val;
		}
		

		$template_query = "SELECT * FROM `template` WHERE `id`='" . $this->page['template'] . "'";
		$template_result = mysql_query($template_query);
		$template_row = mysql_fetch_assoc($template_result);
		foreach ($template_row as $key => $val) {
			$this->template[$key]=$val;
		}
	}
	
	public function set_region($name, $tab = 0) {
		$region_query = "INSERT INTO `region` (`template`, `name`) VALUES ('" . $this->template['id'] . "', '" . $name . "');";
		$region_result = mysql_query($region_query);
		
		$item_query = "SELECT * FROM `item` WHERE `page` = '" . $this->page['id'] . "' AND `region` = '" . $name . "' ORDER BY `position` ASC";
		$item_result = mysql_query($item_query);
		$i = 0;
		while ($this->item = mysql_fetch_assoc($item_result)) {
			if ($i > 0) {
				echo $space;
			}
			$blob_query = "SELECT * FROM `blob` WHERE `id` = '" . $this->item['blob'] . "'";
			$blob_result = mysql_query($blob_query);
			$this->blob = mysql_fetch_assoc($blob_result);
			$filename = 'squishy/blobs/' . $this->blob['path'] . '/item.php';
			ob_start();
			require($filename);
			$contents = ob_get_contents();
			ob_end_clean();
			//Insert tabs to preserve HTML layout for ease of access
			$space = '';
			for ($i =1; $i <= $tab; $i++) {
				$space .= "\t";
			}
			$contents = str_replace("\n", "\n" . $space, $contents);
			echo $contents;
			echo "\n";
			
			$i++;
		}
	}
	
	function cache() {
		//Save file to cache (WIP)
		$filename = 'squishy/cache/' . $this->page['id'] . '.cache';
		$file = fopen($filename, 'w');
		fwrite($file, $this->str);
		fclose($file);
	}
	
	function render($type) {
		if ($type == 'cache') {
			$filename = 'squishy/cache/' . $this->page['id'] . '.cache';
		} elseif ($type == 'template') {
			//Delete the last saved regions from the db before rendering the template page again.
			$region_query = "DELETE FROM `region` WHERE `template` = " . $this->page['template'] . "";
			$region_result = mysql_query($region_query);
			$filename = 'squishy/template/' . $this->template['name'] . '.php';
		} else {
			return false;
		}
		//ob_start();
		require($filename);
		$this->str = ob_get_contents();
		//ob_end_clean();
	}
	
	function serve() {
		//echo $this->str;
	}

	function __destruct() {
		mysql_close($this->mysql);
	}
}
?>