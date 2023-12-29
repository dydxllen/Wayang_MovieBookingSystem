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
    
    <!-- Link Swiper's CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    
    <title>Jujutsu Kaisen 0 </title>
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

    <div>
        <section class="movie-page">
                <div class="details">
                    <img class="movie-poster" src="img/m7.jpg" alt="Avengers">
                    <div class="description">
                        <div class="movie-title">
                            <h1>Jujutsu Kaisen 0 </h1>
                        </div>
                        <ul class="movie-details">
                            <li><i class='bx bxs-calendar' id="icon" ></i> Release Date: 24/12/2021</li>
                            <li>
                                <i class='bx bxs-message-dots' id="icon" ></i> 
                                Spoken Language: ENG</li>
                            <li>
                                <i class='bx bxs-time' id="icon"></i> 
                                Running time: 105 minutes</li>
                            <li>
                                <i class='bx bxs-purchase-tag' id="icon">
                                </i> Genre: Animation</li>
                        </ul>
                            <p><strong>Ditributor</strong><br> TOHO</p> <br>
                            <p><strong>Cast</strong><br>Megumi Ogata, Kana Hanazawa, Mikako Komatsu, Koki Uchiyama, Tomokazu Seki, Yuichi Nakamura, Takahiro Sakurai</p> <br>
                            <p><strong>Synopsis</strong><br>Yuta Okkotsu gains control of an extremely powerful, cursed spirit and gets enrolled in the Tokyo Prefectural Jujutsu High School by sorcerers to help him control his power and keep an eye on him.<br></p>
                            <br>

                            <a href="seatpage.php" class="btn">Book Now</a>
                            <!-- <i class='bx bx-play'></i> 
                            Watch Trailer </a> -->
                            
                            <!-- <div class="trailer">
                            <iframe onclick="toggle();" width="420" height="315"
                            src="https://www.youtube.com/embed/RqrXhwS33yc?controls=0" controls="true"></iframe>
                            <img src="img/exit-button.jpeg" class="close" onclick="toggle();">
                            </div>  -->
                    </div>
                </div>
        </section>
    </div>

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