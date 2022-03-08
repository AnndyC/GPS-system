<?php
session_start();
include ('adminfunct.php');
$conn = mysqli_connect('localhost', 'root', '', 'login');
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM `messages` WHERE id ='2'";
$result = mysqli_query($conn, $sql);

   $logged_in_user = mysqli_fetch_assoc($result);
   $_SESSION['message1'] = $logged_in_user['message1'];
    $_SESSION['date1'] = $logged_in_user['date1'];
     $_SESSION['title1'] = $logged_in_user['title1'];
     $_SESSION['message2'] = $logged_in_user['message2'];
      $_SESSION['date2'] = $logged_in_user['date2'];
       $_SESSION['title2'] = $logged_in_user['title2'];
       $_SESSION['message3'] = $logged_in_user['message3'];
        $_SESSION['date3'] = $logged_in_user['date3'];
         $_SESSION['title3'] = $logged_in_user['title3'];
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript" src="js/jquery.js"> </script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
.help p{
  color: blue;
}
.btn{
  float:right;
}
/* Navbar container */
.navbar {
  overflow: hidden;
  background-color: #333;
  font-family: Arial;
}

/* Links inside the navbar */
.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* The dropdown container */
.dropdown {
  float: left;
  overflow: hidden;
}

/* Dropdown button */
.dropdown .dropbtn {
  font-size: 16px;
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit; /* Important for vertical align on mobile phones */
  margin: 0; /* Important for vertical align on mobile phones */
}

/* Add a red background color to navbar links on hover */
.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

/* Dropdown content (hidden by default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

/* Add a grey background color to dropdown links on hover */
.dropdown-content a:hover {
  background-color: #ddd;
}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}


</style>


<title>
EUL Transportation</title>
<link rel = "shortcut icon" href ="images/logo.png">
</head>
<body>


  <div>
    <h1>Edit index page</h1>
  </div>

<!--second section with news starts here-->

<div class="news">
<a href="news.html"> News and Updates</a>
</div>
<section class="features">

  <div class="feature">
    <span class="date"><?php echo $_SESSION['date1']?></span><br>
    <a href="news.html"><?php echo $_SESSION['title1']?></a>
    <p><?php echo $_SESSION['message1']?></p>
</br><a href="entermessage.php?id=2&count=1">+change announcement</a>
  </div>
  <div class="feature">
    <span class="date"><?php echo $_SESSION['date2']?></span><br>
    <a href="news.html"><?php echo $_SESSION['title2']?></a>
    <p><?php echo $_SESSION['message2']?></p>
</br><a href="entermessage.php?id=2&count=2">+change announcement</a>
  </div>
  <div class="feature">
    <span class="date"><?php echo $_SESSION['date3']?></span><br>
    <a href="news.html"><?php echo $_SESSION['title3']?></a>
    <p><?php echo $_SESSION['message3']?></p>
</br><a href="entermessage.php?id=2&count=3">+change announcement</a>
  </div>
</section>
<!--news section ends here-->
<button type="submit" class="btn" name="back_btn"> <a href="adminhome.php">Back<<<<</a> </button>





</body>
</html>
