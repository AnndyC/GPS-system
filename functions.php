<?php

session_start();
// connect to database
$db = mysqli_connect('localhost', 'root', '', 'login');

// variable declaration
$username = "";
$email    = "";
$id    = "";
$uname="";
$errors   = array();


// call the register() function if register_btn is clicked
if (isset($_POST['register_btn'])) {
		$password = md5($password_1);//encrypt the password before saving in the database
			$username    =  ($_POST['username']);
			$email       =  ($_POST['email']);
			$id          =  ($_POST['id']);
			$id_type     =  ($_POST['id_type']);
			$type         =  ($_POST['type']);
			$shift     =  ($_POST['shift']);
			$station        =  ($_POST['station']);
			$contact    = ($_POST['contact']);

			if (empty($username)) {
				array_push($errors, "Username is required");
			}
			if (empty($email)) {
				array_push($errors, "Email is required");
			}
			if (empty($id)) {
				array_push($errors, "id is required");
			}
			if (empty($password_1)) {
				array_push($errors, "Password is required");
			}
			if ($password_1 != $password_2) {
				array_push($errors, "The two passwords do not match");
			}

			$query = "INSERT INTO dataa (id, username, email, id_type, type, password,station,shift,contact)
					  VALUES('$id','$username', '$email', '$id_type', '$type','$password', '$station','$shift','$contact')";
            $run = mysqli_query($db, $query);
            if($run>0){
              ?>
              <script>
                alert('user successfully created!')
                window.open('edit.php','_self')
                </script>
                <?php
            }

            else {
              ?>
              <script>
                alert('error..try again!')
                window.open('createuser.php','_self')
                </script>
                <?php
            }
		}


    // if edit_btn is clicked
if (isset($_POST['edit_btn'])) {
  $id          =  ($_POST['id']);
  $_SESSION['editid']= $id;
  header('location: enterdatabase.php');
    }


		// if delete_btn is clicked
if (isset($_POST['delete_btn'])) {
	$id = $_POST['id'];
	$query="DELETE FROM dataa WHERE id='$id' ";
	$run = mysqli_query($db, $query);
	 if($run>0){
		 	 ?>
		 	 <script>
		 		 alert('delete successful!')
		 	   window.open('edit.php','_self')
		 	 </script>
		 	 <?php
		 }
	else{
		 ?>
		 	<script>
		 	 	alert('error....try again!')
		 		window.open('edit.php','_self')
		 	</script>
			<?php
		 			}
		   }


if (isset($_POST['updateuser_btn'])) {
	$id = $_POST['id'];
  $username    =  ($_POST['username']);
	$id_type     =  ($_POST['id_type']);
	$email       =  ($_POST['email']);
	$password_1  =  ($_POST['password_1']);
	$shift       =  ($_POST['shift']);
	$station       =  ($_POST['station']);
	$contact       =  ($_POST['contact']);
    if(!empty($username)){
            $query="UPDATE dataa SET username= '$username',id_type='$id_type',email ='$email', password='$password_1',shift ='$shift',station ='$station',contact ='$contact' WHERE id='$id' ";
          $run = mysqli_query($db, $query);
          if($run>0){
            ?>
            <script>
              alert('user update successful!')
              window.open('edit.php','_self')
            </script>
              <?php
          }
        }
      }



		$api_key_value = "tPmAT5Ab3j7F9";

$api_key= $latitude = $longitude = "";


function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// return user array from their id
function getUserById($id){
	global $db;
	$query = "SELECT * FROM data WHERE id=''$id'";
	$result = mysqli_query($db, $query);

	$user = mysqli_fetch_assoc($result);
	return $user;
}

// escape string
function e($val){
	global $db;
	return mysqli_real_escape_string($db, trim($val));
}

function display_error() {
	global $errors;

	if (count($errors) > 0){
		echo '<div class="error">';
			foreach ($errors as $error){
				echo $error .'<br>';
			}
		echo '</div>';
	}
}
?>
