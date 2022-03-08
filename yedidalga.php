<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'login');
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM `messages` WHERE id ='1'";
$result = mysqli_query($conn, $sql);
   $logged_in_user = mysqli_fetch_assoc($result);
   $_SESSION['message4'] = $logged_in_user['message4'];
    $_SESSION['date4'] = $logged_in_user['date4'];


 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript" src="js/jquery.js"> </script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="style2.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <style>
.eul img{
  height: 100px;

}
    </style>
<title>
Yedidalga shuttle</title>
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

<div class="routesheader">
<div class="routespage">
        <div class="inner-page">
            <h1>Yedidalga Shuttles</h1>
            <p class="taxt">
               Yedidalga has a lot of private residents rented to students. Buses move to Yedidalga every two hours. Below is an image of all the
                bustops along the route. Students should make sure to carry their ids to board the bus. You can track the active shuttle by clicking on the link below.

            </p>
          <p> Click on the link to track shuttle -  <a href="map.php">Shuttle Tracker</a></p>
                    </div>
    </div>
    </div>


<div class="announce">
  <img src="images/learnmoreYY.jpg" alt="" width="30">
  <p>
    <span class="date"><?php echo $_SESSION['date4']?></span><br>
    <?php echo $_SESSION['message4']?>
     <a href="news.html">click here</a>
<br/>
  </p>
  <img src="images/TRACKER.png" alt="" width="30">
  <p>
    Our buses have a tracking system installed to be able to know where the bus is during its movement. This makes it easier for the students to make it on time to the bustop.
     To track the active shuttle, click on the Shuttle tracker link above.
  </p>
</div>






  <div class="first-column" style="padding-top:50px;">

  <h2>Weekday timetable</h2>

  <?php
  $sql = "SELECT * FROM mytable4 WHERE id<8";

  echo '<table cellspacing="5" cellpadding="5">
  			<tr>

  				<td>Eul- Lefke</td>
  				<td>Lefke - Eul</td>


  			</tr>';

  if ($result = $conn->query($sql)) {
  		while ($row = $result->fetch_assoc()) {

        //  $row_id = $row["id"];
  				$row_first = $row["first"];
  					$row_second = $row["second"];
            $row_id = $row["id"];
  				echo '<tr>

  								<td>' . $row_first . '</td>
  								<td>' . $row_second . '</td>
  							</tr>';
  		}
  		$result->free();
  }
  ?>
  </table>
  </div>


<div class="second-column" style="padding-top:50px;">

<h2>Weekday timetable</h2>

<?php
$sql = "SELECT * FROM mytable4 WHERE id>='8'";

echo '<table cellspacing="5" cellpadding="5">
			<tr>

				<td>Eul- Lefke</td>
				<td>Lefke - Eul</td>


			</tr>';

if ($result = $conn->query($sql)) {
		while ($row = $result->fetch_assoc()) {

      //  $row_id = $row["id"];
				$row_first = $row["first"];
					$row_second = $row["second"];
          $row_id = $row["id"];
				echo '<tr>

								<td>' . $row_first . '</td>
								<td>' . $row_second . '</td>
							</tr>';
		}
		$result->free();
}
?>
</table>
</div>
</div>

<div name="eul">


<img src="images/routes.jpg" height="70%" width="50%" style="margin-left:300px;">


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
