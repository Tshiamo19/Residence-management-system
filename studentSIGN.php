<?php

require_once('connection.php');

if(isset($_POST['submit'])){
  $student_id = rand(10000, 99999);
  $gender = $_POST['gender'];
  $firstname =  $_POST['stufirstname'];
  $lastname = $_POST['stulastname'];
  $student_pin = $_POST['student_pin'];
  $email = $_POST['stuemail'];
  $birth_date =$_POST['dob'];
  $phone =  $_POST['stuphone'];
  $sql = "INSERT INTO students VALUES ('$student_id',
  '$firstname','$lastname','$email','$phone','$birth_date','$gender','$student_pin')";
  $result = $conn->query($sql);
  if($result){
    echo '<script>alert("USE YOUR EMAIL TO LOGIN")</script>';
    echo '<script>

    window.location="index.php";
    
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
    <title>STUDENT SIGN UP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">

    <link rel="stylesheet" href="template.css">
  </head>
  <body>
    <!-- Start your project here-->

    <div class="container1">
      <div class="stud_reg">
          <div class="row">
              <div class="col-sm-offset-1 col-sm-10 contactForm" >
                  <h1>STUDENT REGISTER!</h1>
                  <br/>
                  <form method="post">
                  <div class="form-grop">
                      <label for="phone">Phone Number : </label>
                      <input type="number" name="stuphone" id="phone" placeholder="Phone Number" class="form-control" maxlength="10">
                      </div>
                      <div class="form-grop">
                      <label for="firstname">FIRSTNAME : </label>
                      <input type="text" name="stufirstname" id="firstname" placeholder="firstname" class="form-control" maxlength="30">
                      </div>
                      <div class="form-grop">
                      <label for="lastname">LASTNAME : </label>
                      <input type="text" name="stulastname" id="lastname" placeholder="lastname" class="form-control" maxlength="30">
                      </div>
                      <div class="form-grop">
                      <label for="dob">D-O-B :  </label>
                      <input type="date" name="dob" id="dob" placeholder="date of birth" class="form-control">
                      </div>
                      <div class="form-grop">
                      <label for="email">EMAIL : </label>
                      <input type="email" name="stuemail" id="email" placeholder="email" class="form-control" maxlength="50">
                      </div>
                      <div class="form-grop">
                      <label for="password">PIN : </label>
                      <input  name="student_pin" id="pin" placeholder="create pin" class="form-control" maxlength="50">
                      </div>
                      <select name="gender" class="form-select" aria-label="Default select example">
                          <option value="" disabled selected hidden>CHOOSE GENDER</option>
                          <option value="FEMALE">FEMALE</option> 
                          <option value="MALE">MALE</option> 
                      </select>
                      <div>
                        <a></a>
                        <input type="submit" name="submit" id="submit" class="btn btn-success btn-lg" value="Send data">
                      </div>

                        
                  </form>
                 
              </div>
      </div>
  </div>



  </body>
</html>
