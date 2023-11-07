<?php

@include 'config.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href=".\css\inventory.css">
    <link rel="stylesheet" href=".\css\style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="icon" type="image/x-icon" href="pic.jpg">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <style>

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
                <h2 style="color:white">Admin Dashboard</h2>

            </div>
            <!--menu item-->
            <ul>
            <li>
                    <a href="products.php">
                        <span class="icon"></span>
                        <span class="item">Waiters Module</span>
                    </a>
                </li>
                <li>
                    <a href="inventory.php">
                        <span class="icon"></span>
                        <span class="item">Inventory Module</span>
                    </a>
                </li>
                <li>
                    <a href="reservations.php">
                        <span class="icon"></span>
                        <span class="item">Reservation Module</span>
                    </a>
                </li>
                <li>
                    <a href="admin_orders.php">
                        <span class="icon"></span>
                        <span class="item">Order Reports</span>
                    </a>
                </li>
                <li>
                    <a href="admin_inventory.php">
                        <span class="icon"></span>
                        <span class="item">Inventory Reports</span>
                    </a>
                </li>
                <li>
                    <a href="admin_add_users.php">
                        <span class="icon"></span>
                        <span class="item">User Management</span>
                    </a>
                </li>
                <li>
                    <a href="./processing/logout.php">
                        <span class="icon"></span>
                        <span class="item">Log Out</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div>
        <section>
        <div style="margin-left: 140px ;">
        <a class='btn' style="width: 20px ; height: 25px;">
        </div>
        </section>

    </div>

    </div>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>
    <script>
    </script>
</body>

</html>