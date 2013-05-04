<?php 
include ('includes/connection.php');
$_content = mysql_real_escape_string($_POST["content"]);
$_topic = mysql_real_escape_string($_POST["topic"]);
$_time = time();
$_by = $_POST["user-name"];

$_query = mysql_query("INSERT INTO post (post_content, post_topic, post_date, post_by) VALUES ('$_content', '$_topic', '$_time', '$_by')");
if ($_query){
	//header('location:cat-detail.php?id=$_cat');
	echo 'Done';
}
else{
	echo 'request khalid bai for solution';
}
?>