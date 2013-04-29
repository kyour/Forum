<?php
include ("includes/connection.php");
$query=mysql_query("SELECT * FROM category");

while ($rowshow=mysql_fetch_array($query)){
	$_name = $rowshow["cat_name"];
	$_pic = $rowshow["cat_picture"];
	$_bio = $rowshow["cat_bio"];
	$_opinion = $rowshow["cat_opinion"];
	$_power = $rowshow["cat_power"];
	$_party = $rowshow["cat_party"];
	echo $_name."<br>"."<img width='80' src='".$_pic."'><br>".$_bio."<br>".$_opinion."<br>".$_power."<br>".$_party;
}
?>