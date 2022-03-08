<?php
session_start();
include ('email.php');
$conn = mysqli_connect('localhost', 'root', '', 'login');
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql2 = "SELECT * FROM `images` WHERE id ='1'";
$result2 = mysqli_query($conn, $sql2);

   $logged_in_images = mysqli_fetch_assoc($result2);
   $_SESSION['image1'] = $logged_in_images['image1'];
   $_SESSION['image2'] = $logged_in_images['image2'];
   $_SESSION['image3'] = $logged_in_images['image3'];
   $_SESSION['image4'] = $logged_in_images['image4'];
   $_SESSION['image5'] = $logged_in_images['image5'];
   $_SESSION['image6'] = $logged_in_images['image6'];
   $_SESSION['image7'] = $logged_in_images['image7'];
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
<title>
AboutUs</title>
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


<div class="aboutus1" style="padding-bottom:50px;">
  <img src="images/about.jpg" width="80%" height="370px" style="padding-top:30px;margin-left:100px;" >
  <h1 style="padding-top:1px; font-size:30px;">- Transportation Department -</h1>
  <p>
    Most of EUL students and staff stay outside the main school campus. The transportaion department has over 20 buses that move daily to and from the school. Our buses have wifi,
     air conditioning and a GPS tracker . The destinations included are:</p>
     <p>1. Doganci (which also passes through Gaziveren)</p>
     <p>2. Lefke </p><p>3. Guzelyurt - the bus stops at the town terminal</p>
     <p>4. Yedidalga </p>
     <p> We mounted school bustops on all the routes for waiting and the image can be found on the routes page. The trips are free for all registered students and
        all staff. Id cards will be requested on entry. Trips to Lefkosa are available every weekend and students have to book a seat before hand. Fill in the mail below with subject(Lefkosa) and message(BOOK Trip) to book a seat. The mail can also be used for enquirings and suggestions.
  </p>

</div>



  <div class="aboutus3">
    <div style="text-align:center">
      <h2 style="padding-top:20px;">Contact Us:</h2>
    </div>
    <div class="row">

      <div class="column">
        <form action="aboutus.php" method="post">
          <label for="name">First Name</label>
          <input type="text"  name="name" placeholder="Your name..">
          <label for="email">Email</label>
          <input type="text"  name="email" placeholder="Your email..">
          <label for="subject">Subject</label>
          <textarea  name="subject" placeholder="Write something.." style="height:50px"></textarea>
          <label for="mail">Message</label>
          <textarea  name="mail" placeholder="Write something.." style="height:100px"></textarea>
          <button name="email_btn" type="submit"> Send</button>
        </form>
      </div>
    </div>
  </div>

  <div class="newscontent5" style="min-height:200px;">

  <p style="padding-top:60px; padding-bottom:1px;">
    <a href="#" class="fa fa-facebook"></a>
    <a href="#" class="fa fa-twitter"></a>
    <a href="#" class="fa fa-instagram"></a>

  </div>

  <div class="employeesgallery">
    <div style="text-align:center">
      <h2>Image Gallery</h2>
    </div>

    <!-- The four columns -->
    <div class="row">
      <div class="column1">
        <img src="images/gallery1.jpg" alt="Nature" style="width:100%" onclick="myFunction(this);">
      </div>
      <div class="column1">
        <img src="images/gallery2.jpg" alt="Snow" style="width:100%" onclick="myFunction(this);">
      </div>
      <div class="column1">
        <img src="images/gallery3.jpg" alt="Mountains" style="width:100%" onclick="myFunction(this);">
      </div>
      <div class="column1">
        <img src="images/gallery4.jpg" alt="Lights" style="width:100%" onclick="myFunction(this);">
      </div>
      <div class="column1">
        <img src="images/gallery5.jpg" alt="Mountains" style="width:100%" onclick="myFunction(this);">
      </div>
      <div class="column1">
        <img src="images/gallery6.jpg" alt="Lights" style="width:100%" onclick="myFunction(this);">
      </div>
    </div>

    <div class="container1">
      <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
      <img id="expandedImg" style="width:100%">
      <div id="imgtext"></div>
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
