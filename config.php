<?php

session_start();
$servername = "localhost";
//server
$username = "root";
//USERNAME
$password="";
//PASSWORD
$dbname="login";
//dbname


/*CONNECTION*/
$db = mysqli_connect($servername,$username,$password,$dbname);

//CHECKCONNECTION
if($db === false){
  die("Error: connection error." .mysqli_connect_error());
}



function isAdmin()
{
	if (isset($_SESSION['id_type']) == 'admin' ) {
		;
	}else{
		return false;
    header('location:login.php');
	}
}
 ?>
