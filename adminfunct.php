<?php

//session_start();
// connect to database
$conn = mysqli_connect('localhost', 'root', '', 'login');
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$errors   = array();




if (isset($_POST['updatetime_btn'])) {
  header('location: time.php');
}

// if edit_btn is clicked
if (isset($_POST['editmessage_btn'])) {
$id          =  ($_POST['id']);
$_SESSION['editid']= $id;
header('location: entermessage.php');
}



		// if delete_btn is clicked
if (isset($_POST['deletemessage_btn'])) {
	$id = $_SESSION['editid'];
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


if (isset($_POST['updatemessage_btn'])) {
	$id = ($_POST['id']);
  $count = ($_POST['count']);
  $message    =  ($_POST['message']);
  $date    =  ($_POST['date']);
  $title    =  ($_POST['title']);

   if ($count==1){
    if(!empty($message)){
            $query="UPDATE messages SET message1= '$message' ,date1= '$date', title1= '$title' WHERE id='$id' ";
          $run = mysqli_query($conn, $query);
          if($run>0){

            if($id==2){
            ?>
            <script>
              alert('message update successful!')
              window.open('indexpage.php','_self')
            </script>
              <?php
            }
            if($id==3){
            ?>
            <script>
              alert('message update successful!')
              window.open('editnews.php','_self')
            </script>
              <?php
            }
          }
        }
      }


      if ($count==2){
          if(!empty($message)){
                  $query="UPDATE messages SET message2= '$message' ,date2= '$date', title2= '$title' WHERE id='$id' ";
                $run = mysqli_query($conn, $query);
                if($run>0){
                  if($id==2){
                  ?>
                  <script>
                    alert('message update successful!')
                    window.open('indexpage.php','_self')
                  </script>
                    <?php
                  }
                  if($id==3){
                  ?>
                  <script>
                    alert('message update successful!')
                    window.open('editnews.php','_self')
                  </script>
                    <?php
                  }
                }
              }
            }

            if ($count==3){
                if(!empty($message)){
                        $query="UPDATE messages SET message3= '$message' ,date3= '$date', title3= '$title' WHERE id='$id' ";
                      $run = mysqli_query($conn, $query);
                      if($run>0){
                        if($id==2){
                        ?>
                        <script>
                          alert('message update successful!')
                          window.open('indexpage.php','_self')
                        </script>
                          <?php
                        }
                        if($id==3){
                        ?>
                        <script>
                          alert('message update successful!')
                          window.open('editnews.php','_self')
                        </script>
                          <?php
                        }
                      }
                    }
                  }
}



if (isset($_POST['updatemessage1_btn'])) {
	$id = ($_POST['id']);
  $count = ($_POST['count']);
  $count2 = ($_POST['count2']);
  $message    =  ($_POST['message']);
  $date    =  ($_POST['date']);
//  $title    =  ($_POST['title']);

   if ($count==1){
    if(!empty($message)){


            if($count2==1){
              if($id==1){
              $query="UPDATE messages SET message1= '$message' ,date1= '$date' WHERE id='$id' ";
              $run = mysqli_query($conn, $query);
              if($run>0){
              ?>
              <script>
                alert('message changed successful!')
                window.open('routespage.php','_self')
              </script>
                <?php
              }
            }
            else{
                $query="UPDATE messages SET message4= '$message' ,date4= '$date' WHERE id='$id' ";
                $run = mysqli_query($conn, $query);
                if($run>0){
                ?>
                <script>
                  alert('message changed successful!')
                  window.open('editnews.php','_self')
                </script>
                  <?php
                }
            }

          }

            if($count2==2){
              if($id==1){
              $query="UPDATE messages SET message2= '$message' ,date2= '$date' WHERE id='$id' ";
            $run = mysqli_query($conn, $query);
            if($run>0){
            ?>
            <script>
              alert('message changed successful!')
              window.open('routespage.php','_self')
            </script>
              <?php
            }
          }
          else{
              $query="UPDATE messages SET message5= '$message' ,date5= '$date' WHERE id='$id' ";
              $run = mysqli_query($conn, $query);
              if($run>0){
              ?>
              <script>
                alert('message changed successful!')
                window.open('editnews.php','_self')
              </script>
                <?php
              }
          }
          }

            if($count2==3){
              if($id==1){
              $query="UPDATE messages SET message3= '$message' ,date3= '$date' WHERE id='$id' ";
            $run = mysqli_query($conn, $query);
            if($run>0){
            ?>
            <script>
              alert('message changed successful!')
              window.open('routespage.php','_self')
            </script>
              <?php
            }
          }
          else{
              $query="UPDATE messages SET message6= '$message' ,date6= '$date' WHERE id='$id' ";
              $run = mysqli_query($conn, $query);
              if($run>0){
              ?>
              <script>
                alert('message changed successful!')
                window.open('editnews.php','_self')
              </script>
                <?php
              }
          }
          }

          if($count2==4){
          $query="UPDATE messages SET message4= '$message' ,date4= '$date' WHERE id='$id' ";
          $run = mysqli_query($conn, $query);
          if($run>0){
          ?>
          <script>
            alert('message changed successful!')
            window.open('routespage.php','_self')
          </script>
            <?php
          }
        }
        }
      }




      if ($count==2){
          if(!empty($message)){
                  $query="UPDATE messages SET message5= '$message' ,date5= '$date' WHERE id='$id' ";
                $run = mysqli_query($conn, $query);
                if($run>0){
                  ?>
                  <script>
                    alert('message changed successful!')
                    window.open('editnews.php','_self')
                  </script>
                    <?php
                  }
              }
            }

            if ($count==3){
                if(!empty($message)){
                        $query="UPDATE messages SET message6= '$message' ,date6= '$date' WHERE id='$id' ";
                      $run = mysqli_query($conn, $query);
                      if($run>0){

                        ?>
                        <script>
                          alert('message changed successful!')
                          window.open('editnews.php','_self')
                        </script>
                          <?php
                        }
                    }
                  }
}





      if (isset($_POST['done_btn'])) {

        $id = ($_POST['id']);
        $first    =  ($_POST['first0']);
        $second    =  ($_POST['second2']);
        $count = ($_POST['count']);

        //  if(!empty($first)){
                 if($count==1){
                  $query="UPDATE mytable SET first= '$first', second ='$second' WHERE id='$id' ";
                $run = mysqli_query($conn, $query);
                if($run>0){
                  ?>
                  <script>
                    alert('time update successful!')
                    window.open('routespage.php','_self')
                  </script>
                    <?php
                }
                else{
                  ?>
                  <script>
                    alert('fail')
                    window.open('routespage.php','_self')
                  </script>
                    <?php
                }
            }

            if($count==2){
             $query="UPDATE mytable2 SET first= '$first', second ='$second' WHERE id='$id' ";
           $run = mysqli_query($conn, $query);
           if($run>0){
             ?>
             <script>
               alert('time update successful!')
               window.open('routespage.php','_self')
             </script>
               <?php
           }
           else{
             ?>
             <script>
               alert('fail')
               window.open('routespage.php','_self')
             </script>
               <?php
           }
       }

       if($count==3){
        $query="UPDATE mytable3 SET first= '$first', second ='$second' WHERE id='$id' ";
      $run = mysqli_query($conn, $query);
      if($run>0){
        ?>
        <script>
          alert('time update successful!')
          window.open('routespage.php','_self')
        </script>
          <?php
      }
      else{
        ?>
        <script>
          alert('fail')
          window.open('routespage.php','_self')
        </script>
          <?php
      }
  }

  if($count==4){
   $query="UPDATE mytable4 SET first= '$first', second ='$second' WHERE id='$id' ";
 $run = mysqli_query($conn, $query);
 if($run>0){
   ?>
   <script>
     alert('time update successful!')
     window.open('routespage.php','_self')
   </script>
     <?php
 }
 else{
   ?>
   <script>
     alert('fail')
     window.open('routespage.php','_self')
   </script>
     <?php
 }
}
            }

?>
