<?php
/**
 * Template name: WordPress Form
 */
get_header();
?>

<!-- <form action="add.php" method = "post">
  <label for ="user-school">School<br>
    <input id ="user-school" type = "text" name="user-school" value="">
  </label><br>
  <label for ="user-college">College<br>
    <input id ="user-college" type = "text" name="user-college" value="">
  </label><br>
  <label for ="user-GPA">GPA<br>
    <input id ="user-GPA" type = "text" name="user-GPA" value="">
  </label><br>
  <input type ="submit" name ="submit" value="submit">
</form> -->

<form method="POST" action="add.php">
    <label>IDli</label><br>
    <input type="text" class="form-control" name="id"><br>
    <label>Firstname</label><br>
    <input type="text" class="form-control" name="firstname"><br>
    <label>Lastname</label><br>
    <input type="text" class="form-control" name="lastname"><br>
    <label>Address</label><br>
    <input type="text" class="form-control" name="address"><br>
    <label>Gender</label><br>
    <input type="text" class="form-control" name="gender"><br>
  <button type="submit" class="btn btn-primary" name="add">Add</button><br>
</form>

<?php
get_footer();
?>
