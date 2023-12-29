<?php
include "config.php";
global $conn;

session_start();
if (!isset($_SESSION["email"])) {
  echo '<script>alert("Please login first before buying tickets")</script>';
  echo"<script>window.location.href=\"front/signlog.php\";</script>";
  exit();
}

if (isset($_POST['nameDisplay'])) {
  $nameDisplay = $_POST['nameDisplay'];
  $NumberDisplay = $_POST['NumberDisplay'];
  $seatsDisplay = $_POST['seatsDisplay'];
  $movie = $_POST['movie'];
  $total = $_POST['total'];

  // echo $nameDisplay;
  // echo $NumberDisplay;
  // echo $seatsDisplay;
  // echo $movie;
  // echo $total;

  $sql = "INSERT INTO seat (name,Number_of_seat,seats,movie,ticket_price) 
    VALUES('$nameDisplay','$NumberDisplay', '$seatsDisplay', '$movie', '$total') ";


  $result = mysqli_query($conn, $sql);
  $seat_id = mysqli_insert_id($conn);
  // echo "New record created successfully. ID: " . $seat_id;

  if ($result) {
    echo "<script>
      localStorage.removeItem('seat_id');
      localStorage.setItem('seat_id', $seat_id);
      location.href = 'promotionpage.php';
    </script>";
  }
}


// insert data to seat table
// get the id from it
// store in localstorage
// redirect to foot&beverage page
// after clicking buynow
// store into database

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

  <!-- Box Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <title>Movie Seat Booking</title>

  <link rel="stylesheet" href="css/seatpage.css">
</head>

