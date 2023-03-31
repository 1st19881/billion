<?php $nav = "service";  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>BillionDeco</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <?php include "link.php"; ?>
</head>
<style>

</style>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border position-relative text-primary" style="width: 6rem; height: 6rem;" role="status"></div>
        <img class="position-absolute top-50 start-50 translate-middle" src="assets/template/ak/img/icons/icon-8.png" alt="Icon">
    </div>
    <!-- Spinner End -->

    <?php include "header.php"; ?>

    <!-- Carousel Start -->
    <?php include "slide_service.php"; ?>
    <!-- Carousel End -->


    <!-- breadcrumb-service-->

    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="section-title">Our Services</h4>
                <h1 class="display-5 mb-4 text-billion ">บริการของเรา</h1>
            </div>
            <div class="breadcrumb-service wow fadeInUp" data-wow-delay="0.1s">
                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Services</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- breadcrumb-service End -->



    <!-- About Start -->
    <div class="container-fluid">
        <div class="service-deco1">
            
        <a href="service_detail.php">
                <div class="row g-0">
                    <div class="col-lg-6 order-1 order-lg-0 wow  fadeInLeft" data-wow-delay="0.1s">
                        <div class="service-detail">
                            <!-- <h4 class="section-title"><i>Billion Deco</i></h4> -->
                            <h2 class=" mb-4">ต่อเติม / รีโนเวท / ตกแต่ง บ้านและอาคาร</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit odit, et nesciunt voluptatum aliquid perferendis voluptas unde tempore, placeat corporis quibusdam odio quod porro aliquam veniam! Maxime, quibusdam? Labore, quo.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 order-0 order-lg-1  wow  fadeInRight" data-wow-delay="0.1s">
                        <div class="service-deco-img">
                            <img src="images/service/servicedetail4.jpg" alt="">
                        </div>
                    </div>
                </div>
            </a>


            <a href="service_detail1.php">
                <div class="row g-0">
                    <div class="col-lg-6 wow  fadeInLeft" data-wow-delay="0.1s">
                        <div class="service-deco-img">
                            <img src="images/service/servicedetail1.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 wow  fadeInRight" data-wow-delay="0.1s">
                        <div class="service-detail">
                            <!-- <h4 class="section-title"><i>Billion Deco</i></h4> -->
                            <h2 class=" mb-4">โรงรถ กันสาด</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit odit, et nesciunt voluptatum aliquid perferendis voluptas unde tempore, placeat corporis quibusdam odio quod porro aliquam veniam! Maxime, quibusdam? Labore, quo.</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>


        <div class="service-deco2">
            <a href="service_detail2.php">
                <div class="row g-0">
                    <div class="col-lg-6 order-1 order-lg-0 wow  fadeInLeft" data-wow-delay="0.1s">
                        <div class="service-detail">
                            <!-- <h4 class="section-title"><i>Billion Deco</i></h4> -->
                            <h2 class=" mb-4">ระแนง / แผงบังตา</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit odit, et nesciunt voluptatum aliquid perferendis voluptas unde tempore, placeat corporis quibusdam odio quod porro aliquam veniam! Maxime, quibusdam? Labore, quo.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 order-0 order-lg-1 wow  fadeInRight" data-wow-delay="0.1s">
                        <div class="service-deco-img">
                            <img src="images/service/servicedetail2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </a>


            <a href="service_detail3.php">
                <div class="row g-0">
                    <div class="col-lg-6 wow  fadeInLeft" data-wow-delay="0.1s">
                        <div class="service-deco-img">
                            <img src="images/service/servicedetail3.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 wow  fadeInRight" data-wow-delay="0.1s">
                        <div class="service-detail">
                            <!-- <h4 class="section-title"><i>Billion Deco</i></h4> -->
                            <h2 class=" mb-4">หน้ากากอาคาร</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit odit, et nesciunt voluptatum aliquid perferendis voluptas unde tempore, placeat corporis quibusdam odio quod porro aliquam veniam! Maxime, quibusdam? Labore, quo.</p>
                        </div>
                    </div>
                </div>
            </a>




        </div>
    </div>
    <!-- About End -->







    <!-- Footer Start -->
    <?php include "footer.php"; ?>
    <!-- Footer End -->


    <?php include "js.php"; ?>
</body>

</html>