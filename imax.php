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
    
    <title>Promotion Detail Page</title>
    
    <style type="text/css">
        .term-list {

          list-style: none; /* Remove default bullets */
        }

        .term-list li{
            color: white;
            padding-left: 3rem;
        }

        .term-list li::before {
          content: "\2022";  /* Add content: \2022 is the CSS Code/unicode for a bullet */
          color: white;
          font-weight: bold;
          display: inline-block; 
          width: 1.5em;
          margin-left: -1em; 
        }
    </style>
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
        
        <!-- <a href="#" class="search"><i class='bx bx-search'></i></a> -->
        <nav>
            <div class="search">
                        <input type="text" placeholder="Search movies..." id="search" class="search_input">
                        <i class="fas fa-search" id="search_icon"></i>
                        <div class="search_bx2">
                            <!-- <a href="#">
                                <img src="img/a perfact.jpg" alt="">
                                <div class="content2">
                                    <h6>A Perfact</h6>
                                    <p>2018</p>
                                </div>
                            </a> -->
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
        <h1>Maybank Customers Exclusive</h1>
        <div class="detail-row">

            <div class="col-left">
                <img src="img/imax.png" />
            </div>
            <div class="col-right">
                <h5 class="term">Terms and Conditions</h5>
                <br>
                <ul class="term-list">
                  <li>Promo is applicable to IMAX 2D standard seats only.</li>
                  <li>Promo is applicable only when purchase is made with a Maybank Mastercard or Visa card only.</li>
                  <li>Each cardholder can only redeem a maximum of 2 promo tickets per transaction.</li>
                  <li>Wayang Cinemas reserves the right to revise these terms & conditions without prior notice.</li>
                </ul>

            </div>

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

    <!-- Link to Custom JS -->
    <script src="js/search.js"></script>
    
</body>
</html>