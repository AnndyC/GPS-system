 <?php
session_start();
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

if (isset($_POST['login_button'])){
      $username = $_POST['username'];
      $password =  $_POST['password'];
//to check data base or user
     $sql = "SELECT * FROM `dataa` WHERE username='$username' AND
     password = '$password'";
     $result = mysqli_query($conn, $sql);

  if(mysqli_num_rows($result)==1){
        $logged_in_user = mysqli_fetch_assoc($result);
        if($logged_in_user['id_type']=='admin'){
        $_SESSION['username'] = $logged_in_user['username'];
        $_SESSION['id_type'] = $logged_in_user['id_type'];
        header ("location: adminhome.php");
      }
      else{
        $_SESSION['username'] = $logged_in_user['username'];
        $_SESSION['id_type'] = $logged_in_user['id_type'];
        $_SESSION['id'] = $logged_in_user['id'];
        header ("location: index.php");
        echo  "LOGIN SUCCESS!!!". $username. "<br>";
      }
    }

      else{
        ?>
        <script>
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange =
        function(){
                     if(this.readyState == 4 && this.status == 200){
                       document.getElementById("eror").innerHTML = this.responseText;
                     }
               };
       xmlhttp.open("GET","message.php", true);
       xmlhttp.send();
       </script>
       <?php
    }


}
$conn -> close();

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Lefke Transportation - login page</title>
    <link rel = "shortcut icon" href ="images/logo.png">
  </head>
  <body>

    <div class="loginbox" style="background-color:;min-height:450px;min-width:400px;" >
      <img src="images/avatar.png" class="avatar">
      <h3>Welcome to EUL bus service information center. </h3>
        <p>USERNAME is firstname and PASSWORD is studentid for students or staffid for staff.</p>
      <br/>


<form class="" action="login.php" method="post">

  <label for ="username">Username:</label><br>
  <input id="username" type="username" name="username" value="" placeholder="enter username"><br>

  <label for="pass">Password:</label><br>
  <input id="pass" type="password" name="password" value="" placeholder="enter password"><br>
<div id="eror" style="color:red;"></div>


  <button type="submit" name="login_button">Submit</button>
</form></br>
For more assistance, contact the support team @support.eul.edu.tr.
</div>
</body>
</html>
