<?php
if(isset($_SESSION['loged_in'])){
	return false;
	}
?>
<h2>Login</h2>
<form id="logIn-form" action="login-exe.php" method="post">
<label>Email</label>
<input type="email" name="email"><br />
<label>Password</label>
<input type="text" name="password"><br />
<input type="submit" name="submit" value="Sign In">
</form>
<div class="login-error error">
</div>
