<?php

require_once('connection.php');


if(isset($_POST['submit'])){
  $room_id = rand(100, 999);
  $room_no =  $_POST['room_no'];
  $residence_id = $_POST['reses'];


  $sql = "INSERT INTO rooms VALUES ('$room_id','$room_no','$residence_id','available')";
  $result = $conn->query($sql);
  if($result){
    echo '<script>

    window.location="managertemplate.php";
    
    </script>';
  }else{
    echo "ERROR: Hush! Sorry $sql. "
    . mysqli_error($conn);
  }
  }

//$phone =  $_POST['stuphone'];

        // Close connection
        mysqli_close($conn);


        

?>

