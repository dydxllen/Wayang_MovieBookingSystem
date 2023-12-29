<?php
include "config.php";
global $conn;


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM `seat` WHERE id = '$id' LIMIT 1";
    $result         = mysqli_query($conn, $sql);
    $row            = mysqli_fetch_assoc($result);

    $sql2 = "SELECT * FROM `items` WHERE seat_id = '$id'";
    $result2         = mysqli_query($conn, $sql2);

}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Invoice page</title>
    <link rel="stylesheet" href="css/invoice.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>
</head>


<body>

    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="3">
                    <table>
                        <tr>
                            <td>
                                <div class="container-logo">
                                    <img src="img/wayangLogo.png" class="logo">
                                </div>
                            </td>
                            <td style="padding-left: 100px;">
                                Receipt number #:<?php echo $row['id'] . "<br>";?>
                                Created : <?php date_default_timezone_set("Asia/Kuala_Lumpur");echo date("Y/m/d") . "<br>";?>
                                Time : <?php date_default_timezone_set("Asia/Kuala_Lumpur"); echo date("h:i:sa") . "<br>";?>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="information">
                <td colspan="2">
                    <!--inner table-->
                    <table>
                        <tr>
                            <td>
                                Name:<?php echo $row['name'] . "<br>";?>
                                Seat:<?php echo $row['seats'] . "<br>";?>
                                Ticket Price:RM<?php echo $row['ticket_price'] . "<br>";?>
                                Movie: <?php echo $row['movie'] . "<br>";?>
                            </td>
                        </tr>
                    </table>
                    <!--end-->
                </td>
            </tr>
        </table>

        <div class="line"></div>

        <?php
            echo "<table border='1'>

            <tr>
            
            <th>Item</th>
            
            <th>(RM)Price</th>
            
            <th>Quantity</th>
            
            
            </tr>";
        ?>
        
        <?php 
                 $sql3 = "SELECT * FROM `items` WHERE seat_id = '$id'";
                 $result3         = mysqli_query($conn, $sql3);
                 

                $total=$row['ticket_price'];

                 while ($row3 = mysqli_fetch_assoc($result3)) {
                    
                    echo "<tr>";
                    echo "<td>".$row3['name'] . "</td>";
                    echo "<td>".$row3['price'] . "</td>";
                    echo "<td>".$row3['quantity'] . "</td>";
                    echo "</tr>";

                    $total +=  $row3['price'] * $row3['quantity'];
                 }

                    
                    echo "<tr>";
                    echo "<td></td>";
                    echo "<td>". "Total :" . "</td>";
                    echo "<td>$total</td>";
                    echo "</tr>";  
            ?>
           
    </div> 
    <tr >
        <td></td>
        <td></td>
        
        <td align="center"><button onclick="redirect()" type="button" >PAY NOW!</button>
        <input type="button" id="create_pdf" value="Print">
        </td>
        <!-- <td align="center"><input type="button" id="create_pdf" value="Print"></td> -->
        
    </tr>  

    <script>
        function redirect(){
            location.replace("payment.php")
        }
    </script>
</body>

</html>

<script>
    (function () {
        var
         form = $('.invoice-box'),
         cache_width = form.width(),
         a4 = [595.28, 841.89]; // for a4 size paper width and height

        $('#create_pdf').on('click', function () {
            $('body').scrollTop(0);
            createPDF();
        });
        //create pdf
        function createPDF() {
            getCanvas().then(function (canvas) {
                var
                 img = canvas.toDataURL("image/png"),
                 doc = new jsPDF({
                     unit: 'px',
                     format: 'a4'
                 });
                doc.addImage(img, 'JPEG', 20, 20);
                doc.save('Wayang_movie_ticket_receipt.pdf');
                form.width(cache_width);
            });
        }

        // create canvas object
        function getCanvas() {
            form.width((a4[0] * 1.33333) - 80).css('max-width', 'none');
            return html2canvas(form, {
                imageTimeout: 2000,
                removeContainer: true
            });
        }

    }());
</script>
<script>
    (function ($) {
        $.fn.html2canvas = function (options) {
            var date = new Date(),
            $message = null,
            timeoutTimer = false,
            timer = date.getTime();
            html2canvas.logging = options && options.logging;
            html2canvas.Preload(this[0], $.extend({
                complete: function (images) {
                    var queue = html2canvas.Parse(this[0], images, options),
                    $canvas = $(html2canvas.Renderer(queue, options)),
                    finishTime = new Date();

                    $canvas.css({ position: 'absolute', left: 0, top: 0 }).appendTo(document.body);
                    $canvas.siblings().toggle();

                    $(window).click(function () {
                        if (!$canvas.is(':visible')) {
                            $canvas.toggle().siblings().toggle();
                            throwMessage("Canvas Render visible");
                        } else {
                            $canvas.siblings().toggle();
                            $canvas.toggle();
                            throwMessage("Canvas Render hidden");
                        }
                    });
                    throwMessage('Screenshot created in ' + ((finishTime.getTime() - timer) / 1000) + " seconds<br />", 4000);
                }
            }, options));

            function throwMessage(msg, duration) {
                window.clearTimeout(timeoutTimer);
                timeoutTimer = window.setTimeout(function () {
                    $message.fadeOut(function () {
                        $message.remove();
                    });
                }, duration || 2000);
                if ($message)
                    $message.remove();
                $message = $('<div ></div>').html(msg).css({
                    margin: 0,
                    padding: 10,
                    background: "#000",
                    opacity: 0.7,
                    position: "fixed",
                    top: 10,
                    right: 10,
                    fontFamily: 'Tahoma',
                    color: '#fff',
                    fontSize: 12,
                    borderRadius: 12,
                    width: 'auto',
                    height: 'auto',
                    textAlign: 'center',
                    textDecoration: 'none'
                }).hide().fadeIn().appendTo('body');
            }
        };
    })(jQuery);
</script>