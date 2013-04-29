<?php 
$_name=mysql_real_escape_string($_POST['name']);
$_folder="uploads/";
$_bio=mysql_real_escape_string($_POST['bio']);
$_opinion=$_POST['opinion'];
$_power=$_POST['power'];
$_party=$_POST['party'];

if(isset($_POST['submit'])){
	$_folder=$_folder .basename($_FILES['picture']['name']);
		if(move_uploaded_file($_FILES['picture']['tmp_name'], $_folder)){
			echo basename($_FILES['picture']['name']) . 'Uploaded Successfully';
		}
	$query=mysql_query("INSERT INTO category (cat_name, cat_picture, cat_bio, cat_opinion, cat_power, cat_party) VALUES ('$_name', '$_folder', '$_bio', '$_opinion', '$_power', '$_party')");
		if($query){
			echo 'Category Inserted Successfully';
		}
		else{
			echo'Please fix this '. mysql_error();
		}
}//close if
?>