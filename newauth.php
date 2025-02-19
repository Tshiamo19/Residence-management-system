<?php
include('connection.php');
session_start();

if (isset($_SESSION['student_id'])) {
  header('location: ./studentTemplate.php');
  exit;
}

if (!isset($_POST['submit'])) {
  header('location: ./newSTUDENT.php');
  exit;
}

//$conn = mysqli_connect('localhost', 'root', '', 'sribuhost_');
$username = $_POST['email'];
$student_id = $_POST['student_id'];

$query = "SELECT * FROM students WHERE email='$username' AND student_id='$student_id'";

$result = mysqli_query($conn, $query);
$users_num = mysqli_num_rows($result);

if ($users_num < 1) {
  $_SESSION['login_failed'] = true;
  header('location: ./newSTUDENT.php');
  exit;
}

$user = mysqli_fetch_assoc($result);
$_SESSION['student_id'] = $user['student_id'];
echo '<script>alert("Welcome to Geeks for Geeks")</script>';
header('location: ./studentTemplate.php');
exit;