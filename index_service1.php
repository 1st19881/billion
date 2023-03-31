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
    .service-title h2 {
        padding: 0.5em;
        color: #494949;
        background: #ebe3d4;
        border-left: solid 5px #b78d65;
    }

    .service_sub_cate {
        margin: 100px 0px;
    }

    .service_card_suubcate .card {
        border: none;
    }

    .service_card_suubcate .card img {
        height: 400px;
        object-fit: cover;
        width: 100%;

    }

    .service_card_suubcate .card .card-body {
        background-color: #233e6f;
    }

    .service_card_suubcate .card .card-body .card-title {
        color: #ffff;
    }

    .service_subcate_title h2 {
        padding: 0.5em;
        color: #494949;
        background: #ebe3d4;
        border-left: solid 5px #b78d65;
        text-decoration: none;
    }

    .service_card_suubcate .card .card-body:hover {
        background-color: #000;
    }
</style>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border position-relative text-primary" style="width: 6rem; height: 6rem;" role="status"></div>
        <img class="position-absolute top-50 start-50 translate-middle" src="assets/template/ak/img/icons/icon-8.png" alt="Icon">
    </div>
    <!-- Spinner End -->


    <?php include "header.php"; ?>


    <div class="container-fluid">
        <div class="container">
            <!-- <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="section-title">Product Rococo</h4>
                <h1 class="display-5 mb-4">บริการของเรา</h1>
            </div> -->
            <div class="breadcrumb-service">
                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="service.php">Service</a></li>
                        <li class="breadcrumb-item active" aria-current="page">ต่อเติมโรงรถ</li>
                    </ol>
                </nav>
            </div>



            <!-- About Start -->

            <div class="row">
                <div class="col-lg-6 mb-4 wow fadeIn" data-wow-delay="0.5s">
                    <!-- <h4 class="section-title">About Us</h4>                   <h4 class="section-title">About Us</h4> -->
                    <div class="service-title">
                        <h2 class="mb-3">ต่อเติมโรงรถ</h2>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora quam corporis culpa veritatis quisquam. Unde exercitationem a rerum non deserunt nihil, iure, quia est molestias totam magni? Quidem, magni amet?</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora quam corporis culpa veritatis quisquam. Unde exercitationem a rerum non deserunt nihil, iure, quia est molestias totam magni? Quidem, magni amet?</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora quam corporis culpa veritatis quisquam. Unde exercitationem a rerum non deserunt nihil, iure, quia est molestias totam magni? Quidem, magni amet?</p>
                    <div class="d-flex align-items-center mb-5">
                    </div>
                    <a class="btn btn-primary py-3 px-5" href="#">View Project</a>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="service_about_img">
                        <img class="img-fluid" src="images/demo.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->




    <!-- Footer Start -->
    <?php include "footer.php"; ?>
    <!-- Footer End -->




    <?php include "js.php"; ?>
</body>

</html>