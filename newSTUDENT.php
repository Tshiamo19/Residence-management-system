<?php

session_start();

if (isset($_SESSION['student_id'])) {
  header('location: ./studentTemplate.php');
  exit;
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>STUDENT SIGN IN</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">

    <link rel="stylesheet" href="template.css">
  </head>
  <body>
    <!-- Start your project here-->




  <div class="container4">
      <div class="man_log">
          <div class="row">
              <div class="col-sm-offset-1 col-sm-10 contactForm" >
                  <h1>STUDENT LOGIN!</h1>
                  <br/>
                  <?php if (isset($_SESSION['login_failed'])) : ?>
        <div class="alert">
          Incorrect username or password!
        </div>
      <?php
        unset($_SESSION['login_failed']);
      endif;
      ?>
                  <form  action = "./newauth.php"  method="post">
                  <div class="form-grop">
                      <div class="form-grop">
                      <label for="email">EMAIL : </label>
                      <input type="email" name="email" id="email" placeholder="email" class="form-control" maxlength="50">
                      </div>
                      <div class="form-grop">
                      <label for="student_ID">student_ID : </label>
                      <input  name="student_id" id="student_iD" placeholder="student_id" class="form-control" maxlength="50">
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
