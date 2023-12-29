<?php 

session_start();
$_SESSION["email"] = "kalvin@gmail.com";
$_SESSION["password"] = "12345"; 

if (isset($_POST['adminbutton'])) { 
   
    if ($_SESSION['email'] == $_POST['email'] and $_SESSION['password'] == $_POST['password']) { 
        echo '<script>alert("Welcome admin Kalvin")</script>';
        echo"<script>window.location.href=\"admindashboard.php\";</script>";
        
    } else { 
        echo '<script>alert("Admin does not exsit")</script>';
        echo"<script>window.location.href=\"front/signlog.php\";</script>";
    } 
} 
?> 
