<?php

include('connection.php');
//session_start();
$stud_id = $_SESSION['student_id'];
if(isset($_POST['submit'])){
    $room_no = $_POST['roomno'];
    $upquery = "UPDATE rooms SET room_status='taken' WHERE room_no='$room_no'";
    $upresult = mysqli_query($conn, $upquery);
    if(!$$upresult){
        echo "ERROR: Hush! Sorry $upresult. "
        . mysqli_error($conn);
    }
    $id = $_GET['allocateid'];

}
//$room_no = $_POST['roomno'];

if(isset($_GET['allocateid'])){
    $allid = rand(100000, 999999);
    $id = $_GET['allocateid'];
    $date = date("Y/m/d");
    $upsql = "UPDATE applications SET status='ACCEPTED' WHERE application_id='$id' ";
    $updresult = mysqli_query($conn, $upsql);
    if(!$updresult){
            echo "ERROR: Hush! Sorry $updresult. "
            . mysqli_error($conn);
        }
    
    /*$stud_id = $_SESSION['student_id'];
    $sql = "INSERT INTO allocations VALUES ('$allid','$stud_id','$room_no','$date')";
    $result = $result = mysqli_query($conn, $sql);
    if($result){
        echo '<script>

        window.location="managertemplate.php";
        
        </script>';
    }else{
        echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
    }*/

    if(isset($_POST['submit'])){
        $allid = rand(100000, 999999);
        //$stud_id = $_SESSION['student_id'];
        $room_no = $_POST['roomno'];
        $date = date("Y/m/d");
        $sql = "INSERT INTO allocations VALUES ('$allid','$id','$room_no','$date')";
        $result = $result = mysqli_query($conn, $sql);
        if($result){
            echo '<script>
    
            window.location="managertemplate.php";
            
            </script>';
        }else{
            echo "ERROR: Hush! Sorry $sql. "
            . mysqli_error($conn);
        }
    }

}



?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>ROOM ALLOCATION</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">

    <link rel="stylesheet" href="template.css">
  </head>
  <body>
    <!-- Start your project here-->
  <div class="container2">
      <div class="man_reg">
          <div class="row">
              <div class="col-sm-offset-1 col-sm-10 contactForm" >
                  <h1>ROOM ALLOCATION!</h1>
                  <br/>
                  <form method="post">

                      <select name="roomno">
                        <?php
                        include('connection.php');
                        $room = mysqli_query($conn, "SELECT * FROM rooms WHERE room_status='available'");
                        while($room_no = mysqli_fetch_array($room)){
                        ?>
                        <option value="<?php echo $room_no['room_no'] ?> "><?php echo $room_no['room_no'] ?> </option>
                        <?php } ?>
                      </select>                      
                      <input type="submit" name="submit" id="submit" class="btn btn-success btn-lg" value="Send data">

                     
                  </form>
                 
              </div>
          </div>
      </div>
  </div>


    <script type="text/javascript"></script>
  </body>
</html>