<?php
$blob_query = "SELECT `text` FROM `blob_text` WHERE `id`='" . $this->item['blob_id'] . "'";
$blob_result = mysql_query($blob_query);
while ($blob_row = mysql_fetch_assoc($blob_result)) {
	echo $blob_row['text'];
}
?>