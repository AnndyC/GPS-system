<?php
session_start();
include ('adminfunct.php');
$conn = mysqli_connect('localhost', 'root', '', 'login');
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM `messages` WHERE id ='1'";
//$sql2 = "SELECT `username` FROM `data` WHERE username='$username' AND
//password = '$password'";
$result = mysqli_query($conn, $sql);
//  $result2 = mysqli_query($conn, $sql2);

   $logged_in_user = mysqli_fetch_assoc($result);
   $_SESSION['message1'] = $logged_in_user['message1'];
    $_SESSION['date1'] = $logged_in_user['date1'];
    $_SESSION['message2'] = $logged_in_user['message2'];
     $_SESSION['date2'] = $logged_in_user['date2'];
     $_SESSION['message3'] = $logged_in_user['message3'];
      $_SESSION['date3'] = $logged_in_user['date3'];
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
<title>
Edit routes page</title>
<link rel = "shortcut icon" href ="images/logo.png">
</head>
<body style="back;">

<div>
  <h1>Edit routes page</h1>
  <button type="submit" class="btn" name="back_btn"> <a href="adminhome.php">Back<<<<</a> </button>
</div>


<div class="announce"style="margin-bottom:0px;">

  <img src="images/ANNOUNCEMENTS.png" alt="" width="30">
  <p>Lefke News section</p>
  <p>
    <span class="date"><?php echo $_SESSION['date1']?></span><br>
    <?php echo $_SESSION['message1']?>
     <a href="news.html">click here</a>
<br/>
     <a href="enterforroutes.php?id=1&count=1&count2=1">+change announcement</a>
  </p>

  <img src="images/ANNOUNCEMENTS.png" alt="" width="30">
  <p>Doganci News section</p>
  <p>
    <span class="date"><?php echo $_SESSION['date2']?></span><br>
    <?php echo $_SESSION['message2']?>
     <a href="news.html">click here</a>
<br/><br/></br>
     <a href="enterforroutes.php?id=1&count=1&count2=2">+change announcement</a>
  </p>

  <img src="images/ANNOUNCEMENTS.png" alt="" width="30">
  <p>Guzelyurt News section</p>
  <p>
    <span class="date"><?php echo $_SESSION['date3']?></span><br>
    <?php echo $_SESSION['message3']?>
     <a href="news.html">click here</a>
<br/></br><br/>
     <a href="enterforroutes.php?id=1&count=1&count2=3">+change announcement</a>
  </p>

  <img src="images/ANNOUNCEMENTS.png" alt="" width="30">
<p>Yedidalga News section</p>
  <p>

    <span class="date"><?php echo $_SESSION['date4']?></span><br>
    <?php echo $_SESSION['message4']?>
     <a href="news.html">click here</a>
<br/></br></br>
     <a href="enterforroutes.php?id=1&count=1&count2=4">+change announcement</a>
  </p>
</div>



<div class="container">

  <div class="first-column" style="margin-top:50px;padding-top:30px;">

  <h2>Lefke Weekday timetable</h2>

  <?php
  $sql = "SELECT * FROM mytable WHERE id<'8'";

  echo '<table cellspacing="5" cellpadding="5">
  			<tr>

  				<td>Eul- Lefke</td>
  				<td>Lefke - Eul</td>
          <td></td>


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
                  <td><a href="time.php?id='.$row_id.'&count=1"> + change time</button></td>
  							</tr>';
  		}
  		$result->free();
  }
  ?>
  </table>
  </div>

  <div class="first-column" style="margin-top:50px;padding-top:30px;">

  <h2>Lefke Weekend timetable</h2>

  <?php
  $sql = "SELECT * FROM mytable WHERE id>='8'";

  echo '<table cellspacing="5" cellpadding="5">
        <tr>

          <td>Eul- Lefke</td>
          <td>Lefke - Eul</td>
          <td></td>


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
                  <td><a href="time.php?id='.$row_id.'&count=1"> + change time</button></td>
                </tr>';
      }
      $result->free();
  }
  ?>
  </table>
  </div>

</div>



<div class="container">
  <div class="first-column">

  <h2>Doganci Weekday timetable</h2>

  <?php
  $sql = "SELECT * FROM mytable2 WHERE id<'8'";

  echo '<table cellspacing="5" cellpadding="5">
  			<tr>

  				<td>Eul- Dogn</td>
  				<td>Dogn - Eul</td>
          <td></td>


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
                  <td><a href="time.php?id='.$row_id.'&count=2"> + change time</button></td>
  							</tr>';
  		}
  		$result->free();
  }
  ?>
  </table>
  </div>


<div class="second-column" >

<h2>Doganci Weekend timetable</h2>

<?php
$sql = "SELECT * FROM mytable2 WHERE id>='8'";

echo '<table cellspacing="5" cellpadding="5">
			<tr>

				<td>Eul- Dogn</td>
				<td>Dogn - Eul</td>
        <td></td>


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
                <td><a href="time.php?id='.$row_id.'&count=2"> + change time</button></td>
							</tr>';
		}
		$result->free();
}
?>
</table>
</div>
</div>






<div class="container">

  <div class="first-column">

  <h2>Guzelyurt Weekday timetable</h2>

  <?php
  $sql = "SELECT * FROM mytable3 WHERE id<'8'";

  echo '<table cellspacing="5" cellpadding="5">
  			<tr>

  				<td>Eul- Guz</td>
  				<td>Guz - Eul</td>
          <td></td>


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
                  <td><a href="time.php?id='.$row_id.'&count=3"> + change time</button></td>
  							</tr>';
  		}
  		$result->free();
  }
  ?>
  </table>
  </div>


<div class="second-column">

<h2>Guzelyurt Weekend timetable</h2>

<?php
$sql = "SELECT * FROM mytable3 WHERE id>='8'";

echo '<table cellspacing="5" cellpadding="5">
			<tr>

				<td>Eul- Guz</td>
				<td>Guz - Eul</td>
        <td></td>


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
                <td><a href="time.php?id='.$row_id.'&count=3"> + change time</button></td>
							</tr>';
		}
		$result->free();
}
?>
</table>
</div>
</div>


<div class="container">

  <div class="first-column">

  <h2>Yedidalga Weekday timetable</h2>

  <?php
  $sql = "SELECT * FROM mytable4 WHERE id<'8'";

  echo '<table cellspacing="5" cellpadding="5">
  			<tr>

  				<td>Eul- Yed</td>
  				<td>Yed - Eul</td>
          <td></td>


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
                  <td><a href="time.php?id='.$row_id.'&count=4"> + change time</button></td>
  							</tr>';
  		}
  		$result->free();
  }
  ?>
  </table>
  </div>


<div class="second-column">

<h2>Yedidalga Weekend timetable</h2>

<?php
$sql = "SELECT * FROM mytable4 WHERE id>='8'";

echo '<table cellspacing="5" cellpadding="5">
			<tr>

				<td>Eul- Yed</td>
				<td>Yed - Eul</td>
        <td></td>


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
                <td><a href="time.php?id='.$row_id.'&count=4"> + change time</button></td>
							</tr>';
		}
		$result->free();
}
?>
</table>
</div>
</div>



</body>
</html>
