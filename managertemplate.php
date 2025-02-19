
<?php
require_once('connection.php');

$sql = "SELECT * FROM students";
$studresult = mysqli_query($conn, $sql);

$query = "SELECT * FROM residence";
$resresult = mysqli_query($conn, $query);

$roomquery = "SELECT * FROM rooms";
$roomresult = mysqli_query($conn, $roomquery);

$appquery = "SELECT * FROM applications WHERE  status='IN-PROCESS'";
$appresult = mysqli_query($conn, $appquery);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>MANAGER TEMPLATE</title>
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
            <h2>RESIDENCE</h2>
            <p>MANAGER</p>
          </div>
        </div>
        <ul>
          <a class="btn btn-primary" id="stats" href="#"><li>Details</li></a>
          <a class="btn btn-primary" id="apps"href="#"><li>APPLICATIONS</li></a>
          <a class="btn btn-primary" id="roomres"href="#"><li>RESIDENCES <br> ROOMS</li></a>
          <a class="btn btn-primary" id="stud"href="#"><li>STUDENTS</li></a>
        </ul>
        <ul>
          <li><a class="btn btn-primary" href="index.php"><li>LOGOUT</li></a></li>
        </ul>
      </div>
    </div>

    <div class="resdeledit">
    <div class="container">
        <div class="row mt-5 ml-5">
            <div class="col">
                <div class="card mt-5 ml-5">
                    <div class="card_header">
                        <h2 class="display-6 text-center">RESIDENCE DATA</h2>

                    </div>
                    <div class="card-body">
                    <table class="table table-stripped table-hover table-condensed table-bordered">
                      <a href="ADDresidence.php" class="btn btn-success">ADD RESIDENCE</a>
                        <tr>
                        <th>RESIDENCE ID</th>
                        <th>RESIDENCE NAME</th>
                        <th>CAPACITY</th>
                        <th>LOCATION</th>
                        <th>delete</th>
                        
                        </tr>
                        <tr>
                        <?php
                                    while($row = mysqli_fetch_array($resresult, MYSQLI_ASSOC)){
                                        echo'
                                        <tr>
                                        <td>' . $row["residence_id"] . '</td>;
                                        <td>' . $row["residence_name"] . '</td>;
                                        <td>' . $row["capacity"] . '</td>;
                                        <td>' . $row["location"] . '</td>;
                                        <td>' . $row["description"] . '</td>;
                                        <td> <a href="delete.php? deleteid= '. $row["residence_id"] .'"class="btn btn-danger">delete</a> </td>;
                                        
                                        </tr>
                                        ';
                                     /*   $count++;
                                        echo "<p>Row number : $count</p>";
                                        print_r( $row);*/
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

    <div class="roomdeledit">
      <div class="container">
          <div class="row mt-5 ml-5">
              <div class="col">
                  <div class="card mt-5 ml-5">
                      <div class="card_header">
                          <h2 class="display-6 text-center">ROOMS  DATA</h2>
                      </div>
                      <div class="card-body">
                      <table class="table table-stripped table-hover table-condensed table-bordered">
                        <a href="ADDroom.php" class="btn btn-success">ADD ROOM</a>
                          <tr>
                          <th>ROOM ID</th>
                          <th>ROOM NUMBER</th>
                          <th>RESIDENCE ID</th>
                          <th>ROOM STATUS</th>
                          <th>delete</th>
                          
                          </tr>
                          <tr>
                          <?php
                                    while($row = mysqli_fetch_array($roomresult, MYSQLI_ASSOC)){
                                        echo'
                                        <tr>
                                        <td>' . $row["room_id"] . '</td>;
                                        <td>' . $row["room_no"] . '</td>;
                                        <td>' . $row["residence_id"] . '</td>;
                                        <td>' . $row["room_status"] . '</td>;
                                        <td> <a href="deleteRoom.php? deleteRoomid= '. $row["room_id"] .'"class="btn btn-danger">delete</a> </td>;
                                        
                                        </tr>
                                        ';
                                     /*   $count++;
                                        echo "<p>Row number : $count</p>";
                                        print_r( $row);*/
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

      <div class="application">
        <div class="container">
            <div class="row mt-5 ml-5">
                <div class="col">
                    <div class="card mt-5 ml-5">
                        <div class="card_header">
                            <h2 class="display-6 text-center">APPLICATION  DATA</h2>
                        </div>
                        <div class="card-body">
                        <table class="table table-stripped table-hover table-condensed table-bordered">
                            <tr>
                            <th>APPLICATION ID</th>
                            <th>STUDENT ID</th>
                            <th>RESIDENCE NAME</th>
                            <th>ACADEMIC YEAR</th>
                            <th>APPLICATION DATE</th>
                            <th>REJECT</th>
                            <th>ALLOCATE</th>
                            <th>ACCEPT</th>
                            </tr>
                            <tr>
                              <?php
                            while($row = mysqli_fetch_array($appresult, MYSQLI_ASSOC)){
                                        echo'
                                        <tr>
                                        <td>' . $row["application_id"] . '</td>;
                                        <td>' . $row["student_id"] . '</td>;
                                        <td>' . $row["residence_id"] . '</td>;
                                        <td>' . $row["Academic_year"] . '</td>;
                                        <td>' . $row["aaplication_date"] . '</td>;
                                        <td> <a href="rejectid.php? rejectid= '. $row["application_id"] .'"class="btn btn-danger">reject</a> </td>;
                                        <td> <a href="ACCEPTapplication.php? acceptid= '. $row["application_id"] .'"class="btn btn-success">ACCEPT</a> </td>;
                                        <td> <a href="allocateid.php? allocateid= '. $row["student_id"] .' " class="btn btn-primary">allocate</a> </td>;
                                        </tr>
                                        ';
                                     /*   $count++;
                                        echo "<p>Row number : $count</p>";
                                        print_r( $row);*/
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

        <div class="stats">
          <div class="container">
              <div class="row mt-5 ml-5">
                  <div class="col">
                      <div class="card mt-5 ml-5">
                          <div class="card_header">
                              <h2 class="display-6 text-center">STATISTICS</h2>
                          </div>
                          <div class="card-body">
                            <div class="females">
                              <h2>females : <span id="females">5</span></h2>
                            </div>
                            <div class="males">
                              <h2>males : <span id="males">6</span></h2>
                            </div>
                            <div class="total">
                              <h2>total : <span id="total">6</span></h2>
                            </div>
                            <div class="restotal">
                              <h2>res total : <span id="restotal">6</span></h2>
                            </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          </div>

          <div class="students">
        <div class="container">
            <div class="row mt-5 ml-5">
                <div class="col">
                    <div class="card mt-5 ml-5">
                        <div class="card_header">
                            <h2 class="display-6 text-center">STUDENTS  DATA</h2>
                        </div>
                        <div class="card-body">
                        <table class="table table-stripped table-hover table-condensed table-bordered">
                            <tr>
                            <th>STUDENT ID</th>
                            <th>FIRSTNAME</th>
                            <th>LASTNAME</th>
                            <th>EMAIL</th>
                            <th>CONTACT NUMBER</th>
                            <th>BIRTH DATE</th>
                            <th>GENDER</th>
                            <th>DELETE</th>
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
                                        <td> <a href="deleteStudent.php? studentDelid= '. $row["student_id"] .'"class="btn btn-danger">delete</a> </td>;
                                        </tr>
                                        ';
                                     /*   $count++;
                                        echo "<p>Row number : $count</p>";
                                        print_r( $row);*/
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
      $(".resdeledit").hide();
      $(".roomdeledit").hide();
      $(".application").hide();
      $(".stats").hide();
      $(".students").hide();

      $("#stats").click(function(){
      $(".stats").show();
      $(".resdeledit").hide();
      $(".roomdeledit").hide();
      $(".application").hide();
      $(".students").hide();
      })

      $("#apps").click(function(){
        $(".application").show();
        $(".stats").hide();
        $(".resdeledit").hide();
       $(".roomdeledit").hide();
       $(".students").hide();
      })

      $("#roomres").click(function(){
        $(".resdeledit").show();
        $(".roomdeledit").show();
        $(".application").hide();
      $(".stats").hide();
      $(".students").hide();
      })

      $("#stud").click(function(){
        $(".students").show();
        $(".resdeledit").hide();
        $(".roomdeledit").hide();
        $(".application").hide();
      $(".stats").hide();
      })
    </script>
  </body>
</html>