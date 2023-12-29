<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/search.css">

    <!-- Box Icons -->
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <title>Promotion Page</title>
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
            <li><a href="index.php">Movies</a></li>
            <li><a href="Promotion.php">Promotions</a></li>
            <li><a href="#aboutUs">About Us</a></li>
            <li><a href="#newsletter">Newsletter</a></li>
        </ul>            
        
        <nav>
            <div class="search">
                        <input type="text" placeholder="Search movies..." id="search" class="search_input">
                        <i class="fas fa-search" id="search_icon"></i>
                        <div class="search_bx2">
                        </div>
            </div>
        </nav>
        
        <div class="header-btn">
        <?php
            if (!isset($_SESSION["email"])) {
                echo '<a href="front/signlog.php" class="log-in">Log In</a>';
            } else {
                echo "<a href='profile.php' class='signin'>
                <i class='bx bxs-user'></i>
            </a>
            <a href='front/logout.php' class='logout'>
                <i class='bx bx-log-out'></i>
            </a>";
            }
        ?>
        </div>
    </header>

    <!-- Promotion Page -->
    <section class="promotion" id="promotion">
        <h1>All Promotions</h1>
        <div class="poster">
            <a href="visa.php">
                <img src="img/visa.png" />
            </a>
            <a href="imax.php">
                <img src="img/imax.png" />
            </a>
            <a href="ball.php">
                <img src="img/ball.png" />
            </a>
            <a href="milo.php">
                <img src="img/milo promo.png" />
            </a>
            <a href="popcorn.php">
                <img src="img/popcorn.png" />
            </a>
            <a href="puss.php">
                <img src="img/puss.png" />
            </a>  
        </div>
    </section>

    <!-- Footer -->
    <section class="footer">
        <a href="index.php" class="logo">
            <img src="img/wayangLogo.png" alt="" class="logo">
            <!-- <i class="bx bx-movie"></i> Movies -->
        </a>
        <div class="social">
            <a href="#"><i class='bx bxl-facebook'></i></a>
            <a href="#"><i class='bx bxl-twitter'></i></a>
            <a href="#"><i class='bx bxl-instagram'></i></a>
            <a href="#"><i class='bx bxl-tiktok'></i></a>
        </div>
    </section>

    <!-- Copyright -->
    <div class="copyright">
        <p>&#169; WayangCinema All Right Reserved.  </p>
    </div>
    
    <script src="js/search.js"></script>

</body>
</html>