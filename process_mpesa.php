<?php
require('config.php');
$fetch_orders = mysqli_query($conn, "SELECT * FROM `totalorder` where id = ".$_POST['orderID']." ");
$orders = mysqli_fetch_assoc($fetch_orders);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href=".\css\inventory.css">
    <link rel="stylesheet" href=".\css\style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="icon" type="image/x-icon" href="restaurant.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style type="text/css">

</style>
</head>

<body>

    <div class="wrapper">
        <!--Top menu -->
        <div class="section">
            <div class="top_navbar">
                <div class="hamburger">
                    <a href="#">
                        <i class="fas fa-bars"></i>

                    </a>

                </div>
            </div>

        </div>
        <div class="sidebar">
            <!--profile image & text-->
            <div class="profile">
                <img src="images\thaitanic.jpeg" alt="logo">
                <h2 style="color:white">M-Pesa</h2>

            </div>
            <!--menu item-->
            <ul>
                <li>
                    <a href="inventory.php" class="active">
                        <span class="icon"><i class="bi-plus-circle-fill"></i></span>
                        <span class="item">Back</span>
                    </a>
                </li>
            </ul>

        </div>
    </div>
    <div class="section">
        <section>


            <form action="mpesa.php" method="post" class="add-product-form" >
                <?php

                if (isset($message)) {
                    foreach ($message as $message) {
                        echo '<div class="message"><span>' . $message . '</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
                    };
                };

                ?>
                <h3>Lipa na M-pesa</h3>

                <input type="number" name="p_number" min="0" placeholder="Enter Phone Number" class="box" required>
                <input type="number" name="p_amount" min="0" placeholder="enter the quantity" class="box" value=<?php echo $orders['total_price']?> required>
                <input type="number" value="<?php echo $orders["id"]?>" name ="orderID" id="order" hidden>
                <input type="submit" value="Pay Now" name="add_product" class="btn" >
            </form>
           

        </section>

    </div>

    </div>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>
    <script>
        var hamburger = document.querySelector(".hamburger");
        hamburger.addEventListener("click", function() {
            document.querySelector("body").classList.toggle("active");
        })
    </script>
</body>

</html>