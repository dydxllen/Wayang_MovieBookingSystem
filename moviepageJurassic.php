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
    
    <title>Jurassic World</title>
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
                    <img class="movie-poster" src="img/m2.jpg" alt="Jurassic World">
                    <div class="description">
                        <div class="movie-title">
                            <h1>Jurassic World</h1>
                        </div>
                        <ul class="movie-details">
                            <li><i class='bx bxs-calendar' id="icon" ></i> Release Date: 29/05/2015</li>
                            <li>
                                <i class='bx bxs-message-dots' id="icon" ></i> 
                                Spoken Language: ENG</li>
                            <li>
                                <i class='bx bxs-time' id="icon"></i> 
                                Running time: 124 minutes</li>
                            <li>
                                <i class='bx bxs-purchase-tag' id="icon">
                                </i> Genre: Sci-Fi</li>
                        </ul>
                            <p><strong>Ditributor</strong><br> Universal Pictures</p> <br>
                            <p><strong>Cast</strong><br>Chris Pratt, Bryce Dallas Howard, Vincent D'Onofrio, Ty Simpkins, Nick Robinson, Omar Sy, BD Wong, Irrfan Khan</p> <br>
                            <p><strong>Synopsis</strong><br>A theme park showcasing genetically-engineered dinosaurs turns into a nightmare for its tourists when one of the dinosaurs escapes its enclosure. An ex-military animal expert steps up to save the day.<br></p>
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