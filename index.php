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
    
    <title>Wayang Cinema</title>
    <link rel="icon" type="image/x-icon" href="img/favicon.png">
</head>

<body>
    <!-- Navbar -->
    <header class="fixed-navbar">
        <a href="index.php" class="logo">
            <img src="img/wayangLogo.png" alt="" class="logo">
            <!-- <i class="bx bx-movie"></i> Movies -->
        </a>
        

        <!-- Menu -->
        <ul class="navbar">
            <!-- <li><a href="#showtimes">Showtimes</a></li> -->
            <!-- <li><a href="#Cinemas">Cinemas</a></li> -->
            <li><a href="#movies">Movies</a></li>
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

    <!-- Home (Box 1)-->
    <section class="home swiper" id="home">
        <!-- Banner 1 -->
        <div class="swiper-wrapper">
            <div class="swiper-slide container">
                <img src="img/home1.png" alt="puss in boots banner">
                <div class="home-text">
                    <span>DreamWorks</span>
                    <h1>Puss in Boots: <br> The Last Wish</h1>
                    <a href="seatpage.php" class="btn"> Book Now</a>
                    <a href="moviepagePuss.php" class="play">
                        <i class='bx bx-play'></i>
                        <!-- <iframe class="video-container" width="853" height="480" src="https://www.youtube.com/embed/xgZLXyqbYOc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                        
                    </a>
                </div>
            </div>

            <!-- Banner 2 -->
            <div class="swiper-slide container">
                <img src="img/home2.jpg" alt="">
                <div class="home-text">
                    <span>20th Century</span>
                    <h1>Avatar <br> The Way of Water</h1>
                    <a href="seatpage.php" class="btn">Book Now</a>
                    <a href="moviepageAvatar.php" class="play">
                        <i class='bx bx-play'></i>
                    </a>
                </div>
            </div>

            <!-- Banner 3 -->
            <div class="swiper-slide container">
                <img src="img/home3.jpg" alt="">
                <div class="home-text">
                    <span>Marvel Universe</span>
                    <h1>Spiderman: <br> Far from Home</h1>
                    <a href="seatpage.php" class="btn"> Book Now</a>
                    <a href="moviepageSpider.php" class="play">
                        <i class='bx bx-play'></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="swiper-pagination"></div>
    </section>

    <!-- Movies -->
    <section class="movies" id="movies">
        <h2 class="heading">Opening This Week</h2>
        <!-- Movies Container -->
        <div class="movies-container">
            <!-- Box 1 -->
            <div class="box">                
                <div class="box-img"><a href="moviepagePuss.php"><img src="img/m1.png" alt="Puss in Boots Poster"></a></div>
            <h3>Puss in Boots</h3>
            <span>120 MINS | Cartoon</span>
            </div>

            <!-- Box 2 -->
            <div class="box">
                <div class="box-img"><a href="moviepageJurassic.php"><img src="img/m2.jpg" alt="Jurassic World Poster"></a></div>
            <h3>Jurassic World</h3>
            <span>124 MINS | Sci-Fi</span>
            </div>

             <!-- Box 3 -->
             <div class="box">
                <div class="box-img"><a href="moviepageLogan.php"><img src="img/m3.jpg" alt="Logan Poster"></a></div>
            <h3>Logan</h3>
            <span>137 MINS | Action</span>
            </div>

             <!-- Box 4 -->
             <div class="box">
                <div class="box-img"><a href="moviepageAvenger.php"><img src="img/m4.jpg" alt="Avengers: Infinity War Poster"></a></div>
            <h3>Avengers: Infinity War</h3>
            <span>149 MINS | Action</span>
            </div>

             <!-- Box 5 -->
             <div class="box">
                <div class="box-img"><a href="moviepageAvatar.php"><img src="img/m5.jpg" alt="Call Me by Your Name Poster"></a></div>
            <h3>Avatar: The Way of Water</h3>
            <span>192 MINS | Sci-Fi</span>
            </div>
            
            <!-- Box 6 -->
            <div class="box">
                <div class="box-img"><a href="moviepageSpider.php"><img src="img/m6.jpg" alt="Spider-Man: Far from Home Poster"></a></div>
            <h3>Spider-Man: Far from Home</h3>
            <span>129 MINS | Action</span>
            </div>

            <!-- Box 7 -->
            <div class="box">
                <div class="box-img"><a href="moviepageJJK.php"><img src="img/m7.jpg" alt="Jujutsu Kaisen Poster"></a></div>
            <h3>Jujutsu Kaisen 0</h3>
            <span>105 MINS | Anime</span>
            </div>

            <!-- Box 8 -->
            <div class="box">
                <div class="box-img"><a href="moviepageCall.php"><img src="img/m8.jpg" alt="Call Me by Your Name Poster"></a></div>
            <h3>Call Me by Your Name</h3>
            <span>132 MINS | Romance</span>
            </div>

            <!-- Box 9 -->
            <div class="box">
                <div class="box-img"><a href="moviepageSmile.php"><img src="img/m9.jpg" alt="SMILE Poster"></a></div>
            <h3>SMILE</h3>
            <span>115 MINS | Horror</span>
            </div>

            <!-- Box 10 -->
            <div class="box">
                <div class="box-img"><a href="moviepageInter.php"><img src="img/m10.jpg" alt="Interstellar Poster"></a></div>
            <h3>Interstellar</h3>
            <span>169 MINS | Sci-Fi</span>
            </div>
        </div>
    </section>

    <!-- Coming soon -->
    <section class="coming" id="coming">
        <h2 class="heading">Coming Soon</h2>
        <!-- Coming soon container -->
        <div class="coming-container swiper">
            <div class="swiper-wrapper">
                <!-- Box 1 -->
            <div class="swiper-slide box">
                <div class="box-img"><img src="img/coming1.jpg" alt=""></div>
            <h3>Me Before You</h3>
            <span>132 MINS | Romance</span>
            </div>

             <!-- Box 2 -->
             <div class="swiper-slide box">
                <div class="box-img"><img src="img/coming2.jpg" alt=""></div>
            <h3>More than Blue</h3>
            <span> 127 MINS | Drama</span>
            </div>

             <!-- Box 3 -->
            <div class="swiper-slide box">
                <div class="box-img"><img src="img/coming3.jpg" alt=""></div>
            <h3>Doctor Strange in the Multiverse of Madness</h3>
            <span>126 MINS | Action</span>
            </div>

             <!-- Box 4 -->
            <div class="swiper-slide box">
                <div class="box-img"><img src="img/coming4.jpg" alt=""></div>
            <h3>Your Name Engraved Herein</h3>
            <span>114 MINS | Romance</span>
            </div>

             <!-- Box 5 -->
            <div class="swiper-slide box">
                <div class="box-img"><img src="img/coming5.jpg" alt=""></div>
            <h3>Crazy Rich Asians</h3>
            <span>114 MINS | Drama</span>
            </div>
            
            <!-- Box 6 -->
            <div class="swiper-slide box">
                <div class="box-img"><img src="img/coming6.jpg" alt=""></div>
            <h3>How to Train Your Dragon: The Hidden World</h3>
            <span>104MINS | Animation</span>
            </div>

            <!-- Box 7 -->
            <div class="swiper-slide box">
                <div class="box-img"><img src="img/coming7.jpg" alt=""></div>
            <h3>Gravity</h3>
            <span>189 MINS | Sci-Fi</span>
            </div>

            <!-- Box 8 -->
            <div class="swiper-slide box">
                <div class="box-img"><img src="img/coming8.jpg" alt=""></div>
            <h3>IP Man 4</h3>
            <span>125 MINS | Thriller</span>
            </div>

            <!-- Box 9 -->
            <div class="swiper-slide box">
                <div class="box-img"><img src="img/coming9.jpg" alt=""></div>
            <h3>Guardian of the Galaxy</h3>
            <span>152 MINS | Action</span>
            </div>

            <!-- Box 10 -->
            <div class="swiper-slide box">
                <div class="box-img"><img src="img/coming10.jpg" alt=""></div>
            <h3>Johnny English</h3>
            <span>114 MINS | Comedy</span>
            </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section -->
    <section class="testimonial" id="testimonial">
        <h2 class="heading">Testimonial</h2>
        <!-- Testimonial Container -->
        <div class="testimoni-container">
            <!-- Box 1 -->
            <div class="box">
            <span>One of the best cinemas experience I ever had. The ticket price is reasonable. I really like the overall website design as it is user friendly and easy to navigate through. Definitely recommending to my family and friends.</span>            
            <h3>-Zulhilmi Zainal</h3>
            </div>

        <!-- Box 2 -->
        <div class="box">
            <span>The speakers in the hall transports you into a spatial sound experience that draws you in deeper, so you hear more and feel more. Its website is very responsive, and it has a very good online ticket booking experience.</span>
            <h3>-Hoo Dy Llen</h3>
            </div>        

        <!-- Box 3 -->
        <div class="box">
            <span>The seats are very comfortable. Besides the ultimate cinema experience, with good services, Wayang Cinema also did not fail to offer excellent food and beverages with a lot of promotions at a fair price.</span>
            <h3>-Veshal</h3>
            </div>          
        </section>

    <!-- About Us Section -->
    <section class="aboutUs" id="aboutUs">
        <h2 class="heading">About Us</h2>
        <!-- About Us Container -->
        <div class="aboutUs-container">
            <!-- Box 1 -->
            <div class="box">      
            <h3>Wayang (which also means Cinema in Bahasa Malaysia), is a fresh startup movie business that is local based. Wayang Cinema is established mainly to be a pocket-friendly, seamless, and comfortable movie provider to wide areas of consumer. We keen to tackle problems while embracing Malaysia’s iconic traditions particularly, in food. Seemless booking and payment process is our priority to give our customer and comfort and stress-free experience when indulging in one of our movies.</h3>
            </div>
       
        </section>
        
    <!-- Newsletter -->
    <section class="newsletter" id="newsletter">
        <h2>Dont miss exciting <br>Updates</h2>
        <form action="">
            <input type="email" class="email" placeholder="Enter Email" required>
            <input type="submit" value="Subscribe" class="btn">
        </form>
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

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <!-- Link to Custom JS -->
    <script src="js/main.js"></script>
    <script src="js/search.js"></script>


</body>
</html>

