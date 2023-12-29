<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Cinema food & beverage</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="css/promotionpage.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>

    <header>

        <!--Nav-->
        <div class="nav-container">


        <a href="index.php" class="logo"><img src="img/wayangLogo.png" alt=""></a>

            <!--Cart-Icon-->
            <i class='bx bxs-shopping-bag' id="cart-icon"></i>

            <div class="cart">
                <h2 class="cart-title">Your Cart</h2>

                <div class="cart-content">


                </div>
                <!--display total-->
                <div class="total">
                    <div class="total-title">Total</div>
                    <div class="total-price">RM0</div>
                </div>

                <button type="button" class="btn-buy">Buy Now</button>
                <i class='bx bx-x' id="close-cart"></i>

            </div>
        </div>
    </header>

    <section class="shop container">
        <h2 class="section-title">Food & Beverage</h2>

        <div class="shop-content">

            <div class="product-box">
                <img src="img/nasi_lemak-1.jpg" alt="nasi lemak" class="product-img">
                <h2 class="product-title">Nasi Lemak Special</h2>
                <span class="price">RM8.99</span>
                <i class='bx bxs-shopping-bag add-cart'></i>
            </div>

            <div class="product-box">
                <img src="img/kuehtiaw.jpg" alt="nasi lemak" class="product-img">
                <h2 class="product-title">Kueh Tiaw Goreng</h2>
                <span class="price">RM8.99</span>
                <i class='bx bxs-shopping-bag add-cart'></i>
            </div>

            <div class="product-box">
                <img src="img/nasibriyani.jpg" alt="nasi lemak" class="product-img">
                <h2 class="product-title">Nasi Kandar</h2>
                <span class="price">RM8.99</span>
                <i class='bx bxs-shopping-bag add-cart'></i>
            </div>

            <div class="product-box">
                <img src="img/lekor.jpg" alt="nasi lemak" class="product-img">
                <h2 class="product-title">Kelopok lekor</h2>
                <span class="price">RM6.88</span>
                <i class='bx bxs-shopping-bag add-cart'></i>
            </div>

            <div class="product-box">
                <img src="img/kalipuff.jpg" alt="nasi lemak" class="product-img">
                <h2 class="product-title">Kari puff</h2>
                <span class="price">RM6.88</span>
                <i class='bx bxs-shopping-bag add-cart'></i>
            </div>

            <div class="product-box">
                <img src="img/popcorn.webp" alt="nasi lemak" class="product-img">
                <h2 class="product-title">pop corn</h2>
                <span class="price">RM7.88</span>
                <i class='bx bxs-shopping-bag add-cart'></i>
            </div>

            <div class="product-box">
                <img src="img/lays.jpg" alt="nasi lemak" class="product-img">
                <h2 class="product-title">Lays family set</h2>
                <span class="price">RM15.88</span>
                <i class='bx bxs-shopping-bag add-cart'></i>
            </div>

            <div class="product-box">
                <img src="img/sprite.jpg" alt="nasi lemak" class="product-img">
                <h2 class="product-title">sptire</h2>
                <span class="price">RM3.88</span>
                <i class='bx bxs-shopping-bag add-cart'></i>
            </div>

            <div class="product-box">
                <img src="img/cola.jpeg" alt="nasi lemak" class="product-img">
                <h2 class="product-title">cola</h2>
                <span class="price">RM3.88</span>
                <i class='bx bxs-shopping-bag add-cart'></i>
            </div>

            <div class="product-box">
                <img src="img/zapple.jpg" alt="nasi lemak" class="product-img">
                <h2 class="product-title">zappel</h2>
                <span class="price">RM3.88</span>
                <i class='bx bxs-shopping-bag add-cart'></i>
            </div>

            <div class="product-box">
                <img src="img/pepsi.jpg" alt="nasi lemak" class="product-img">
                <h2 class="product-title">pepsi</h2>
                <span class="price">RM3.88</span>
                <i class='bx bxs-shopping-bag add-cart'></i>
            </div>

            <div class="product-box">
                <img src="img/100.jpg" alt="nasi lemak" class="product-img">
                <h2 class="product-title">100 plus</h2>
                <span class="price">RM3.88</span>
                <i class='bx bxs-shopping-bag add-cart'></i>
            </div>

            <div class="product-box">
                <img src="img/ball.png" alt="sweet potato ball" class="product-img">
                <h2 class="product-title">Sweet potato ball</h2>
                <span class="price">RM10.00</span>
                <i class='bx bxs-shopping-bag add-cart'></i>
            </div>

            <div class="product-box">
                <img src="img/milo promo.png" alt="nasi lemak milo promo" class="product-img">
                <h2 class="product-title">Nasi lemak with milo</h2>
                <span class="price">RM6.99</span>
                <i class='bx bxs-shopping-bag add-cart'></i>
            </div>

            <div class="product-box">
                <img src="img/popcorn.png" alt="popcorn + soft drink" class="product-img">
                <h2 class="product-title">Popcorn value combo</h2>
                <span class="price">RM7.99</span>
                <i class='bx bxs-shopping-bag add-cart'></i>
            </div>
        </div>
    </section>
    <script src="js/promotionpage.js"></script>
</body>

</html>