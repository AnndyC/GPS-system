<?php
 include ('functions.php');


?>

<!DOCTYPE html>
<html>
<head>
	<title> - Edit user info</title>
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
		<h2>Admin - Edit user</h2>
	</div>

	<form method="post" action="enterdatabase.php">


    <div class="input-group">
			<button type="submit" class="btn" name="delete_btn"> delete user </button>
		</div>
    <div class="input-group">
			<button type="submit" class="btn" name=""> <a href="update.php">Update user info</a></button>
		</div>
	</form>
  <button type="submit" class="btn" name="back_btn"> <a href="edit.php">Done</a> </button>

</body>
</html>
