<?php
include('connection.php');
session_start();

if (isset($_SESSION['password'])) {
  header('location: ./home.php');
  exit;
}

if (!isset($_POST['submit'])) {
  header('location: ./index.php');
  exit;
}

//$conn = mysqli_connect('localhost', 'root', '', 'sribuhost_');
$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM tester WHERE username='$username' AND password='$password'";

$result = mysqli_query($conn, $query);
$users_num = mysqli_num_rows($result);

if ($users_num < 1) {
  $_SESSION['login_failed'] = true;
  header('location: ./index.php');
  exit;
}

$user = mysqli_fetch_assoc($result);
$_SESSION['password'] = $user['password'];

header('location: ./home.php');
exit;
