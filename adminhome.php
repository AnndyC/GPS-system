<?php
session_start();

if($_SESSION['id_type']!=='admin'){
  header('location:login.php');
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Lefke Transportation -Admin</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<style>
		.header {
			background: #003366;
      min-height: 50px;
		}
		button[name=register_btn] {
			background: #003366;
		}
    .h3{
      float:right;
    }

    .box{
      background-color:yellow;
      min-height:70px;
      min-width: 30%;
      text-align:center;
      float:left;
      margin-right: 20px;
      margin-bottom:70px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    }

.box a{
  background-color: white;
}
.btn{
  float:right;
  min-height:30px;

}

.name{
  background-color: black;
  min-height: 30px;
}

	</style>
</head>
<body>

  <div class="name">
  <h2 style="color:white;font-size:13px;">User:<?php
   echo $_SESSION['username'];
   ?></h2>
 </div>


	<div class="header">
    <form class="" action="logout.php" method="post">
      <button class="btn" type="submit" name="logout_button">logout</button>
    </form>
		<h2>Admin Dashboard</h2>
	</div>


</br>
<div class="box">
  <br/>
<p>- Update information, Delete user or Create new user</p>
<h3>  <a href="edit.php" >User Info</a></h3>
</div>
  <div  class="box" >
    <br/>
    <p>-  Change the user home page details</p>
  <h3> <a href="indexpage.php">Update Home page</a></h3>
  </div>
  <div  class="box" >
    <br/>
    <p>- Add announcements and change timetable for routes</p>
  <h3>  <a href="routespage.php">Update Routes page</a> </h3>
  </div>
  <div  class="box" >
    <br/>
    <p> - Add announcements in news page</p>
  <h3>  <a href="editnews.php">Update News page</a> </h3>
  </div>
</body>
</html>
