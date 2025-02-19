<?php      
    include('connection.php');  
    $email = $_POST['email'];  
    $manager_ID = $_POST['manager_ID'];  
      
        //to prevent from mysqli injection  
        $email = stripcslashes($email);  
        $manager_ID = stripcslashes($manager_ID);  
        $email = mysqli_real_escape_string($conn, $email);  
        $manager_ID = mysqli_real_escape_string($conn, $manager_ID);  
      
        $sql = "select * from residence_manager where email = '$email' and manager_id = '$manager_ID'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result); 
          
        if($count == 1){  
            echo '<script>

            window.location="managertemplate.php";
            
            </script>';
        }  
        else{  
            echo "invalid";
 
        }     
?>