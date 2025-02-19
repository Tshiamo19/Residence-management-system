<?php
include('connection.php');
session_start();

if (!isset($_SESSION['student_id'])) {
  header('location: ./newSTUDENT.php');
  exit;
}
$id = $_SESSION['student_id'] ;
$sql = "SELECT * FROM students WHERE student_id='$id'";
$studresult = mysqli_query($conn, $sql);


$mysql = "SELECT * FROM applications WHERE student_id='$id'";
$myresult = mysqli_query($conn, $mysql);

$roomsql = "SELECT * FROM allocations WHERE student_id='$id'";
$roomresult = mysqli_query($conn, $roomsql);



?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>STUDENT TEMPLATE</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="manager.css">
  </head>
  <body>
    <!-- Start your project here-->
    <div class="header">
      <div class="sidenav">
        <div class="user">
          <div>
            <h2><?= $_SESSION['student_id'] ?></h2>
          </div>
        </div>
        <ul>
          <a class="btn btn-primary" id="det" href="#"><li>Details</li></a>
          <a class="btn btn-primary" id="appli"href="#"><li>APPLICATION</li></a>

        </ul>
        <ul>
          <a class="btn btn-primary"href="logout.php"><li>LOGOUT</li></a>
        </ul>
      </div>
    </div>



      <div class="application">
        <div class="container">
            <div class="row mt-5 ml-5">
                <div class="col">
                    <div class="card mt-5 ml-5">
                        <div class="card_header">
                            <h2 class="display-6 text-center">APPLICATION  DATA</h2>
                        </div>
                        <div class="card-body">
                          <?php 
                        
                        if(mysqli_num_rows($myresult)<1){
                          echo '<a href="ADDapplication.php" class="btn btn-success">SUBMIT APPLICATION</a> ';
                        }
                        ?>
                        <table class="table table-stripped table-hover table-condensed table-bordered">
                            <tr>
                            <th>ACADEMIC YEAR</th>
                            <th>PERIOD</th>
                            <th>RESIDENCE NAME</th>
                            <th>STATUS</th>
                            

                            </tr>
                            <tr>
                            <?php
                            while($row = mysqli_fetch_array($myresult, MYSQLI_ASSOC)){
                                        echo'
                                        <tr>
                                        <td>' . $row["Academic_year"] . '</td>;
                                        <td>' . $row["period"] . '</td>;
                                        <td>' . $row["residence_id"] . '</td>;
                                        <td>' . $row["status"] . '</td>;
                                        </tr>
                                        ';
                            }
                                        ?>
                            </tr>
                        </table>

                        <table class="table table-stripped table-hover table-condensed table-bordered">
                            <tr>
                            <th>ROOM NO</th>
                            </tr>
                            <tr>
                            <?php
                            while($row = mysqli_fetch_array($roomresult, MYSQLI_ASSOC)){
                                        echo'
                                        <tr>
                                        <td>' . $row["room_no"] . '</td>;
                                        </tr>
                                        ';
                            }
                                        ?>
                            </tr>
                        </table>



                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>





          <div class="student">
        <div class="container">
            <div class="row mt-5 ml-5">
                <div class="col">
                    <div class="card mt-5 ml-5">
                        <div class="card_header">
                            <h2 class="display-6 text-center">MY DETAILS</h2>
                        </div>
                        <div class="card-body">
                        <table class="table table-stripped table-hover table-condensed table-bordered">
                            <tr>
                            <th>STUDENT ID</th>
                            <th>FIRSTNAME</th>
                            <th>LASTNAME</th>
                            <th>EMAIL</th>
                            <th>PHONE</th>
                            <th>D-O-B</th>
                            <th>GENDER</th>

                               
                               <?php
                            while($row = mysqli_fetch_array($studresult, MYSQLI_ASSOC)){
                                        echo'
                                        <tr>
                                        <td>' . $row["student_id"] . '</td>;
                                        <td>' . $row["firstname"] . '</td>;
                                        <td>' . $row["lastname"] . '</td>;
                                        <td>' . $row["email"] . '</td>;
                                        <td>' . $row["phonenumber"] . '</td>;
                                        <td>' . $row["birth_date"] . '</td>;
                                        <td>' . $row["gender"] . '</td>;
                                        
                                        </tr>
                                        ';
                            }
                                        ?>
                            </tr>
                            <tr>
                            <?php
                            while($row = mysqli_fetch_array($studresult, MYSQLI_ASSOC)){
                                        echo'
                                        <tr>
                                        <td>' . $row["student_id"] . '</td>;
                                        <td>' . $row["firstname"] . '</td>;
                                        <td>' . $row["lastname"] . '</td>;
                                        <td>' . $row["email"] . '</td>;
                                        <td>' . $row["phonenumber"] . '</td>;
                                        <td>' . $row["birth_date"] . '</td>;
                                        <td>' . $row["gender"] . '</td>;
                                       
                                        </tr>
                                        ';
                            }
                                        ?>
                            </tr>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

    <!-- MDB -->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript">

    </script>
    <script>
      $(".application").hide();

      $("#det").click(function(){
        $(".student").show();
        $(".application").hide();
      })
      $("#appli").click(function(){
        $(".application").show();
        $(".student").hide();

      })


    </script>
  </body>
</html>