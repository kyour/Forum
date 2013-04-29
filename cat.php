<?php include 'header.php' ?>
<div class="full">
<form id="cat-form" action="cat-exe.php" method="post" enctype="multipart/form-data">
<input type="text" name="name"  /><br>
<input name="picture" type="file" /><br />
<textarea name="bio"></textarea><br>
<p>
  <label>
    <input type="radio" name="opinion" value="like" id="like">
    Like</label>
  <br>
  <label>
    <input type="radio" name="opinion" value="dislike" id="dislike">
    Dislike</label>
  <br>
</p>
<p>
  <label>
    <input type="radio" name="power" value="yes" id="yes">
    Yes</label>
  <br>
  <label>
    <input type="radio" name="power" value="no" id="no">
    No</label>
  <br>
</p>

<br>
<select name="party">
<option>--</option>
<option value="noonLeague">Noon League</option>
</select><br>
<input type="submit" name="submit" value="submit">
</form>
</div>
<?php include 'footer.php' ?>