<?php

include('connection.php');
if(isset($_POST['submit'])){
    $room_id = rand(100, 999);
    $room_no = $_POST['room_no'];
    $residence = $_POST['resiID'];
    $myquery = mysqli_query($conn , "INSERT INTO rooms VALUES ('$room_id','$room_no','$residence','available')");
    if($myquery){
        echo '<script>

        window.location="managertemplate.php";
        
        </script>';
    }else{
        echo "ERROR: Hush! Sorry $myquery. "
        . mysqli_error($conn);
    }
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>ADD ROOM</title>
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
                  <h1>ADD ROOM!</h1>
                  <br/>
                  <form method="post">
                      <div class="form-grop">
                      <div class="form-grop">
                      <label for="room_no">ROOM Number : </label>
                      <input type="number" name="room_no" id="room_no" placeholder="Room Number" class="form-control" maxlength="10">
                      </div>
                      <select name="resiID">
                        <?php
                        include('connection.php');
                        $residence_id = mysqli_query($conn, "SELECT * FROM residence");
                        while($res_id = mysqli_fetch_array($residence_id)){
                        ?>
                        <option value="<?php echo $res_id['residence_id'] ?> "><?php echo $res_id['residence_name'] ?> </option>
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