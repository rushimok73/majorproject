<?php
/**
 * Template name: WordPress Form
 */
 get_header();
?>
  <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">
      <label>ID</label><br>
      <input type="text" class="form-control" name="id"><br>
      <label>Firstname</label><br>
      <input type="text" class="form-control" name="firstname"><br>
      <label>Lastname</label><br>
      <input type="text" class="form-control" name="lastname"><br>
      <label>Address</label><br>
      <input type="text" class="form-control" name="address"><br>
      <label>Gender</label><br>
      <input type="text" class="form-control" name="gender"><br>
      <input type="hidden" name="action" value="contact_form">
    <button type="submit" class="btn btn-primary" name="add">Add</button><br>
  </form>


<?php
 get_footer();
?>
