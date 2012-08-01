<?php
$img_query = "SELECT * FROM `blob_img` WHERE `id`='" . $this->item['blob_id'] . "'";
$img_result = mysql_query($img_query);
while ($img_row = mysql_fetch_assoc($img_result)) {
	echo '<img src="';
	echo $img_row['uri'];
	echo '" alt="';
	echo $img_row['alt'];
	echo '" />';
}
?>