<?php
include('connection.php');

if(isset($_GET['studentDelid'])){
    $id = $_GET['studentDelid'];
    $mysql = "DELETE FROM students WHERE student_id=$id ";
    $myresult =  mysqli_query($conn, $mysql);
    if($myresult){
        echo '<script>

        window.location="managertemplate.php";
        
        </script>';
    }else{
        die("deletion failed: " . $conn->connect_error);
    }
}


?>