<body onload="onLoaderFunc()">
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

    <a href="#" class="search"><i class='bx bx-search'></i></a>

    <div class="header-btn">
      <!-- <a href="#" class="sign-up">Sign Up</a> -->
      <a href="profile.php" class="signin">
          <i class='bx bxs-user'></i>
      </a>
      <a href="index.php" class="logout">
          <i class='bx bx-log-out'></i>
      </a>
    </div>
  </header>

  <section>

    <div class="inputForm">
      <center>
        Name *: <input type="text" id="Username" name="name" required>
        No. of Seat(s) *: <input type="number" id="Numseats" name="Numseats" required>
        <br /><br />
        <button onclick="takeData()">Start Selecting</button>
      </center>
    </div>

    <center>
      <div class="movie-container">
        <label style="font-size: 1em;">Pick a movie:</label>
        <select name="movie">

          <option name="movie" value="Puss in Boots">Puss in Boots (RM12)</option>
          <option name="movie" value="Jurassic Park">Jurassic Park (RM12)</option>
          <option name="movie" value="Logan">Logan (RM12)</option>
          <option name="movie" value="Avatar: The Way of Water">Avatar: The Way of Water (RM12)</option>
          <option name="movie" value="Spider-Man: Far from Home">Spider-Man: Far from Home (RM12)</option>
          <option name="movie" value="Jujutsu Kaisen 0">Jujutsu Kaisen 0 (RM12)</option>
          <option name="movie" value="Call Me by Your Name">Call Me by Your Name (RM12)</option>
          <option name="movie" value="SMILE">SMILE (RM12)</option>
          <option name="movie" value="Interstellar">Interstellar (RM12)</option>
        </select>
      </div>
    </center>

    <div class="seatStructure">
      <center>

        <table id="seatsBlock">
          <p id="notification"></p>
          <tr>
            <td colspan="20">
              <div class="screen"></div>
            </td>
            <td rowspan="30" class="space">
              <div class="smallBox greenBox">Selected Seat</div> <br />
              <div class="smallBox redBox">Reserved Seat</div><br />
              <div class="smallBox emptyBox">Empty Seat</div><br />
            </td>

            <br />
          </tr>

          <tr>
            <td></td>
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
            <td></td>
            <td>6</td>
            <td>7</td>
            <td>8</td>
            <td>9</td>
            <td>10</td>
            <td>11</td>
            <td>12</td>
          </tr>

          <tr>
            <td>A</td>
            <td><input type="checkbox" class="seats" value="A1" name="seat"></td>
            <td><input type="checkbox" class="seats" value="A2" name="seat"></td>
            <td><input type="checkbox" class="seats" value="A3" name="seat"></td>
            <td><input type="checkbox" class="seats" value="A4" name="seat"></td>
            <td><input type="checkbox" class="seats" value="A5" name="seat"></td>
            <td class="seatGap"></td>
            <td><input type="checkbox" class="seats" value="A6" name="seat"></td>
            <td><input type="checkbox" class="seats" value="A7" name="seat"></td>
            <td><input type="checkbox" class="seats" value="A8" name="seat"></td>
            <td><input type="checkbox" class="seats" value="A9" name="seat"></td>
            <td><input type="checkbox" class="seats" value="A10" name="seat"></td>
            <td><input type="checkbox" class="seats" value="A11" name="seat"></td>
            <td><input type="checkbox" class="seats" value="A12" name="seat"></td>
          </tr>

          <tr>
            <td>B</td>
            <td><input type="checkbox" class="seats" value="B1" name="seat"></td>
            <td><input type="checkbox" class="seats" value="B2" name="seat"></td>
            <td><input type="checkbox" class="seats" value="B3" name="seat"></td>
            <td><input type="checkbox" class="seats" value="B4" name="seat"></td>
            <td><input type="checkbox" class="seats" value="B5" name="seat"></td>
            <td></td>
            <td><input type="checkbox" class="seats" value="B6" name="seat"></td>
            <td><input type="checkbox" class="seats" value="B7" name="seat"></td>
            <td><input type="checkbox" class="seats" value="B8" name="seat"></td>
            <td><input type="checkbox" class="seats" value="B9" name="seat"></td>
            <td><input type="checkbox" class="seats" value="B10" name="seat"></td>
            <td><input type="checkbox" class="seats" value="B11" name="seat"></td>
            <td><input type="checkbox" class="seats" value="B12" name="seat"></td>
          </tr>

          <tr>
            <td>C</td>
            <td><input type="checkbox" class="seats" value="C1" name="seat"></td>
            <td><input type="checkbox" class="seats" value="C2" name="seat"></td>
            <td><input type="checkbox" class="seats" value="C3" name="seat"></td>
            <td><input type="checkbox" class="seats" value="C4" name="seat"></td>
            <td><input type="checkbox" class="seats" value="C5" name="seat"></td>
            <td></td>
            <td><input type="checkbox" class="seats" value="C6" name="seat"></td>
            <td><input type="checkbox" class="seats" value="C7" name="seat"></td>
            <td><input type="checkbox" class="seats" value="C8" name="seat"></td>
            <td><input type="checkbox" class="seats" value="C9" name="seat"></td>
            <td><input type="checkbox" class="seats" value="C10" name="seat"></td>
            <td><input type="checkbox" class="seats" value="C11" name="seat"></td>
            <td><input type="checkbox" class="seats" value="C12" name="seat"></td>
          </tr>
        </table>

        <br /><button onclick="updateTextArea()">BUY NOW</button>
      </center>
    </div>

    <br /><br />

    <form action="" method="post">

      <center>

        <table class="Displaytable">
          <tr>
            <th>Name</th>
            <th>Number of Seats</th>
            <th>Seats</th>
            <th>Movie</th>
            <th>Total RM:</th>
          </tr>
          <tr>
            <td><textarea name="nameDisplay" id="nameDisplay"></textarea></td>
            <td><textarea name="NumberDisplay" id="NumberDisplay"></textarea></td>
            <td><textarea name="seatsDisplay" id="seatsDisplay"></textarea></td>
            <td><textarea name="movie" id="movie"></textarea></td>
            <td><textarea name="total" id="total" name="total"></textarea></td>
          </tr>
        </table>


      </center>

      <center>
        <input type="submit" id="togglee" style="visibility: hidden;" value="Proceed" />
      </center>
    </form>

  </section>

  <!-- Footer -->
  <section class="footer">
    <a href="index.php" class="logo">
      <img src="img/wayangLogo.png" alt="Wayang Cinema Logo" class="logo">
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
    <p>&#169; WayangCinema All Right Reserved. </p>
  </div>


  <script src="js/seatpage.js"></script>
</body>

</html>