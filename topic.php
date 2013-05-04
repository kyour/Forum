<form id="topic-form">
<input type="text" name="topic" id="topic" required="required" />
<textarea name="topic-desc" id="topic-desc" required="required"></textarea>
<input type="hidden" value="<?php echo $_id ?>" name="cat-id" />
<input type="hidden" value="<?php echo $_SESSION['user_name'] ?>" name="user-name" />
<input type="submit" value="Submit" />
</form>
<div class="topic-error error">
</div>
<?php include 'topic-show.php'; ?>