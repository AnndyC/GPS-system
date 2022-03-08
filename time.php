<?php
 include ('adminfunct.php');
session_start();

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
		<h2>Admin - Update Timetable info</h2>
	</div>

  <div class="aboutus3">
    <div style="text-align:center">
    </div>
    <div class="row">

      <div class="column">
        <form action="adminfunct.php" method="post">
          <label for="first0">Eul - DESTINATION</label>
          <input type="text"  name="first0" placeholder="..">
          <label for="second2">DESTINATION - Eul</label>
          <input type="text" name="second2" placeholder="..">
          <input type="text" name="count" value="<?php echo $_GET['count'];?>">
          <input type="text" name="id" value="<?php echo $_GET['id'];?>">
          <button name="done_btn" type="submit"> + done</button>
        </form>
      </div>
<button type="submit" class="btn" name="back_btn"> <a href="routespage.php">Back<<<<</a> </button>
    </div>
  </div>


</body>
</html>
