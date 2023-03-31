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


    <div class="container-fluid">
        <div class="container">
            <!-- <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="section-title">Product Rococo</h4>
                <h1 class="display-5 mb-4">บริการของเรา</h1>
            </div> -->
            <div class="breadcrumb-service">
                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="service.php">Service</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Service_detail</li>
                    </ol>
                </nav>
            </div>



            <!-- About Start -->

            <div class="row">
                <div class="col-lg-6 mb-4 wow fadeInUp" data-wow-delay="0.3s">
                    <!-- <h4 class="section-title">About Us</h4>                   <h4 class="section-title">About Us</h4> -->
                    <div class="service-title">
                        <h2 class="mb-3">ต่อเติม / รีโนเวท / ตกแต่ง บ้านและอาคาร</h2>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora quam corporis culpa veritatis quisquam. Unde exercitationem a rerum non deserunt nihil, iure, quia est molestias totam magni? Quidem, magni amet?</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora quam corporis culpa veritatis quisquam. Unde exercitationem a rerum non deserunt nihil, iure, quia est molestias totam magni? Quidem, magni amet?</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora quam corporis culpa veritatis quisquam. Unde exercitationem a rerum non deserunt nihil, iure, quia est molestias totam magni? Quidem, magni amet?</p>
                    <div class="d-flex align-items-center mb-5">
                    </div>
                    <a class="btn btn-primary py-3 px-5" href="project_detail2.php">View Project</a>
                </div>
                <div class="col-lg-6 wow  fadeInRight" data-wow-delay="0.1s">
                    <div class="service_about_img">
                        <img class="img-fluid" src="images/service/servicedetail4.jpg" alt="">
                    </div>
                </div>


                <div class="service_detail_hightlight wow fadeInDown" data-wow-delay="0.1s">
                    <div class="">
                        <h1>จุดเด่นการให้บริการ</h1>
                    </div>
                    <div class="row g-3">
                        <div class="col-lg-3 col-md-6 mb-5 wow fadeInDown" data-wow-delay="0.1s">
                            <div class="fact-item text-center bg-light h-100 p-5 pt-0">
                                <div class="fact-icon">
                                    <img src="assets/template/ak/img/icons/icon-9.png" alt="Icon">
                                </div>
                                <h3 class="mb-3">Lorem Ipsum</h3>
                                <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-5 wow fadeInDown" data-wow-delay="0.3s">
                            <div class="fact-item text-center bg-light h-100 p-5 pt-0">
                                <div class="fact-icon">
                                    <img src="assets/template/ak/img/icons/icon-3.png" alt="Icon">
                                </div>
                                <h3 class="mb-3">Lorem Ipsum</h3>
                                <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-5 wow fadeInDown" data-wow-delay="0.5s">
                            <div class="fact-item text-center bg-light h-100 p-5 pt-0">
                                <div class="fact-icon">
                                    <img src="assets/template/ak/img/icons/icon-4.png" alt="Icon">
                                </div>
                                <h3 class="mb-3">Lorem Ipsum</h3>
                                <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-5 wow fadeInDown" data-wow-delay="0.5s">
                            <div class="fact-item text-center bg-light h-100 p-5 pt-0">
                                <div class="fact-icon">
                                    <img src="assets/template/ak/img/icons/icon-5.png" alt="Icon">
                                </div>
                                <h3 class="mb-3">Lorem Ipsum</h3>
                                <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- ผลงงาน Start -->
                <div class="card-project">
                    <div class="text-center">
                        <h1 class="my-4 wow fadeInUp" data-wow-delay="0.5s">ภาพผลงาน</h1>
                    </div>
                    <div class="owl-carousel owl-theme wow fadeInUp" data-wow-delay="0.2s">
                        <div class="item">
                            <a href="project_detail3.php">
                                <div class="card">
                                    <img src="images/demo.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="project_detail3.php">
                                <div class="card">
                                    <img src="images/demo.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="project_detail3.php">
                                <div class="card">
                                    <img src="images/demo.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="project_detail3.php">
                                <div class="card">
                                    <img src="images/demo.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="project_detail3.php">
                                <div class="card">
                                    <img src="images/demo.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="project_detail3.php">
                                <div class="card">
                                    <img src="images/demo.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="project_detail3.php">
                                <div class="card">
                                    <img src="images/demo.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="project_detail3.php">
                                <div class="card">
                                    <img src="images/demo.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- ผลงงาน End -->

                <div class="col-lg-12 wow fadeIn" data-wow-delay="0.5s">
                    <div class="service_sub_cate">
                        <div class="service_subcate_title">
                            <h2 class="my-4 wow fadeIn" data-wow-delay="0.5s">พื้นที่การให้บริการ</h2>
                        </div>
                        <div class="service_card_suubcate">
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo, ipsum perspiciatis ducimus, quam quia, repudiandae numquam voluptatibus maxime temporibus sint voluptas magnam eaque doloremque a vel. Dolores vel consequuntur cum?</p>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo, ipsum perspiciatis ducimus, quam quia, repudiandae numquam voluptatibus maxime temporibus sint voluptas magnam eaque doloremque a vel. Dolores vel consequuntur cum?</p>
                        </div>
                        <div class="service_subcate_title">
                            <h2 class="my-4 wow fadeIn" data-wow-delay="0.5s">ขั้นตอนการเข้ารับบริการ</h2>
                        </div>
                        <div class="service_card_suubcate">
                            <div class="service_card_suubcate">
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo, ipsum perspiciatis ducimus, quam quia, repudiandae numquam voluptatibus maxime temporibus sint voluptas magnam eaque doloremque a vel. Dolores vel consequuntur cum?</p>

                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo, ipsum perspiciatis ducimus, quam quia, repudiandae numquam voluptatibus maxime temporibus sint voluptas magnam eaque doloremque a vel. Dolores vel consequuntur cum?</p>
                            </div>
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