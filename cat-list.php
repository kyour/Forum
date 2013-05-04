<<<<<<< HEAD
<?php include 'header.php';
=======
<?php
include ("includes/connection.php");
include ("header.php");
>>>>>>> 16 new files commited
$query=mysql_query("SELECT * FROM category");

while ($rowshow=mysql_fetch_array($query)){
	$_id = $rowshow["cat_id"];
	$_name = $rowshow["cat_name"];
	echo $_name."<br><span><a href='cat-detail.php?id=".$_id."'>Details</a></span>";
}
<<<<<<< HEAD

include 'footer.php';
=======
include ("footer.php");
>>>>>>> 16 new files commited
?>