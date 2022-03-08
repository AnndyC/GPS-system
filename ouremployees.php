<?php
session_start();

/*
  Rui Santos
  Complete project details at https://RandomNerdTutorials.com/esp32-esp8266-mysql-database-php/

  Permission is hereby granted, free of charge, to any person obtaining a copy
  of this software and associated documentation files.

  The above copyright notice and this permission notice shall be included in all
  copies or substantial portions of the Software.
*/

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


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

    .hero2{
       text-align: center;;
        min-height: 400px;
        background: white url(images/emp.jpg);
        background-size: cover;
       background-position: bottom right;
        padding: 50px;
        display: flex;
        flex-direction: column;
        align-items: start;
        justify-content: center;

    }

.hero3{
  margin-left: 350px;
}
    .hero3 p{
       text-align: center;

    }

    .hero2 h1{
       text-align: center;
       margin-left: 300px;
    }

</style>
<title>
Our Employees</title>
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




<!--body-->
<!--div class="employees">-->
<section>
<div class="hero2">
      <h1 style="background-color:var(--yellow); margin-left:400px;">Our Employees</h1>
      <div class="hero3">
      <p style="background-color: #174873;; margin-right:400px; "><b><i>Our employees are qualified and very professional. The table below shares a little information includig
         the schedule for the day.<i><b></p>
        <!-- <p style="background-color: #174873;; margin-right:350px;">The table below shares a little information includig the schedule for the day.</p>-->
       </div>
    </div>
  </section>

  <div class="employeedirectory" style="padding-top:70px;">
<h2 style="padding-bottom:25px;" > Employee Directory</h2>
<?php
$sql = "SELECT id, username, contact, shift, station,type FROM dataa WHERE type='staff' ORDER BY id DESC";

echo '<table  cellspacing="5" cellpadding="5">
      <tr>
        <td>Name</td>
        <td>Shift</td>
        <td>Station</td>
      </tr>';

if ($result = $conn->query($sql)) {
    while ($row = $result->fetch_assoc()) {
        $row_sensor = $row["username"];
        $row_value1 = $row["shift"];
        $row_value2 = $row["station"];

        echo '<tr>

                <td ><img src="images/avatar.png"  alt="" width="25" height="25">' . $row_sensor . '</td>
                <td>' . $row_value1 . '</td>
                <td>' . $row_value2 . '</td>
              </tr>';
    }
    $result->free();
}
?>
  </table>
 </div>

<!--bodyends-->

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
