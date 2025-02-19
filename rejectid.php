<?php
include('connection.php');

if(isset($_GET['rejectid'])){
    $id = $_GET['rejectid'];
    $sql = "UPDATE applications  SET status='REJECTED' WHERE application_id='$id' ";
    $result = $result = mysqli_query($conn, $sql);
    if($result){
        echo '<script>

        window.location="managertemplate.php";
        
        </script>';
    }else{
        echo"deletion failed: " . $conn->connect_error;
    }
}


?>