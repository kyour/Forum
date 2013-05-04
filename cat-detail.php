<<<<<<< HEAD
<?php include 'header.php';
$query=mysql_query("SELECT * FROM category");
=======
<?php
include ("includes/connection.php");
include ("header.php");
	$_id=$_GET['id'];// ye samj nai aya k yaha pe 'id' q likha ha

$query=mysql_query("SELECT * FROM category WHERE cat_id = $_id ");
>>>>>>> 16 new files commited

while ($rowshow=mysql_fetch_array($query)){
	$_id = $rowshow["cat_id"];
	$_name = $rowshow["cat_name"];
	$_pic = $rowshow["cat_picture"];
	$_bio = $rowshow["cat_bio"];
	$_opinion = $rowshow["cat_opinion"];
	$_power = $rowshow["cat_power"];
	$_party = $rowshow["cat_party"];
	echo $_name."<br>". $_id ."<img width='80' src='".$_pic."'><br>".$_bio."<br>".$_opinion."<br>".$_power."<br>".$_party;
}
<<<<<<< HEAD
include 'footer.php';
=======
include ("topic.php");
include ("footer.php");
>>>>>>> 16 new files commited
?>