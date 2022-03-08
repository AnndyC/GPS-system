<?php
 include ('adminfunct.php');
session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title> - Update news</title>
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
		<h2>Admin - Update news section 2 info</h2>
	</div>

  <div class="aboutus3">
    <div style="text-align:center">
    </div>
    <div class="row">

      <div class="column">
        <form action="editnews.php" method="post">
          <label for="date">Enter date</label>
          <input type="text"  name="date" placeholder="the date..">
          <label for="message">Message</label>
          <textarea  name="message" placeholder="Write something.." style="height:100px"></textarea>
          <input type="text" name="count" value="<?php echo $_GET['count'];?>">
          <input type="text" name="count2" value="<?php echo $_GET['count2'];?>">
          <input type="text" name="id" value="<?php echo $_GET['id'];?>">
          <button name="updatemessage1_btn" type="submit"> +add</button>
        </form>
        <button type="submit" class="btn" name="back_btn"> <a href="editnews.php">Back<<<<</a> </button>
      </div>
    </div>
  </div>

</body>
</html>
