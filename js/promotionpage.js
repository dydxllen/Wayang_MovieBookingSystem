let cartIcon = document.querySelector("#cart-icon");
let cart = document.querySelector(".cart");
let closeCart = document.querySelector("#close-cart");

//show cart
cartIcon.onclick = () => {
    cart.classList.add("active");
};

//close cart
closeCart.onclick = () => {
    cart.classList.remove("active");
};

//cart working
if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready);
}
else {
    ready();
}

//making function
function ready() {
    //remove item from cart
    var reomveCartButtons = document.getElementsByClassName("cart-remove");
    console.log(reomveCartButtons);
    for (var i = 0; i < reomveCartButtons.length; i++) {
        var button = reomveCartButtons[i];
        button.addEventListener("click", removeCartItem);
    }

    //quantity changes
    var quantityInputs = document.getElementsByClassName("cart-quantity");
    for (var i = 0; i < quantityInputs.length; i++) {
        var input = quantityInputs[i];
        input.addEventListener("change", quantityChanged);
    }
    var addCart = document.getElementsByClassName("add-cart");
    for (var i = 0; i < addCart.length; i++) {
        var button = addCart[i];
        button.addEventListener("click", addCartClicked);
    }
    //Buy Button work
    document
        .getElementsByClassName("btn-buy")[0]
        .addEventListener("click", buyButtonClicked);
}

//Buy button
function buyButtonClicked() {
    alert("Your order is placed");
    var cartContent = document.getElementsByClassName("cart-content")[0];
    var childElements = cartContent.children;

    let food_beverage_arr = []
    let seat_id = localStorage.getItem('seat_id')

    // Iterate over the child elements and do something with them
    for (var i = 0; i < childElements.length; i++) {
        // Get the name element
        var nameElement = childElements[i].querySelector('.cart-product-title');

        // Get the name from the element
        var name = nameElement.textContent;

        // Get the price element
        var priceElement = childElements[i].querySelector('.cart-price');

        // Get the price from the element
        var price = priceElement.textContent.replace('RM', '');

        // Get the quantity element
        var quantityElement = childElements[i].querySelector('.cart-quantity');

        // Get the quantity from the element
        var quantity = quantityElement.value;

        food_beverage_arr.push({
            seat_id: seat_id,
            name: name,
            price: price,
            quantity: quantity
        })
    }

    console.log(food_beverage_arr)
    localStorage.removeItem('seat_id');

    $.ajax({
        url: 'test.php',
        type: 'POST',
        data: { items: food_beverage_arr },
        success: function (response) {
            console.log(response);
            location.href = `invoice.php?id=${seat_id}`;
        },
        error: function (error) {
            console.log(error);
        }
    });



    while (cartContent.hasChildNodes()) {
        cartContent.removeChild(cartContent.firstChild);
    }
    updatetotal();
}


//remove items from cart
function removeCartItem(event) {
    var buttonClicked = event.target;
    buttonClicked.parentElement.remove();
    updatetotal();
}

function quantityChanged(event) {
    var input = event.target;
    if (isNaN(input.value) || input.value <= 0) {
        input.value = 1;
    }
    updatetotal();
}

// add to cart
function addCartClicked(event) {
    var button = event.target;
    var shopProducts = button.parentElement;
    var title = shopProducts.getElementsByClassName("product-title")[0].innerText;
    var price = shopProducts.getElementsByClassName("price")[0].innerText;
    var productImg = shopProducts.getElementsByClassName("product-img")[0].src;

    addProductTocart(title, price, productImg);
    updatetotal();
}

function addProductTocart(title, price, productImg) {
    var cartShopBox = document.createElement("div");
    cartShopBox.classList.add("cart-box")
    var cartItems = document.getElementsByClassName("cart-content")[0];
    var cartItemsNames = cartItems.getElementsByClassName("cart-prodcut-title");
    for (var i = 0; i < cartItemsNames.length; i++) {
        alert("you have already add this item to cart");
        return;
    }
    //for adding to chart
    var cartBoxContent = `
                    <img src="${productImg}" class="cart-img">
                    <div class="detail-box">
                        <div class="cart-product-title">${title}</div>
                        <div class="cart-price">${price}</div>
                        <input type="number" value="1" class="cart-quantity">
                    </div>
                    <!--remove-->
                    <i class='bx bx-trash cart-remove' ></i>
                    </div>
                    `;

    cartShopBox.innerHTML = cartBoxContent;
    cartItems.append(cartShopBox);

    cartShopBox
        .getElementsByClassName("cart-remove")[0]
        .addEventListener("click", removeCartItem);
    cartShopBox
        .getElementsByClassName("cart-quantity")[0]
        .addEventListener("change", quantityChanged);
}
// update the price
function updatetotal() {
    var cartContent = document.getElementsByClassName("cart-content")[0];
    var cartBoxes = cartContent.getElementsByClassName("cart-box");
    var total = 0;

    for (var i = 0; i < cartBoxes.length; i++) {
        var cartBox = cartBoxes[i];
        var priceElement = cartBox.getElementsByClassName("cart-price")[0];
        var quantityElement = cartBox.getElementsByClassName("cart-quantity")[0];
        var price = parseFloat(priceElement.innerText.replace("RM", ""));
        var quantity = quantityElement.value;
        total = total + price * quantity;
    }
    document.getElementsByClassName("total-price")[0].innerText = "RM" + total;
}