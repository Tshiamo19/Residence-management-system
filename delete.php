<?php
include('connection.php');

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    $sql = "DELETE FROM residence WHERE residence_id=$id ";
    $result = $result = mysqli_query($conn, $sql);
    if($result){
        echo '<script>

        window.location="managertemplate.php";
        
        </script>';
    }else{
        die("deletion failed: " . $conn->connect_error);
    }
}


?>