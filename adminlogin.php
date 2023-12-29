<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    
    <!-- Box Icons -->
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    
    <title>Wayang Cinema</title>

</head>

<body>
    <!-- Navbar -->
    <header>
        <a href="index.php" class="logo">
            <img src="img/wayangLogo.png" alt="" class="logo">
            <!-- <i class="bx bx-movie"></i> Movies -->
        </a>
        <!-- <div class="bx bx-menu" id="menu-icon"></div> -->

        <!-- Menu -->
        <ul class="navbar">
            <!-- <li><a href="#showtimes">Showtimes</a></li> -->
            <!-- <li><a href="#Cinemas">Cinemas</a></li> -->
            <li><a href="#movies">Movies</a></li>
            <li><a href="Promotion.php">Promotions</a></li>
            <li><a href="#aboutUs">About Us</a></li>
            <li><a href="#newsletter">Newsletter</a></li>
        </ul>            
        
        <a href="#" class="search"><i class='bx bx-search'></i></a>
        
        <div class="header-btn">
            <!-- <a href="#" class="sign-up">Sign Up</a> -->
            
        </div>
    </header>
      
    <center>
    <form action="adminsignin.php" method="POST" style="padding-top: 300px;">
        
        <h1>Sign In as admin</h1></br>

        <input type="email" name="email" placeholder="Email"></br>
        <input type="password" name="password" placeholder="Password"></br>

        <button type="submit" name="adminbutton">Sign In</button>
    </form>
    </center>