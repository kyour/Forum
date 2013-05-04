<?php
$req = mysql_query("SELECT * FROM topic WHERE $_id = topic_cat");// MERA ORDER BY ANI CHALA
$query = $req;
while ($show=mysql_fetch_array($query)){
	$_uid=$show["topic_id"];
	$_sub=$show["topic_subject"];
	$_des=$show["topic_desc"];
	$_dat=$show["topic_date"];
	$_cat=$show["topic_cat"];
	$_by=$show["topic_by"];
	echo $_sub ." <a href='topic-detail.php?id=".$_uid."'>Red More</a><br>";
};
?>