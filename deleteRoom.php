<?php
include('connection.php');

if(isset($_GET['deleteRoomid'])){
    $id = $_GET['deleteRoomid'];
    $sql = "DELETE FROM rooms WHERE room_id=$id ";
    $result = $result = mysqli_query($conn, $sql);
    if($result){
        echo '<script>

        window.location="managertemplate.php";
        
        </script>';
    }else{
        echo' " deletion failed: " . $conn->connect_error';
    }
}


?>