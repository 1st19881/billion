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
                <h4 class="section-title">Project Our</h4>
                <h1 class="display-5 mb-4">Project_detail</h1>
            </div>
            <div class="breadcrumb-service wow fadeInUp" data-wow-delay="0.1s">
                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="project.php">project</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Project_detail</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Service End -->



    <!-- Service Start -->
    <div class="container-fluid">
        <div class="container">
            <div class="card-project">
                <div class="row g-4">
                    <?php for ($i = 1; $i <= 12; $i++) { ?>
                        <div class="col-lg-3 col-md-6 mb-3 wow fadeInUp text-center h-100" data-wow-delay="0.1s">
                            <a href="project_detail3.php">
                                <div class="card">
                                    <img src="images/demo.png" class="card-img-top" height="400vh" alt="..." style="object-fit: cover;">
                                    <div class="card-body">
                                        <h4 class="card-title">Card title</h4>
                                        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php }  ?>
                </div>
            </div>
            <div class="d-flex justify-content-center py-5 wow fadeInUp" data-wow-delay="0.1s">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Footer Start -->
    <?php include "footer.php"; ?>
    <!-- Footer End -->




    <?php include "js.php"; ?>
</body>

</html>