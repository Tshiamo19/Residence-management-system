<?php

require_once('connection.php');

if(isset($_POST['submit'])){
  $manager_id = rand(10000, 99999);
  $firstname =  $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $phone =  $_POST['phone'];
  $sql = "INSERT INTO residence_manager VALUES ('$manager_id','$firstname','$lastname','$email','$phone')";
  $result = $conn->query($sql);
  if($result){
    echo '<script>

    window.location="managerSIGN.php";
    
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
    <title>MANAGER SIGNUP</title>
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
                  <h1>MANAGER REGISTER!</h1>
                  <br/>
                  <form method="post">
                     <div class="form-grop">
                      <label for="phone">Phone Number : </label>
                      <input type="number" name="phone" id="phone" placeholder="Phone Number" class="form-control" maxlength="10">
                      </div>

                      <div class="form-grop">
                      <label for="firstname">FIRSTNAME : </label>
                      <input type="text" name="firstname" id="firstname" placeholder="firstname" class="form-control" maxlength="30">
                      </div>
                      <div class="form-grop">
                      <label for="lastname">LASTNAME : </label>
                      <input type="text" name="lastname" id="lastname" placeholder="lastname" class="form-control" maxlength="30">
                      </div>
                      <div class="form-grop">
                      <label for="email">EMAIL : </label>
                      <input type="email" name="email" id="email" placeholder="email" class="form-control" maxlength="50">
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