<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"
          content="IE=edge">
    <meta name="viewport"
          content="width=device-width,
                   initial-scale=1.0">
    <title>Wayang</title>
    <link rel="stylesheet"
          href="css/admindashboard.css">
</head>
 
<body>
   
    <!-- for header part -->
    <header>
 
        <div class="logosec">
            <div class="logo">Wayang</div>
            <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210182541/Untitled-design-(30).png"
                class="icn menuicn"
                id="menuicn"
                alt="menu-icon">
        </div>
 
        <div class="searchbar">
            <input type="text"
                   placeholder="Search">
            <div class="searchbtn">
              <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210180758/Untitled-design-(28).png"
                    class="icn srchicn"
                    alt="search-icon">
              </div>
        </div>
 
        <div class="message">
            <div class="circle"></div>
            <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210183322/8.png"
                 class="icn"
                 alt="">
            <div class="dp">
              <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210180014/profile-removebg-preview.png"
                    class="dpicn"
                    alt="dp">
              </div>
        </div>
 
    </header>
 
    <div class="main-container">
        <div class="navcontainer">
            <nav class="nav">
                <div class="nav-upper-options">
                    <div class="nav-option option1">
                        <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210182148/Untitled-design-(29).png"
                            class="nav-img"
                            alt="dashboard">
                        <h3> Dashboard</h3>
                    </div>
 
                    <a href="admin/userR.php">
                    <div class="nav-option option3">
                        <h3> User</h3>
                    </div>
                    </a>

                    <a href="admin/foodR.php">
                    <div class="nav-option option5">
                        <h3> Food & beverage</h3>
                    </div>
                    </a>
                    
                    <a href="admin/seatR.php">
                    <div class="nav-option option6">
                        <h3> Seat </h3>
                    </div>
                    </a>
 
                    <div class="nav-option logout">
                        <?php session_destroy();?>
                        <a href="index.php">
                        <h3>Logout</h3>
                        </a>
                    </div>
 
                </div>
            </nav>
        </div>
        <div class="main">
 
            <div class="searchbar2">
                <input type="text"
                       name=""
                       id=""
                       placeholder="Search">
                <div class="searchbtn">
                  <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210180758/Untitled-design-(28).png"
                        class="icn srchicn"
                        alt="search-button">
                  </div>
            </div>
 
            <div class="box-container">
 
                <div class="box box1">
                    <div class="text">
                        <h2 class="topic-heading">60.5k</h2>
                        <h2 class="topic">Movie Views</h2>
                    </div>
 
                    <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210184645/Untitled-design-(31).png"
                        alt="Views">
                </div>
 
                <div class="box box2">
                    <div class="text">
                        <h2 class="topic-heading">15000</h2>
                        <h2 class="topic">Likes</h2>
                    </div>
 
                    <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210185030/14.png"
                         alt="likes">
                </div>
 
                <div class="box box3">
                    <div class="text">
                        <h2 class="topic-heading">3200</h2>
                        <h2 class="topic">Comments</h2>
                    </div>
 
                    <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210184645/Untitled-design-(32).png"
                        alt="comments">
                </div>
 
                <div class="box box4">
                    <div class="text">
                        <h2 class="topic-heading">70</h2>
                        <h2 class="topic">Show</h2>
                    </div>
 
                    <img src=
"https://media.geeksforgeeks.org/wp-content/uploads/20221210185029/13.png" alt="published">
                </div>
            </div>
 
            <div class="report-container">
                <div class="report-header">
                    <h1 class="recent-Articles">Recent Movie</h1>
                    <button class="view">View All</button>
                </div>
 
                <div class="report-body">
                    <div class="report-topic-heading">
                        <h3 class="t-op">Movie</h3>
                        <h3 class="t-op">Views</h3>
                        <h3 class="t-op">Comments</h3>
                        <h3 class="t-op">Status</h3>
                    </div>
 
                    <div class="items">
                        <div class="item1">
                            <h3 class="t-op-nextlvl">M#0012</h3>
                            <h3 class="t-op-nextlvl">2.9k</h3>
                            <h3 class="t-op-nextlvl">210</h3>
                            <h3 class="t-op-nextlvl lavel-tag">SHOWING</h3>
                        </div>
 
                        <div class="item1">
                            <h3 class="t-op-nextlvl">M#0013</h3>
                            <h3 class="t-op-nextlvl">1.5k</h3>
                            <h3 class="t-op-nextlvl">360</h3>
                            <h3 class="t-op-nextlvl lavel-tag">SHOWING</h3>
                        </div>
 
                        <div class="item1">
                            <h3 class="t-op-nextlvl">M#0014</h3>
                            <h3 class="t-op-nextlvl">1.1k</h3>
                            <h3 class="t-op-nextlvl">150</h3>
                            <h3 class="t-op-nextlvl lavel-tag">SHOWING</h3>
                        </div>
 
                        <div class="item1">
                            <h3 class="t-op-nextlvl">M#0015</h3>
                            <h3 class="t-op-nextlvl">1.2k</h3>
                            <h3 class="t-op-nextlvl">420</h3>
                            <h3 class="t-op-nextlvl lavel-tag">SHOWING</h3>
                        </div>
 
                        <div class="item1">
                            <h3 class="t-op-nextlvl">M#0016</h3>
                            <h3 class="t-op-nextlvl">2.6k</h3>
                            <h3 class="t-op-nextlvl">190</h3>
                            <h3 class="t-op-nextlvl lavel-tag">SHOWING</h3>
                        </div>
 
                        <div class="item1">
                            <h3 class="t-op-nextlvl">M#0017</h3>
                            <h3 class="t-op-nextlvl">1.9k</h3>
                            <h3 class="t-op-nextlvl">390</h3>
                            <h3 class="t-op-nextlvl lavel-tag">SHOWING</h3>
                        </div>
 
                        <div class="item1">
                            <h3 class="t-op-nextlvl">M#0018</h3>
                            <h3 class="t-op-nextlvl">1.2k</h3>
                            <h3 class="t-op-nextlvl">580</h3>
                            <h3 class="t-op-nextlvl lavel-tag">SHOWING</h3>
                        </div>
 
                        <div class="item1">
                            <h3 class="t-op-nextlvl">M#0019</h3>
                            <h3 class="t-op-nextlvl">3.6k</h3>
                            <h3 class="t-op-nextlvl">160</h3>
                            <h3 class="t-op-nextlvl lavel-tag">SHOWING</h3>
                        </div>
 
                        <div class="item1">
                            <h3 class="t-op-nextlvl">M#0020</h3>
                            <h3 class="t-op-nextlvl">1.3k</h3>
                            <h3 class="t-op-nextlvl">220</h3>
                            <h3 class="t-op-nextlvl lavel-tag">SHOWING</h3>
                        </div>
 
                    </div>
                </div>
            </div>
        </div>
    </div>
 
    <script src="js/index.js"></script>
</body>
</html>