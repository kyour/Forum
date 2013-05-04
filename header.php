<<<<<<< HEAD
<<<<<<< HEAD
<?php include 'includes/connection.php'; ?>

=======
<?php session_start(); ?>
>>>>>>> 16 new files commited
=======
<?php include 'includes/connection.php'; ?>

>>>>>>> 9dd5d215775ed0396a9c8a00a921722f9a2a2fe7
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
<<<<<<< HEAD
<<<<<<< HEAD
      <li><a href="cat-list.php">categories</a></li>
=======
      <li><a href="cat-list.php">Category List</a></li>
>>>>>>> 16 new files commited
=======
      <li><a href="cat-list.php">categories</a></li>
>>>>>>> 9dd5d215775ed0396a9c8a00a921722f9a2a2fe7
      <li><a href="#">First Menu</a></li>
    </ul>
  </nav>
  <span style="color:#ffffff;"><?php if (isset ($_SESSION['loged_in'])){echo 'Welcoome: '. $_SESSION['user_name']; 	echo '<a href="logout.php"> Log Out</a>';}; ?></span>
</header>
</div>
<div id="wrapper">
<div class="content clearfix">
