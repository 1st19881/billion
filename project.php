<?php $nav = "project";  ?>
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
    .project-image {
        position: relative;
        width: 100%;
    }

    .image__img {
        display: block;
        width: 100%;
    }

    .image__overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.6);
        color: #ffffff;
        font-family: 'Quicksand', sans-serif;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.25s;
    }

    .image__overlay--blur {
        backdrop-filter: blur(5px);
    }

    .image__overlay--primary {}

    .image__overlay>* {
        transform: translateY(20px);
        transition: transform 0.25s;
    }

    .image__overlay:hover {
        opacity: 1;
    }

    .image__overlay:hover>* {
        transform: translateY(0);
    }

    .image__title1 {
        font-size: 2.5em;
        font-weight: bold;
        background-color: rgba(0, 0, 0, 0.4);
        padding: 10px 20px;
        text-align: center;
    }


    .image__title {
        font-size: 1.3em;
        font-weight: bold;
        background-color: rgba(0, 0, 0, 0.4);
        padding: 10px 20px;
        text-align: center;
    }

    .image__title  span{
        font-size: 0.75em;
    }
    
    .image__description {
        font-size: 1.25em;
        margin-top: 0.25em;
    }
    .projectus-title {
        color: #314556;
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



    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="section-title">Our Project</h4>
                <h1 class="display-5 mb-4 projectus-title">ผลงานของเรา</h1>
            </div>
            <div class="breadcrumb-service wow fadeInUp" data-wow-delay="0.1s">
                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Project</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Service End -->





    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-12 mb-3 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="project-image">
                                    <a href="project_detail2.php">
                                        <img class="image__img" src="images/service/servicedetail4.jpg" alt="Bricks">
                                        <div class="image__overlay image__overlay--primary">
                                            <div class="image__title1">
                                            ต่อเติม / รีโนเวท / ตกแต่ง บ้านและอาคาร
                                            </div>
                                            <p class="image__description">
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-6 mb-3 wow fadeInRight" data-wow-delay="0.3s">
                                <div class="project-image">
                                    <a href="project_detail_1.php">
                                        <img class="image__img" src="images/service/servicedetail1.jpg" alt="Bricks">
                                        <div class="image__overlay image__overlay--primary">
                                            <div class="image__title">
                                         โรงรถ / กันสาด <br> <span>(แบบโปร่งแสง)</span>
                                            </div>
                                            <p class="image__description">

                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-3 wow fadeInRight" data-wow-delay="0.3s">
                                <div class="project-image">
                                    <a href="project_detail.php">
                                        <img class="image__img" src="images/service/servicedetail1.jpg" alt="Bricks">
                                        <div class="image__overlay image__overlay--primary">
                                            <div class="image__title">
                                            โรงรถ / กันสาด <br><span>(แบบทึบแสง)</span>
                                            </div>
                                            <p class="image__description">

                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 mb-3 wow fadeInRight" data-wow-delay="0.3s">
                                <div class="project-image">
                                    <a href="project_detail4.php">
                                        <img class="image__img" src="images/service/servicedetail2.jpg" alt="Bricks">
                                        <div class="image__overlay image__overlay--primary">
                                            <div class="image__title">
                                                ระแนง / แผงบังตา
                                            </div>
                                            <p class="image__description">

                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-3 wow fadeInRight" data-wow-delay="0.3s">
                                <div class="project-image">
                                    <a href="project_detail5.php">
                                        <img class="image__img" src="images/service/servicedetail3.jpg" alt="Bricks">
                                        <div class="image__overlay image__overlay--primary">
                                            <div class="image__title">
                                            แผงบังตาขนาดใหญ่ (Facade)
                                            </div>
                                            <p class="image__description">
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <!-- Footer Start -->
    <?php include "footer.php"; ?>
    <!-- Footer End -->




    <?php include "js.php"; ?>
</body>

</html>