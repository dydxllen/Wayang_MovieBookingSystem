<?php
// todo:
// get user data from db
// display on form
// submit form and update user data
include "front/config.php";
global $conn;

session_start();
if (!isset($_SESSION["email"])) {
    header("Location: index.php");
    exit();
}

$email = $_SESSION["email"];

// update profile btn being clicked
if (isset($_POST['updateProfileBtn'])) {
    $newName = $_POST['name'];
    $newEmail = $_POST['email'];
    $newPassword = $_POST['password'];

    $updateSql = "UPDATE signup
    SET name = '$newName', email= '$email', password = '$newPassword' 
    WHERE email = '$email'";

  
     $result         = mysqli_query($conn, $updateSql);
     if ($result) {
        echo '<script>alert("Your update is succcessful")</script>';
     }
}

$sql = "SELECT * FROM `signup` WHERE email = '$email' LIMIT 1";
$result         = mysqli_query($conn, $sql);
$user           = mysqli_fetch_assoc($result);



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">

    <!-- Box Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

    <title>Wayang Cinema</title>

</head>

<body>
    <!-- Navbar -->
    <header>
        <a href="loginpage.php" class="logo">
            <img src="img/wayangLogo.png" alt="" class="logo">
            <!-- <i class="bx bx-movie"></i> Movies -->
        </a>
        <!-- <div class="bx bx-menu" id="menu-icon"></div> -->

        <!-- Menu -->
        <ul class="navbar">
            <!-- <li><a href="#showtimes">Showtimes</a></li> -->
            <!-- <li><a href="#Cinemas">Cinemas</a></li> -->
            <li><a href="index.php">Movies</a></li>
            <li><a href="Promotion.php">Promotions</a></li>
            <li><a href="#aboutUs">About Us</a></li>
            <li><a href="#newsletter">Newsletter</a></li>
        </ul>

        <a href="#" class="search"><i class='bx bx-search'></i></a>

        <div class="header-btn">
            <!-- <a href="#" class="sign-up">Sign Up</a> -->
            <div class="header-btn">
                <!-- <a href="#" class="sign-up">Sign Up</a> -->
                <a href="profile.php" class="signin">
                    <i class='bx bxs-user'></i>
                </a>
                <a href="index.php" class="logout">
                    <i class='bx bx-log-out'></i>
                </a>
            </div>
        </div>
    </header>

    <section>
        <center>
            <div class="form-container sign-in-container" style="margin-top:100px; padding:100px;">
                <form action="" method="POST">
                    <h1>Update profile </h1>
                    <div class="social-container">
                    </div>
                    <input type="name" name="name" placeholder="Name" value="<?php echo $user['name'] ?>"></br>
                    <input readonly type="email" name="email" placeholder="Email" value="<?php echo $user['email'] ?>"></br>
                    <input type="password" name="password" placeholder="Password" value="<?php echo $user['password'] ?>"><br>

                    <button type="submit" name="updateProfileBtn">Update</button>
                </form>
            </div>
        </center>
    </section>