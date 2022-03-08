<?php
 include ('functions.php');


?>

<!DOCTYPE html>
<html>
<head>
	<title> - Update user info</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
		.header {
			background: #003366;
		}
		.msg {
			margin: 30px auto;
			padding: 10px;
			border-radius: 5px;
			color: #3c763d;
			background: #dff0d8;
		}
		button[name=register_btn] {
			background: #003366;
		}
	</style>
</head>
<body>
	<div class="header">
		<h2>Admin - Update user info</h2>
	</div>

	<form method="post" action="update.php">

				<div class="input-group">
			<label>Change Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
    <div class="input-group">
			<button type="submit" class="btn" name="updatename_btn"> + user name info</button>
		</div>
		
			</form>
			<button type="submit" class="btn" name="back_btn"> <a href="edit.php">done<<<<</a> </button>

</body>
</html>
