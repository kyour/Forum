<form id="post-form">
<label>Post your Post</label>
<textarea name="content"></textarea>
<input type="text" name="topic" value="<?php echo $_uid ?>">
<input type="hidden" value="<?php echo $_SESSION['user_name'] ?>" name="user-name" />
<input type="submit" value="submit">
</form>
<div class="post-error error"></div>
<?php include 'post-show.php'; ?>