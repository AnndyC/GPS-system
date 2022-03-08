<?php
 include ('functions.php');
 $conn = mysqli_connect('localhost', 'root', '', 'login');
 // Check connection
 if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
 }

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
          <label for="id_type">id-type</label>
        <input type="text" name="id_type" value="<?php echo $_GET['id_type'];?>">
        <label for="email">Email</label>
      <input type="text" name="email" value="<?php echo $_GET['email'];?>">
          <label for="type">Type</label>
          <input type="text" name="type" value="<?php echo $_GET['type'];?>">
          <label for="contact">Contact</label>
          <input type="text" name="contact" value="<?php echo $_GET['contact'];?>">
          <label for="password">Password</label>
            <input type="text" name="password" value="<?php echo $_GET['password'];?>">
          <br/><br/></br>
          <h3>Only for staff:</h3>
          <label for="shift">Shift</label>
        <input type="text" name="shift" value="<?php echo $_GET['shift'];?>">
        <label for="station">Station</label>
        <input type="text" name="station" value="<?php echo $_GET['station'];?>">
          <button name="updateuser_btn" type="submit"> +update</button>
        </form>
        <button type="submit" class="btn" name="back_btn"> <a href="edit.php">Back<<<<</a> </button>
      </div>
    </div>
  </div>

</body>
</html>
