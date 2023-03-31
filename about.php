<?php $nav = "about";  ?>
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



<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border position-relative text-primary" style="width: 6rem; height: 6rem;" role="status"></div>
        <img class="position-absolute top-50 start-50 translate-middle" src="assets/template/ak/img/icons/icon-8.png" alt="Icon">
    </div>
    <!-- Spinner End -->


    <?php include "header.php"; ?>

    <!-- breadcrumb-service-->

    <div class="container-fluid">
        <div class="about-banner">
            <img src="images/banner/banner-about.jpg" width="100%" alt="">
            <!-- <h1 class="text1">BILLION DECO <br>
                งานต่อเติม โรงรถ-กันสาด ระแนง แผงบังแดด
            </h1> -->
        </div>
        <div class="container">
            <div class="text-center mx-auto mt-4 wow fadeInUp " data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="section-title">About us</h4>
                <h1 class="display-5 mb-4 aboutus-title">เกี่ยวกับเรา</h1>
            </div>
            <div class="breadcrumb-service wow fadeInUp" data-wow-delay="0.1s">
                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">เกี่ยวกับเรา</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- breadcrumb-service End -->





    <!-- about -->
    <div class="container-fluid">
        <div class="container">
            <div class="about-dis wow fadeInUp " data-wow-delay="0.1s">
                <p class="my-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                <p class="my-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                <p class="my-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
        </div>
    </div>
    <!-- about End -->




    <!-- Footer Start -->
    <?php include "footer.php"; ?>
    <!-- Footer End -->




    <?php include "js.php"; ?>
</body>

</html>