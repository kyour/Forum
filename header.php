<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
<script type="text/javascript" src="js/jquery-1.9.1.min.js" ></script>
<script type="text/javascript" src="js/main.js" ></script>
</head>

<body>
<div class="headerWrapper">
<header class="clearfix">
  <nav>
    <ul class="nav">
      <li><a href="home.php">Home</a></li>
      <li><a href="cat.php">Category</a></li>
      <li><a href="cat-list.php">Category List</a></li>
      <li><a href="#">First Menu</a></li>
    </ul>
  </nav>
  <span style="color:#ffffff;"><?php if (isset ($_SESSION['loged_in'])){echo 'Welcoome: '. $_SESSION['user_name']; 	echo '<a href="logout.php"> Log Out</a>';}; ?></span>
</header>
</div>
<div id="wrapper">
<div class="content clearfix">
