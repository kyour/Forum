<<<<<<< HEAD
<<<<<<< HEAD
<?php include 'header.php';
=======
<?php
include ("includes/connection.php");
include ("header.php");
>>>>>>> 16 new files commited
=======
<?php include 'header.php';
>>>>>>> 9dd5d215775ed0396a9c8a00a921722f9a2a2fe7
$query=mysql_query("SELECT * FROM category");

while ($rowshow=mysql_fetch_array($query)){
	$_id = $rowshow["cat_id"];
	$_name = $rowshow["cat_name"];
	echo $_name."<br><span><a href='cat-detail.php?id=".$_id."'>Details</a></span>";
}
<<<<<<< HEAD
<<<<<<< HEAD

include 'footer.php';
=======
include ("footer.php");
>>>>>>> 16 new files commited
=======

include 'footer.php';
>>>>>>> 9dd5d215775ed0396a9c8a00a921722f9a2a2fe7
?>