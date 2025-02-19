<?php
session_start();
include('connection.php');
if(isset($_POST['submit'])){
    $application_id = rand(10, 100);
    $student_id = $_SESSION['student_id'];
    $residence = $_POST['resiID'];
    $period = $_POST['period'];
    $academic_year = $_POST['AcademicYear'];
    $date = date("Y/m/d");
    $myquery = mysqli_query($conn , "INSERT INTO applications VALUES (' $application_id','$student_id','$residence','$period','IN-PROCESS','$academic_year','$date')");
    if($myquery){
        echo '<script>

        window.location="studenttemplate.php";
        
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
    <title>ADD APPLICATION</title>
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
                  <h1>ADD APPLICATION!</h1>
                  <br/>
                  <form method="post">
    
                      <select name="resiID">
                        <?php
                        include('connection.php');
                        $residence_id = mysqli_query($conn, "SELECT * FROM residence");
                        while($res_id = mysqli_fetch_array($residence_id)){
                        ?>
                        <option value="<?php echo $res_id['residence_id'] ?> "><?php echo $res_id['residence_name'] ?> </option>
                        <?php } ?>
                      </select>
                      <br>
                      <select name="period">
                        <option value="10">FULL YEAR</option>
                        <option value="5">HALF YEAR</option>
                      </select>
                      <br>
                      <select name="AcademicYear">
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                      </select> 
                      <br>             
                      <input type="submit" name="submit" id="submit" class="btn btn-success btn-lg" value="Send data">

                     
                  </form>
                 
              </div>
          </div>
      </div>
  </div>


    <script type="text/javascript"></script>
  </body>
</html>