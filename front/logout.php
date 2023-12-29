<?php
session_start();

// Destroy session

if(session_destroy()) {
    header("Location: ../index.php"); // Redirecting To login Page
}
?>