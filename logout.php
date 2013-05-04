<?php
session_start();
$checkses=session_destroy();
unset ($_SESSION['logged_in']);
if ($checkses){
	header ('location:home.php');
}
?>