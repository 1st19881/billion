<?php $nav = "contact";  ?>
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
    .about-dis {
        padding: 40px 20px;
    }

    .about-dis p {
        text-align: center;
        font-size: 1em;
        color: #314556;
    }

    .aboutus-title {
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

    <!-- breadcrumb-service-->

    <div class="container-xxl">
        <div class="container">
            <div class="text-center mx-auto mt-4 wow fadeInUp " data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="section-title">Contact us</h4>
                <h1 class="display-5 mb-4 aboutus-title">ติดต่อเรา</h1>
            </div>
            <div class="breadcrumb-service wow fadeInUp" data-wow-delay="0.1s">
                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">ติดต่อเรา</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- breadcrumb-service End -->




    <!-- Feature Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex flex-column justify-content-between h-100">
                        <div class="bg-light d-flex align-items-center w-100 p-4 mb-4">
                            <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-dark" style="width: 55px; height: 55px;">
                                <i class="fa fa-map-marker-alt text-primary"></i>
                            </div>
                            <div class="ms-4">
                                <p class="mb-2">Address</p>
                                <h6 class="mb-0">บริษัท อินเตอร์ ไพรเมอร์ซี จำกัด <br>
                                    22/3 ถนนถวิลพัฒนา ตำบลบ่อพลับ อำเภอเมืองนครปฐม จังหวัดนครปฐม 73000
                                </h6>
                                <br>
                                <h6 class="mb-0">22/3 Tawin Phatthana Road, Bo Phlap Subdistrict, Mueang Nakhon Pathom District, Nakhon Pathom 73000</h6>
                                <br>
                                <h6 class="mb-0">เลขประจำตัวผู้เสียภาษี : 0105558144431
                                </h6>
                                <br>
                                <h6 class="mb-0"><a href="https://goo.gl/maps/JExJW8KN3iXPJiQR9" target="_blank" class="">View On Google Map</a></h6>
                            </div>
                        </div>
                        <div class="bg-light d-flex align-items-center w-100 p-4 mb-4">
                            <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-dark" style="width: 55px; height: 55px;">
                                <i class="fa fa-phone-alt text-primary"></i>
                            </div>
                            <div class="ms-4">
                                <p class="mb-2">Phone</p>
                                <h6 class="mb-0">082-987-9464</h6>
                            </div>
                        </div>
                        <div class="bg-light d-flex align-items-center w-100 p-4 mb-4">
                            <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-dark" style="width: 55px; height: 55px;">
                                <i class="fa fa-envelope-open text-primary"></i>
                            </div>
                            <div class="ms-4">
                                <p class="mb-2">Email</p>
                                <h6 class="mb-0">interprimercy@gmail.com</h6>
                            </div>
                        </div>
                        <div class="bg-light d-flex justify-content-center w-100 p-4 mb-4">
                            <a class="btn btn-square btn-outline-body me-3" href="https://www.facebook.com/billiondeco888/" target="_blank"><i class="fab fa-facebook-f fa-2x"></i></a>
                            <a class="btn btn-square btn-outline-body me-3" href="https://line.me/ti/p/6-kF__NhM7" target="_blank"><i class="fab fa-line fa-2x"></i></a>
                            <a class="btn btn-square btn-outline-body me-3" href=""><i class="fab fa-facebook-messenger fa-2x"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <p class="mb-4">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    </p>
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email">
                                    <label for="email">Your Phone</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject">
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Feature End -->




    <!-- Footer Start -->
    <?php include "footer.php"; ?>
    <!-- Footer End -->




    <?php include "js.php"; ?>
</body>

</html>