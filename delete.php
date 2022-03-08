<?php
include ('functions.php');
?>


<!DOCTYPE html>
<html>
<head>
	<title> - Delete user</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
		.header {
			background: #003366;
		}
		button[name=register_btn] {
			background: #003366;
		}
	</style>
</head>
<body>
	<div class="header">
		<h2>Admin - delete user</h2>
	</div>

	<div class="aboutus3">
    <div style="text-align:center">
    </div>
    <div class="row">

      <div class="column">
        <form action="edit.php" method="post">
          <label for="id">ID</label>
            <input type="text" name="id" value="<?php echo $_GET['id'];?>">
            <label for="username">Username</label>
          <input type="text" name="username" value="<?php echo $_GET['username'];?>">
          <label for="type">Type</label>
          <input type="text" name="type" value="<?php echo $_GET['type'];?>">
          <label for="contact">Contact</label>
          <input type="text" name="contact" value="<?php echo $_GET['contact'];?>">
          <button name="delete_btn" type="submit"> -delete</button>
        </form>
        <button type="submit" class="btn" name="back_btn"> <a href="edit.php">Back<<<<</a> </button>
      </div>
    </div>
  </div>
</body>
</html>
