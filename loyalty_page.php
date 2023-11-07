<?php
session_start();
require('config.php');
if(!isset ($_SESSION['mail'])){
    header('Location: login.php');
}

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>ThaiTanic</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Arbutus+Slab">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="assets/css/Animate-Cards-Devices.css">
    <link rel="stylesheet" href="assets/css/Animated-Text-Background.css">
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark navbar-custom">
        <div class="container"><a class="navbar-brand" href="#" style="color: rgb(233,107,105);">Thai-tanic</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navbarResponsive"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Points</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Receipts</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="text-center text-white masthead" style="font-size: 21px;">
        <div class="masthead-content">
            <div class="container">
                <h1 class="masthead-heading mb-0">Welcome <?php echo $_SESSION['username']?>!</h1>
                <h2 class="masthead-subheading mb-0">Thai-Tanic Loyalty Points</h2>
            </div>
        </div>
        <div class="bg-circle-1 bg-circle"></div>
        <div class="bg-circle-2 bg-circle"></div>
        <div class="bg-circle-3 bg-circle" style="font-size: 25px;"></div>
        <div class="bg-circle-4 bg-circle"></div>
    </header>
    <section>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <div class="p-5" style="height: 300px;margin: 25px;background: #252837;border-radius: 200px;">
                        <h2 class="display-4" data-aos="fade-down" data-aos-duration="400" data-aos-delay="50" style="color: rgb(233,107,105);text-align: center;font-size: 105px;">25</h2>
                        <h2 class="display-4" data-aos="fade-down" data-aos-duration="400" data-aos-delay="50" style="color: rgb(233,107,105);text-align: center;">Points</h2>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="p-5">
                        <h2 class="display-4">Your Points</h2>
                        <p>Redeem them today to get discounts on your meals!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row align-items-center" data-aos="fade-down" data-aos-duration="600" data-aos-delay="50" data-aos-once="true">
                <div class="col-lg-6 order-lg-1">
                    <div class="p-5" style="text-align: center;"><img class="rounded-circle img-fluid" src="assets/img/indian-grabfood-delivery-manila-700x700.jpg" style="width: 350px;height: 350px;"></div>
                </div>
                <div class="col-lg-6 order-lg-2">
                    <div class="p-5">
                        <h2 class="display-4">Reward System</h2>
                        <p>We reward you for dining with us, because we care. You get 1 point for every Ksh.100 you spend with us. Each point is worth 1 Kenyan Shilling. Redeem your points for discounts the next time you check out.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row align-items-center" data-aos="fade-down" data-aos-duration="600" data-aos-delay="50" data-aos-once="true">
                <div class="col-lg-6 order-lg-2">
                    <div class="p-5" style="text-align: center;"><img class="rounded-circle img-fluid" src="assets/img/topic-teacher.png" style="width: 350px;height: 350px;"></div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="p-5">
                        <h2 class="display-4">Redeem Points</h2>
                        <p>On checkout, ask your waiter for points redemtion for amazing discounts.</p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-12 order-lg-1" data-aos="fade-down" data-aos-duration="600" data-aos-delay="50" data-aos-once="true">
                    <div class="p-5">
                        <h2 class="display-4" style="text-align: center;">Previous Receipts</h2>
                        <section style="margin:10px">
                            <div class="row">
                                <div class="col">
                                    <section style="margin:10px">
                                        <div class="row">
                                            <div class="col">
                                                <?php
                                                
                                                
                                                ?>
                                                <div id="card-devices-1" class="card-devices zoom" style="padding: 12px;">
                                                    <div id="card-body-1" class="card-body">
                                                        <header id="card-title-1" class="card-title">
                                                            <h5><strong>Receipt #79</strong><br></h5>
                                                            <div id="sub-title-1" class="sub-title">
                                                                <h6 class="card-subtitle mb-2 text-muted">Order: 87<br></h6>
                                                                <h6 class="card-subtitle mb-2 text-muted"><a href="http://localhost/ThaiTanic/generate_receipt.php?orderID=87">Download Here</a><br></h6>
                                                            </div>
                                                        </header>
                                                        <p id="card-text-1" class="card-text">Generated: Yesterday<br></p>
                                                    </div>
                                                    <div id="border-bottom-1" class="border-bottom"></div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div id="card-devices-2" class="card-devices zoom">
                                                    <div id="card-body-2" class="card-body" style="padding: 12px;">
                                                        <header id="card-title-2" class="card-title">
                                                            <h5><strong>Receipt #88</strong><br></h5>
                                                            <div id="sub-title-2" class="sub-title">
                                                                <h6 class="card-subtitle mb-2 text-muted">Order: 88<br></h6>
                                                                <h6 class="card-subtitle mb-2 text-muted"><a href="http://localhost/ThaiTanic/generate_receipt.php?orderID=88">Download Here</a><br></h6>
                                                            </div>
                                                        </header>
                                                        <p id="card-text-2" class="card-text">Generated Yesterday<br></p>
                                                    </div>
                                                    <div id="border-bottom-2" class="border-bottom"></div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div id="card-devices-3" class="card-devices zoom" style="padding: 12px;">
                                                    <div id="card-body-3" class="card-body">
                                                        <header id="card-title-3" class="card-title">
                                                            <h5><strong>Receipt #89</strong><br></h5>
                                                            <div id="sub-title-3" class="sub-title">
                                                                <h6 class="card-subtitle mb-2 text-muted">Order: 89<br></h6>
                                                                <h6 class="card-subtitle mb-2 text-muted"><a href="http://localhost/ThaiTanic/generate_receipt.php?orderID=89">Download Here</a><br></h6>
                                                            </div>
                                                        </header>
                                                        <p id="card-text-3" class="card-text">Generated: Today<br></p>
                                                    </div>
                                                    <div id="border-bottom-3" class="border-bottom"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="py-5 bg-black" style="background: #252837;">
        <div class="container">
            <p class="text-center text-white m-0 small">Copyright&nbsp;© Thai-Tanic 2022</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/Animated-Text-Background.js"></script>
</body>

</html>