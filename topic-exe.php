<?php 
include ('includes/connection.php');
$_topic = mysql_real_escape_string($_POST["topic"]);
$_desc = mysql_real_escape_string($_POST["topic-desc"]);
$_time = time();
$_cat = $_POST["cat-id"];
$_user = $_POST["user-name"];

$_query = mysql_query("INSERT INTO topic (topic_subject, topic_desc, topic_date, topic_cat, topic_by) VALUES ('$_topic', '$_desc', '$_time', '$_cat', '$_user' )");
if ($_query){
	//header('location:cat-detail.php?id=$_cat');
	echo 'Done';
}
else{
	echo 'requist khalid bai for solution';
}
?>