<?php 
$_topic = $_POST["topic"];
$_desc = $_POST["topic-desc"];
$_time = time();

$_query = mysql_query("INSERT INTO topic (topic_subject, topic_desc) VALUES ('$_topic', '$_desc')");
?>