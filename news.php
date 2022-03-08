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
    <style>


    .newscontent{
      background: white;
      width: 365px;
      height: 300px;
      padding: 40px;
      margin-left: 300px;
      margin: 100px auto;
      float: left;
    }

    .newscontent2{
      background: #174873;
      width: 365px;
      height: 300px;
      padding: 40px;
      margin-left: 300px;
      margin: 100px auto;
      float: left;
    }

    .newscontent a{
      font-size: 20px;
    }

    .newscontent2 a{
      font-size: 20px;
    }

    .newscontent3 a{
      font-size: 20px;
    }
    </style>
<title>
NEWS</title>
<link rel = "shortcut icon" href ="images/logo.png">
</head>
<body>

  <div class="firstmenu1">

    <form class="help3" action="logout.php" method="post">

        <button class="btn" type="submit" name="logout_button">logout</button>

      </form>
      <p> <?php echo $_SESSION['username']?></p>
      <img src="images/avatar.png"  alt="" width="25" height="25">
      <h6><i>For more information contact us <a href="aboutus.php">lefketrans@gmail.com </a></i></h6>
    </div>

<!--this is the menu-->

<div class="firstmenu" style="height:150px;">


  <p style="font-size:35px;box-shadow: 0 0 4px  rgba(0,0,0,0.1);"> <img src="images/logo.png" alt="" width="50" height="50"><b>European University of Lekfe</b></p>
  <a href="ouremployees.php">Our Employees</a>
  <div class="arrowdown">
  <button class="downarrow" onclick="myFunction()">Routes
    <i class="now"></i>
  </button>
  <div class="nownow" id="myDropdown">
    <a href="lefke.php">Lefke</a>
    <a href="doganci.php">Doganci</a>
    <a href="yedidalga.php">Yedidalga</a>
    <a href="guzelyurt.php">Guzelyurt</a>
  </div>
  </div>
  <a href="aboutus.php">About Us</a>
  <a href="news.php">News</a>
  <a href="index.php">Home</a>
</div>
<!--menu ends-->




<div class="newscontainer" style="background-image: url(images/web2.jpg);">
<div class="newscontent">

  <span class="date"><?php echo $_SESSION['date1']?></span><br>
  <a href="news.html"><?php echo $_SESSION['title1']?></a>
  <p><?php echo $_SESSION['message1']?></p>

</div>
  <div class="newscontent2">

    <span class="date"><?php echo $_SESSION['date2']?></span><br>
    <a href="news.html"><?php echo $_SESSION['title2']?></a>
    <p><?php echo $_SESSION['message2']?></p>


</div>
<div class="newscontent3">

  <span class="date"><?php echo $_SESSION['date3']?></span><br>
  <a href="news.html"><?php echo $_SESSION['title3']?></a>
  <p><?php echo $_SESSION['message3']?></p>


</div>

<h1> updates and more</h1>
<div class="newscontent4">
<img src="images/news.jpg" alt="">
<h2> section for more announcements</h2>
<p>    <span class="date"><?php echo $_SESSION['date4']?></span><br>
  <?php echo $_SESSION['message4']?>
   <a href="news.html">click here</a>

</p>
<p>    <span class="date"><?php echo $_SESSION['date5']?></span><br>
  <?php echo $_SESSION['message5']?>
   <a href="news.html">click here</a>

</p>
<p>    <span class="date"><?php echo $_SESSION['date6']?></span><br>
  <?php echo $_SESSION['message6']?>
   <a href="news.html">click here</a></br>
</p>
</div>
</div>







<!--Footer Section-->
  <div class="main-footer">
    <div class="auto-container">
        <div class="upper-box">
          <div class="row clearfix">


                  <!--Footer Column-->
                      <div class="footer-column col-md-4 col-sm-6 col-xs-12">
                          <!--Links Widget-->
                          <div class="footer-widget links-widget">
                              <h2>Explore Now</h2>
                              <div class="row clearfix">
                                  <div class="col-md-6 col-sm-6 col-xs-12">
                                      <ul class="links border-right">
                                          <li><a href="index.php">Home</a></li>
                                          <li><a href="news.php">News</a></li>
                                          <li><a href="aboutus.php">About us</a></li>
                                      </ul>
                                  </div>

                              </div>
                          </div>
                      </div>
                      <div class="footer-column col-md-4 col-sm-6 col-xs-12">
                      <!--Info Widget-->
                      <div class="footer-widget">
                          <h2>Contact Us</h2>

                              <p>European University of Lefke, Mersin 10, Turkey</p>
                              <p>lefketrans@gmail.com </p>
                              <p>+90 533 8273 287</p>
                              <p>www.eul.edu.tr</p>

                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="footer-bottom">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="bottom">
                    <div class="copyright">Copyrights &copy; 2021 -  <a href="eul.edu.tr">EUL</a> -  All Rights Reserved</div>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12 text-right">
                    <nav class="footer-nav">
                        <ul>
                            <li><a href="#">Terms & Conditions  -  Privacy Policies </a></li>
                          </ul>
                      </nav>
                  </div>
              </div>
          </div>
      </div>
                    </div>




</body>
</html>
