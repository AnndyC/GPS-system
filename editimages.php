
<?php
session_start();
if($_SESSION['id_type']!=='admin'){
  header('location:login.php');
}
include ('images.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Image Upload</title>
<link rel="stylesheet" type= "text/css" href ="style.css"/>
<div id="content">

  <form method="POST" action="" enctype="multipart/form-data">
      <input type="file" name="uploadfile" value=""/>

      <div>
          <button type="submit" name="upload">UPLOAD</button>
        </div>
  </form>
</div>
</body>
</html>
