<?php

require_once('connection.php');

if(isset($_POST['submit'])){
  $residence_id = rand(1000, 99999);
  $residence_name =  $_POST['resname'];
  $capacity = $_POST['capacity'];
  $location = $_POST['reslocation'];
  $description =  $_POST['resDescription'];
  $sql = "INSERT INTO residence VALUES ('$residence_id','$residence_name','$capacity','$location','$description')";
  $result = $conn->query($sql);
  if($result){
    echo '<script>

    window.location="managertemplate.php";
    
    </script>';
  }else{
    echo "ERROR: Hush! Sorry $sql. "
    . mysqli_error($conn);
  }
  }

//$phone =  $_POST['stuphone'];


         
        // Close connection
        mysqli_close($conn);
        

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>ADD RESIDENCE</title>
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
                  <h1>ADD RESIDENCE!</h1>
                  <br/>
                  <form method="post">
                      <div class="form-grop">
                      <label for="capacity">CAPACITY : </label>
                      <input type="number" name="capacity" id="capacity" placeholder="CAPACITY" class="form-control" maxlength="10">
                      </div>
                      <div class="form-grop">
                      <label for="resname">RESIDENCE NAME : </label>
                      <input type="text" name="resname" id="resname" placeholder="RESIDENCE NAME" class="form-control" maxlength="30">
                      </div>
                      <div class="form-grop">
                      <label for="reslocation">LOCATION : </label>
                      <input type="text" name="reslocation" id="reslocation" placeholder="LOCATION" class="form-control" maxlength="30">
                      </div>
                      <div class="form-grop">
                      <label for="resDescription">DESCRPTION : </label>
                      <textarea id="resDescription" name="resDescription" type="text" rows="4" cols="50"></textarea>
                      </div>
                      <input type="submit" name="submit" id="submit" class="btn btn-success btn-lg" value="Send data">
                  </form>
                 
              </div>
          </div>
      </div>
  </div>


    <script type="text/javascript"></script>
  </body>
</html>