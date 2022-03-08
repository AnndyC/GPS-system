<?php
session_start();
include ('adminfunct.php');
$conn = mysqli_connect('localhost', 'root', '', 'login');
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM `messages` WHERE id ='3'";
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
         $_SESSION['message4'] = $logged_in_user['message4'];
          $_SESSION['date4'] = $logged_in_user['date4'];
          $_SESSION['message5'] = $logged_in_user['message5'];
           $_SESSION['date5'] = $logged_in_user['date5'];
           $_SESSION['message6'] = $logged_in_user['message6'];
            $_SESSION['date6'] = $logged_in_user['date6'];
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
<title>
NEWS</title>
<link rel = "shortcut icon" href ="images/logo.png">
</head>
<body>

<div>
  <h1>Edit news page</h1>
</div>
<button type="submit" class="btn" name="back_btn"> <a href="adminhome.php">Back<<<<</a> </button>
<div class="newscontainer">
<div class="newscontent">

  <span class="date"><?php echo $_SESSION['date1']?></span><br>
  <a href="news.html"><?php echo $_SESSION['title1']?></a>
  <p><?php echo $_SESSION['message1']?></p>
</br><a href="entermessage.php?id=3&count=1">+change announcement</a>
</div>
  <div class="newscontent2">

    <span class="date"><?php echo $_SESSION['date2']?></span><br>
    <a href="news.html"><?php echo $_SESSION['title2']?></a>
    <p><?php echo $_SESSION['message2']?></p>
  </br><a href="entermessage.php?id=3&count=2">+change announcement</a>

</div>
<div class="newscontent3">

  <span class="date"><?php echo $_SESSION['date3']?></span><br>
  <a href="news.html"><?php echo $_SESSION['title3']?></a>
  <p><?php echo $_SESSION['message3']?></p>
</br><a href="entermessage.php?id=3&count=3">+change announcement</a>

</div>

<h1> updates and more</h1>
<div class="newscontent4">
<img src="images/news.jpg" alt="">
<h2> section for more announcements</h2>
<p>    <span class="date"><?php echo $_SESSION['date4']?></span><br>
  <?php echo $_SESSION['message4']?>
   <a href="news.html">click here</a>
 </br>
<a href="editnewspage2.php?id=3&count=1&count2=1">+change announcement</a>
</p>
<p>    <span class="date"><?php echo $_SESSION['date5']?></span><br>
  <?php echo $_SESSION['message5']?>
   <a href="news.html">click here</a></br>
<a href="editnewspage2.php?id=3&count=2&count2=2">+change announcement</a>
</p>
<p>    <span class="date"><?php echo $_SESSION['date6']?></span><br>
  <?php echo $_SESSION['message6']?>
   <a href="news.html">click here</a></br>
<a href="editnewspage2.php?id=3&count=3&count2=3">+change announcement</a>
</p>
</div>
</div>



</body>
</html>
