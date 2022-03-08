<?php
include ('functions.php');

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
<html>
<head>
	<title> - Edit user info</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
		.header {
			background: #003366;
      margin-bottom: 1px;
		}


		button {
padding-top: 10px;
margin-top: 10px;
      min-height: 40px;
      background-color: yellow;
		}

    .employeedirectory{
      padding: 40px;
      margin-top: 1px;
    }
   .employeedirectory h2{
     padding-top: 0px;
   }
    table td{
      font-size: 13px;
    }
	</style>
</head>
<body>
	<div class="header">
		<h2>Admin - Edit user</h2>
	</div>

	<div class="employeedirectory" >
<h2> User database</h2>
<?php
$sql = "SELECT id, username, email, contact, shift, station,type,id_type,password FROM dataa WHERE id_type='user' ORDER BY id ASC";

echo '<table cellspacing="5" cellpadding="5">
			<tr>


				<td>ID</td>
        <td>Name</td>
				<td>Email</td>
				<td>Type</td>
				<td>Contact</td>
				<td>Shift</td>
				<td>Station</td>
<td></td>
<td></td>
			</tr>';

if ($result = $conn->query($sql)) {
		while ($row = $result->fetch_assoc()) {

				$row_username = $row["username"];
					$row_id = $row["id"];
				$row_email = $row["email"];
					$row_type = $row["type"];
				$row_contact = $row["contact"];
				$row_shift = $row["shift"];
				$row_station = $row["station"];
        $row_id_type = $row["id_type"];
        $row_password = $row["password"];

				echo '<tr>

								<td ><img src="images/avatar.png"  alt="" width="20" height="20">' .$row_id . '</td>
								<td>' . $row_username . '</td>
								<td>' . $row_email . '</td>
								<td>' . $row_type . '</td>
								<td>' . $row_contact . '</td>
								<td>' . $row_shift . '</td>
								<td>' . $row_station . '</td>
                  <td><a href="update.php?id='.$row_id.'&username='.$row_username.'&password='.$row_password.'&id_type='.$row_id_type.'&type='.$row_type.'&email='.$row_email.'&contact='.$row_contact.'&shift='.$row_shift.'&station='.$row_station.'"> +edit user</button></td>
  <td><a href="delete.php?id='.$row_id.'&username='.$row_username.'&type='.$row_type.'&email='.$row_email.'&contact='.$row_contact.'"> - delete user</button></td>
							</tr>';
		}
		$result->free();
}
?>
	</table>
  <button type="submit" class="btn" name="back_btn "> <a href="createuser.php">Create new User</a> </button>

    <button type="submit" class="btn" name="back_btn"> <a href="adminhome.php">Back<<<<</a> </button>
 </div>

</body>
</html>
