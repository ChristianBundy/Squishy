<?php
$page_query = "SELECT `name`, `id` FROM `page` WHERE 1";
$page_result = mysql_query($page_query);
$i = 1;
$total = mysql_num_rows($page_result);
while ($page_row = mysql_fetch_assoc($page_result)) {
	echo '<li><a href="#"';
	if ($page_row['id'] == $this->page['id']) {
		echo ' id="current"';
	}
	echo '>' . $page_row['name'] . '</a></li>';
	if ($i < $total) {
		echo "\n";
	}
	$i++;
}
?>