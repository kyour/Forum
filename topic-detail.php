<?php
include 'includes/connection.php';
include 'header.php';
$id=$_GET['id'];
$req = mysql_query("SELECT * FROM topic WHERE topic_id = $id");// y locaion differs
$query = $req;
while ($show=mysql_fetch_array($query)){
	$_uid=$show["topic_id"];
	$_sub=$show["topic_subject"];
	$_des=$show["topic_desc"];
	$_dat=$show["topic_date"];
	$_cat=$show["topic_cat"];
	$_by=$show["topic_by"];
	echo $_sub."<br>".$_des."<br>".$_dat."<br>".$_cat."<br>".$_by;
};
include 'post.php';

include 'footer.php';
?>