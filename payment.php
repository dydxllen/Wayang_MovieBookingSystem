<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/payment.css">
    <!-- <link rel="stylesheet" href="css/search.css"> -->

    <title>Checkout</title>

</head>

<body>
    <form action="successful.php" method="POST">
    <div class="container">
        <h1>Confirm Your Payment</h1>
        <div>
            <label id="Payment_method"><h3>Credit Card Payment Method</h3>
            <select name="Payment_method" id="selectOption" onchange="renderImage()">
                <option value="1">Public Bank</option>   
                <option value="2">Bank Islam</option>
                <option value="3">AMbank</option>
                <option value="4">Maybank</option>          
            </select>
            </label>
        </div>
        <div class="first-row">
            <div class="owner">
                <h3>Name (same as card)</h3>
                <div class="input-field">
                    <input type="text">
                </div>
            </div>

            <div class="cvv">
                <h3>CVV</h3>
                <div class="input-field">
                    <input type="tetx" name="cvv" id="cvv" maxlength="3"/>
                </div>
            </div>
        </div>

        <div class="second-row">
            <div class="card-number">
                <h3>Card Number</h3>
                <div class="input-field">
                    <input type="text" name="cardno" id="cardno" maxlength="19" onkeypress="cardspace()"/>
                </div>    
            </div>
        </div>
        <div class="third-row">
            <h3>Exp Date</h3>
            <div class="selection">
                <div class="date">
                    <select name="months" id="months">
                        <option value="Jan">Jan</option>
                        <option value="Feb">Feb</option>
                        <option value="Mar">Mar</option>
                        <option value="Apr">Apr</option>
                        <option value="May">May</option>
                        <option value="Jun">Jun</option>
                        <option value="Jul">Jul</option>
                        <option value="Aug">Aug</option>
                        <option value="Sept">Sept</option>
                        <option value="Oct">Oct</option>
                        <option value="Nov">Nov</option>
                        <option value="Dec">Dec</option>
                    </select>
                    <select name="years" id="years">
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                        <option value="2026">2026</option>
                        <option value="2027">2027</option>
                    </select>
                </div>
            </div>

            <div class="email">
                <label for="cardno">
                    <h3>Email</h3>
                <input required type="email" name="email" id="cardno"/>
                </label>
            </div>

            <div class="qr-code">
                <div><h1>OR</h1></div>
                <h2>Online Payment</h2>
                <select name="Payment_method" id="selectOption">
                    <option value="1">Touch & go</option>   
                    <option value="2">Boost</option>
                    <option value="3">Sarawak Pay</option>         
                </select>
                <div>
                    <img src="img/qr.jpg"  style="padding: 20px 0;">
                </div>
            </div>
        </div>
        <button type="submit" name="submit" class="button">Confirm</button>
    </div>
    </form>
</body>

<script>
    function cardspace(){
       var carddigit = document.getElementById('cardno').value;
            if(carddigit.length == 4 || carddigit.length == 9 || carddigit.length == 14){
                document.getElementById('cardno').value = carddigit+' ';
                document.getElementById('cardno').max = 1;
            }
}
</script>

</html>
