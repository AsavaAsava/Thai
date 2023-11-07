<?php
@include 'config.php';



?>

<!DOCTYPE html>
<html lang="en">

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="inv.css">
    <link rel="stylesheet" href="style.css">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="icon" type="image/x-icon" href="restaurant.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory</title>
    <style>

    </style>
    <!-- Montserrat Font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <!-- CSS only -->



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

        <div class="container">
        <div class="sidebar">
            <!--profile image & text-->
            <div class="profile">
                <img src="./pic.jpg" alt="logo">
                <h2 style="color:white">Kitchen Dashboard</h2>

            </div>
            <!--menu item-->
            <ul>
            <li>
                    <a href="pending_orders.php">
                        <span class="icon"><i class="bi-plus-circle-fill"></i></span>
                        <span class="item">Pending Orders</span>
                    </a>
                </li>
                <li>
                    <a href="view_orders_page.php" class="hamburger">
                        <span class="icon"><i class="bi bi-eye-fill"></i></span>
                        <span class="item">Completed Orders</span>
                    </a>
                </li>
                <li>
                    <a href="edit-menu.php">
                        <span class="icon"><i class="bi bi-tools"></i></span>
                        <span class="item">Update Menu</span>
                    </a>
                </li>


                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-chart-line"></i></span>
                        <span class="item">Reports</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-user-shield"></i></span>
                        <span class="item">Log Out</span>
                    </a>
                </li>

            </ul>
        </div>
        </div>
        <div class="space">
            <div class="container">

                <!-- Main -->
                <div class="row">

                    <h1> ORDER REPORTS</h1>
                    <main class="main-container">
                        <div class="main-title">
                            <p class="font-weight-bold">DASHBOARD</p>
                        </div>

                        <div class="main-cards">

                            <div class="card">
                                <div class="card-inner">
                                    <p >PRODUCTS</p>
                                    <span class="material-icons-outlined text-blue">inventory_2</span>
                                </div>
                                <span class="font-weight-bold">7</span>
                            </div>

                            <div class="card">
                                <div class="card-inner">
                                    <p >CATEGORIS</p>
                                    <span class="material-icons-outlined text-orange">add_shopping_cart</span>
                                </div>
                                <span class="font-weight-bold">8</span>
                            </div>

                            <div class="card">
                                <div class="card-inner">
                                    <p >INVENTORY ORDERS</p>
                                    <span class="material-icons-outlined text-green">shopping_cart</span>
                                </div>
                                <span class="font-weight-bold">12</span>
                            </div>

                            <div class="card">
                                <div class="card-inner">
                                    <p >INVENTORY ALERTS</p>
                                    <span class="material-icons-outlined text-red">notification_important</span>
                                </div>
                                <span class="font-weight-bold">3</span>
                            </div>

                        </div>
                    </main>
                </div>
                <div class="row">
                    <h1>GOODS IN STOCK</h1>
                    <!-- End Main -->

                    <!--Table-->



                    <table id="myTable" class="display">

                        <thead>
                            
                            <th>name</th>
                            <th>Table</th>
                            <th>Items</th>
                            <th>Time</th>

                        </thead>

                        <tbody>
                            <?php

                        $fetch_orders = mysqli_query($conn, "SELECT * FROM `totalorder`");
                        $count =0;
                        if (mysqli_num_rows($fetch_orders) > 0) {
                            while ($row = mysqli_fetch_assoc($fetch_orders)) {
                            if($count>10){break;}
                        ?>
                            
                            <tr>
                                
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['street']; ?></td>
                                <td>$<?php echo $row['total_product']; ?></td>
                                <td><?php echo $row['time']; ?></td>
                            


                            </tr>

                            <?php
                            $count++;
                            };
                        } else {
                            echo "<div class='empty'>no items to Show</div>";
                        };
                        ?>
                        </tbody>
                    </table>
                    <!--End of Table-->
                </div>



                </br>

                </br>


                <div class="row">
                    <!--Charts-->
                    <h1>Waiter Service</h1>

                    <div class="graphBox">

                        <div class="box">
                            <canvas id="mycanvas"></canvas>

                            </script>
                        </div>
                        <div class="box">
                            <canvas id="mycanvas1"></canvas>

                        </div>
                    </div>

                    <h1>Order Fulfilment</h1>
                    <div class="graphBox">

                        <div class="box">
                            <canvas id="mycanvas2"></canvas>
                        </div>
                        <div class="box">
                            <canvas id="mycanvas3"></canvas>
                        </div>
                    </div>

                    <!--End of Charts-->

                </div>





            </div>


        </div>
    </div>
    </div>

    <!-- End Main -->


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"> </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>
    <script src="order_reports.js"></script>
    <script src="order_reports1.js"></script>
    <!-- custom js file link  -->
    <script>
    document.getElementById("close-edit").onclick = myFunction;

    function myFunction() {
        document.querySelector('.edit-form-container').style.display = "none";
    }
    </script>
    <!--<script src="js/script.js"></script>-->
    <script>
    var hamburger = document.querySelector(".hamburger");
    hamburger.addEventListener("click", function() {
        document.querySelector("body").classList.toggle("active");
    })
    </script>
    <script>
    // $(document).ready(function() {
    //     console.log("jj")
    //     $('#myTable').DataTable();
    // });
    </script>



</body>

</html>