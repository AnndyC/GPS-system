<?php
error_reporting(0);
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {

    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
        $folder = "images/".$filename;

    $conn = mysqli_connect("localhost", "root", "", "login");

        // Get all the submitted data from the form
        $sql = "INSERT INTO images (image1) VALUES ('$filename')";

        // Execute query
        mysqli_query($conn, $sql);

        // Now let's move the uploaded image into the folder: image
        if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
      }
  $result = mysqli_query($conn, "SELECT * FROM images");
while($data = mysqli_fetch_array($result))
{

      ?>
<img src="<?php echo $data['image1']; ?>">

<?php
}
}
?>
