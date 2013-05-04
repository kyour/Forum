<?php
$query = mysql_query("SELECT * FROM post WHERE $id = post_topic");//
$a=$query; 
while ($show=mysql_fetch_array($a)){
	$_sub=$show["post_content"];
	$_top=$show["post_topic"];
	$_dat=$show["post_date"];
	$_by=$show["post_by"];
	echo $_sub ."<br>".$_top ."<br>".$_dat ."<br>".$_by."<br>";
};
?>