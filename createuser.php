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
 <title> - Create user</title>
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
   <h2>Admin - Create user </h2>
 </div>

  <div class="aboutus3">
    <div style="text-align:center">
    </div>
    <div class="row">

      <div class="column">
        <form action="edit.php" method="post">
          <label for="id">ID</label>
            <input type="text" name="id" >
            <label for="username">Username</label>
          <input type="text" name="username" >
          <label for="email">Email</label>
          <input type="text" name="email">
          <label for="id_type">ID -Type</label>
          <input type="text" name="id_type" value="user" readonly="readonly">
          <label for="id_type">Type</label>
          <select  name="type" >
<option > </option>
          <option value = "staff"> Staff</option>
          <option value = "student"> Student </option>
                       </select>
                       <label for="contact">Contact</label>
          <input type="text" name="contact" >
          <label for="password_1">Password</label>
          <input type="text" name="password_1" >

          <br/><br/></br>
          <h3>Only for staff:</h3>
          <label for="shift">Shift</label>
        <input type="text" name="shift" >
        <label for="station">Station</label>
        <select  name="station" >
<option > </option>
        <option value = "Lefke"> Lefke</option>
        <option value = "Doganci"> Doganci </option>
        <option value = "Guzelyurt"> Guzelyurt</option>
        <option value = "Yedidalga"> Yedidalga </option>
                     </select>

          <button name="register_btn" type="submit"> + create</button>
        </form>
        <button type="submit" class="btn" name="back_btn"> <a href="edit.php">Back<<<<</a> </button>
      </div>
    </div>
  </div>

</body>
</html>
