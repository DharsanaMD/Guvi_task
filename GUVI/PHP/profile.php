<?php
session_start(); 

if (!isset($_SESSION['username'])) {
    
    header("Location: ../login.html");
    exit();
}

include 'connection.php';

$username = $_SESSION['username'];

$sql = "SELECT * FROM `registerlogin` WHERE username = '$username'";
$result = mysqli_query($con, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    $userData = mysqli_fetch_assoc($result);
    header('Content-Type: application/json');
    echo json_encode($userData);
} else {
    
    echo json_encode(array('error' => 'User data not found'));
}
?>
