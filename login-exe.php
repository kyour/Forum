<?php
if(isset($_POST['email']) && isset($_POST['password'])){
	$email=$_POST['email'];
	$password=$_POST['password'];
	$password_en=md5($password);
		$query=mysql_query("SELECT * FROM user where user_email='$email' AND user_password='$password_en'") or die(mysql_error());
		$row=mysql_fetch_array($query);
		$dbemail=$row['user_email'];
		$dbpassword=$row['user_password'];
		$query_run=$query;
		$query_num_rows = mysql_num_rows($query_run);
		if($query_num_rows==1)
		{
		echo 'True';
		}
		else
		{
		echo 'Incorrect Email or Password';
		}
}

?>