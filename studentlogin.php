<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>STUDENT SIGN IN/UP</title>
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
                  <form name="f1" action = "authentication.php" onsubmit = "return validation()" method="post">
                  <div class="form-grop">
                      <div class="form-grop">
                      <label for="email">EMAIL : </label>
                      <input type="email" name="email" id="email" placeholder="email" class="form-control" maxlength="50">
                      </div>
                      <div class="form-grop">
                      <label for="student_ID">student_ID : </label>
                      <input  name="student_ID" id="student_ID" placeholder="student_id" class="form-control" maxlength="50">
                      </div>
                      <input type="submit" name="submit" id="submit" class="btn btn-success btn-lg" value="Send data">
                  </form>
                 
              </div>
          </div>
      </div>
  </div>
  <script>  
            function validation()  
            {  
                var id=document.f1.email.value;  
                var ps=document.f1.student_ID.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("Email and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("email is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script> 
    <script type="text/javascript"></script>
  </body>
</html>

