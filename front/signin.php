<?php 
include "config.php"; 
global $conn; 
 
session_start(); 
 
if (isset($_POST['singinBtn'])) { 
    $email = mysqli_real_escape_string($conn, $_POST['email']); 
    $password = mysqli_real_escape_string($conn, $_POST['password']); 
 
    $loginUserQuery = "SELECT * FROM signup WHERE email = '$email' AND password = '$password'"; 
    $res = mysqli_query($conn, $loginUserQuery); 
    if (mysqli_num_rows($res) > 0) { 
        $_SESSION['email'] = $email; 
        echo '<script>alert("Your login is succcessful")</script>';
        echo"<script>window.location.href=\"../loginpage.php\";</script>";
    } else { 
        echo '<script>alert("User does not exist")</script>';
        echo"<script>window.location.href=\"signlog.php\";</script>"; 
    } 
} 
?> 
