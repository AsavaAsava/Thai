<?php
@include 'config.php';

if (isset($_POST['update_product'])) {
    $update_p_id = $_POST['update_p_id'];
    $update_p_name = $_POST['update_p_name'];
    $update_p_price = $_POST['update_p_price'];
    $update_p_category = $_POST['update_p_category'];
    $update_p_quantity = $_POST['update_p_quantity'];
    $update_total = $update_p_price * $update_p_quantity;

    $update_p_image = $_FILES['update_p_image']['name'];
    $update_p_image_tmp_name = $_FILES['update_p_image']['tmp_name'];
    $update_p_image_folder = 'uploaded_img/' . $update_p_image;

    $update_query = mysqli_query($conn, "UPDATE `inventory` SET name = '$update_p_name', category = '$update_p_category' ,price = '$update_p_price', quantity = '$update_p_quantity',image = '$update_p_image', total ='$update_total' WHERE id = '$update_p_id'");

    if ($update_query) {
        move_uploaded_file($update_p_image_tmp_name, $update_p_image_folder);

        header('location:inventoryedit.php');
        $message[] = 'item updated succesfully';
    } else {

        header('location:inventoryedit.php');
        $message[] = 'item could not be updated';
    }
}

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
             a{
            text-decoration: none;
        }
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
        <div class="space">
            <div class="container">

                <!-- Main -->
                <div class="row">

                    <h1> INVENTORY REPORTS</h1>
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
                            <th>category</th>
                            <th>price</th>
                            <th>quantity</th>
                            <th>total price</th>

                        </thead>

                        <tbody>
                            <?php

                        $select_products = mysqli_query($conn, "SELECT * FROM `inventory`");
                        if (mysqli_num_rows($select_products) > 0) {
                            while ($row = mysqli_fetch_assoc($select_products)) {
                        ?>

                            <tr>
                                
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['category']; ?></td>
                                <td>$<?php echo $row['price']; ?>/-</td>
                                <td><?php echo $row['quantity']; ?> units</td>
                                <td>$<?php echo $row['total']; ?>/-</td>


                            </tr>

                            <?php
                            };
                        } else {
                            echo "<div class='empty'>no items to edit</div>";
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
                    <h1>AMOUNT IN STOCK</h1>

                    <div class="graphBox">

                        <div class="box">
                            <canvas id="myChart"></canvas>

                            </script>
                        </div>
                        <div class="box">
                            <canvas id="earning"></canvas>

                        </div>
                    </div>

                    <h1>MONEY SPENT</h1>
                    <div class="graphBox">

                        <div class="box">
                            <canvas id="expenses"></canvas>
                        </div>
                        <div class="box">
                            <canvas id="expenses2"></canvas>
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
    <script src="my_chart.js"></script>
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
    $(document).ready(function() {
        console.log("jj")
        $('#myTable').DataTable();
    });
    </script>



</body>

</html>