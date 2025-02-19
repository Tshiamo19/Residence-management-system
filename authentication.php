<?php      
    include('connection.php');  
    $email = $_POST['email'];  
    $student_ID = $_POST['student_ID'];  
      
        //to prevent from mysqli injection  
        $email = stripcslashes($email);  
        $student_ID = stripcslashes($student_ID);  
        $email = mysqli_real_escape_string($conn, $email);  
        $student_ID = mysqli_real_escape_string($conn, $student_ID);  
      
        $sql = "select * from students where email = '$email' and student_id = '$student_ID'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo '<script>

            window.location="studentTemplate.php";
            
            </script>';
        }  
        else{  
            echo "invalid";
            echo '<script>

            window.location="studentlogin.php";
            
            </script>';  
        }     
?>