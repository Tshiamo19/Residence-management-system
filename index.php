<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>WELCOME</title>
    <link rel="stylesheet" href="style.css" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    
  </head>
  <body>

    <!-- Start your project here-->
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
      <!-- Container wrapper -->
      <div class="container-fluid">
        <!-- Toggle button -->
        <button
          class="navbar-toggler"
          type="button"
          data-mdb-toggle="collapse"
          data-mdb-target="#navbarLeftAlignExample"
          aria-controls="navbarLeftAlignExample"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <i class="fas fa-bars"></i>
        </button>
    
        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarLeftAlignExample">
          <!-- Left links -->
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="newSTUDENT.php">STUDENT LOGIN</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="managerlogin">MANAGER LOGIN</a>
            </li>
            <!-- Navbar dropdown -->


          </ul>
          <!-- Left links -->
        </div>
        <!-- Collapsible wrapper -->
      </div>
      <!-- Container wrapper -->
    </nav>
    <!-- End your project here-->
    <div class="jumbotron" id="jumbotron">
      <h1>...STUDENT HOUSING... </h1>
      <h2>Live where learning never stops</h2>
      <h3>Your second home with a degree</h3>
      <p>Click the button below to register</p>

<a class="btn btn-primary" href="managerSIGN.php">MANAGER</a>
<a class="btn btn-primary" href="studentSIGN.php">STUDENT</a>

</button>
    </div>


<div class="footer">
  <div class="container-fluid">
    <p>Developed by The Fantastic &copy;</p>
  </div>
</div>

<div class="container1">
      <div class="stud_reg">
          <div class="row">
              <div class="col-sm-offset-1 col-sm-10 contactForm" >
                  <h1>STUDENT REGISTER!</h1>
                  <br/>
                  <form method="post">
                  <div class="form-grop">
                      <label for="ID">ID : </label>
                      <input type="number" name="stuID" id="ID" placeholder="ID" class="form-control" maxlength="4">
                      </div>
                      <label for="ID">Phone Number : </label>
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
                      <label for="email">EMAIL : </label>
                      <input type="email" name="stuemail" id="email" placeholder="email" class="form-control" maxlength="50">
                      </div>
                      <div class="form-grop">
                      <label for="dob">D-O-B :  </label>
                      <input type="date" name="dob" id="dob" placeholder="date of birth" class="form-control">
                      </div>
                      <div class="form-grop">
                      <label for="password">PASSWORD : </label>
                      <input  name="stupassword" id="password" placeholder="password" class="form-control" maxlength="50">
                      </div>
                      <select class="form-select" aria-label="Default select example"> RESIDENCES
                          <option selected>Open this select menu</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                      <div>
                        <input type="submit" name="submit" id="submit" class="btn btn-success btn-lg" value="Send data">
                      </div>

                        
                  </form>
                 
              </div>
      </div>
  </div>

  <div class="container2">
      <div class="man_reg">
          <div class="row">
              <div class="col-sm-offset-1 col-sm-10 contactForm" >
                  <h1>MANAGER REGISTER!</h1>
                  <br/>
                  <form method="post">
                  <div class="form-grop">
                      <label for="ID">ID : </label>
                      <input type="number" name="ID" id="ID" placeholder="ID" class="form-control" maxlength="4">
                      </div>
                      <div class="form-grop">
                      <label for="ID">Phone Number : </label>
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
                      <div class="form-grop">
                      <label for="password">PASSWORD : </label>
                      <input  name="password" id="password" placeholder="password" class="form-control" maxlength="50">
                      </div>
                      <input type="submit" name="submit" id="submit" class="btn btn-success btn-lg" value="Send data">
                  </form>
                 
              </div>
          </div>
      </div>
  </div>

  <div class="container3">
      <div class="man_log">
          <div class="row">
              <div class="col-sm-offset-1 col-sm-10 contactForm" >
                  <h1>MANAGER LOGIN!</h1>
                  <br/>
                  <form method="post">
                  <div class="form-grop">
                      <div class="form-grop">
                      <label for="email">EMAIL : </label>
                      <input type="email" name="email" id="email" placeholder="email" class="form-control" maxlength="50">
                      </div>
                      <div class="form-grop">
                      <label for="password">PASSWORD : </label>
                      <input  name="password" id="password" placeholder="password" class="form-control" maxlength="50">
                      </div>
                      <input type="submit" name="submit" id="submit" class="btn btn-success btn-lg" value="Send data">
                  </form>
                 
              </div>
          </div>
      </div>
  </div>

  <div class="container4">
      <div class="man_log">
          <div class="row">
              <div class="col-sm-offset-1 col-sm-10 contactForm" >
                  <h1>STUDENT LOGIN!</h1>
                  <br/>
                  <form method="post">
                  <div class="form-grop">
                      <div class="form-grop">
                      <label for="email">EMAIL : </label>
                      <input type="email" name="email" id="email" placeholder="email" class="form-control" maxlength="50">
                      </div>
                      <div class="form-grop">
                      <label for="password">PASSWORD : </label>
                      <input  name="password" id="password" placeholder="password" class="form-control" maxlength="50">
                      </div>
                      <input type="submit" name="submit" id="submit" class="btn btn-success btn-lg" value="Send data">
                  </form>
                 
              </div>
          </div>
      </div>
  </div>

<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

<script>
  $(".container1").hide();
  $(".container4").hide();
  $(".container2").hide();
  $(".container3").hide();

  $("#loginManager").click(function(){
    $(".container1").hide();
  $(".container4").hide();
  $(".container2").hide();
  $(".container3").show();
  })

  $("#loginStudent").click(function(){
  $(".container1").hide();
  $(".container4").show();
  $(".container2").hide();
  $(".container3").hide();
  })

</script>


  </body>
</html>