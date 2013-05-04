<?php
$_firstname=mysql_real_escape_string($_POST['first-name']);
$_lastname=mysql_real_escape_string($_POST['last-name']);
$_pass=mysql_real_escape_string($_POST['password']);
$_email=mysql_real_escape_string($_POST['email']);
$_password=md5($_pass);
//$_confirm_password=$_POST['confirm-password'];
$queryemail=mysql_query("SELECT * FROM user WHERE user_email='$_email' ");
$checkemail=mysql_num_rows($queryemail);
if($checkemail == 1){
	echo "Sorry, ".$_email." is already registered.";
}
else{
$userquery=mysql_query("INSERT INTO user (user_firstname, user_lastname, user_password, user_email) VALUES ('$_firstname', '$_lastname', '$_password', '$_email')");
if ($userquery){
	echo 'Registration Done';
}
else{
	echo 'Error in Registration' .mysql_error();
}
}
?>