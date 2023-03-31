    <!-- Topbar Start -->
    <!-- <div class="container-fluid bg-dark p-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-3">
                    <a class="text-body px-2" href="tel:+0123456789"><i class="fa fa-phone-alt text-primary me-2"></i>+012 345 6789</a>
                    <a class="text-body px-2" href="mailto:info@example.com"><i class="fa fa-envelope-open text-primary me-2"></i>info@example.com</a>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-2">
                    <a class="text-body px-2" href="">Terms</a>
                    <a class="text-body px-2" href="">Privacy</a>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn btn-sm-square btn-outline-body me-1" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square btn-outline-body me-1" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-sm-square btn-outline-body me-1" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-sm-square btn-outline-body me-0" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Topbar End -->


     <!-- Navbar Start -->
     <nav class="navbar navbar-expand-xxl bg-white navbar-light sticky-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
       <a href="index.php" class="navbar-brand ms-4 ms-lg-0">
       <img class="billion-logo" src="images/logo/Billion Deco Logo (1).png"  alt="Icon">
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link <?php if($nav=="home"){echo "active";}  ?> ">Home</a>
                <a href="service.php" class="nav-item nav-link <?php if($nav=="service"){echo "active";}  ?>">Services</a>
                <a href="project.php" class="nav-item nav-link <?php if($nav=="project"){echo "active";}  ?>">Project</a>
                <a href="about.php" class="nav-item nav-link <?php if($nav=="about"){echo "active";}  ?>">About us</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Contact</a>
                    <div class="dropdown-menu border-0 m-0">
                    <a href="contact.php" class="dropdown-item"><i class="fas fa-chevron-right"></i> Contact</a>
                        <a href="knowledge.php" class="dropdown-item"><i class="fas fa-chevron-right"></i> knowledge</a>
                        <a href="qa.php" class="dropdown-item"><i class="fas fa-chevron-right"></i> Q&A</a>
                    </div>
                </div>
                <a href="https://line.me/ti/p/6-kF__NhM7" target="_blank" class="nav-item nav-link d-inline"><i class="fab fa-line" style="font-size:24px"></i></a>
                <a href="https://www.facebook.com/billiondeco888/" target="_blank" class="nav-item nav-link d-inline"><i class="fab fa-facebook-square" style="font-size:24px"></i></a>
                <a href="work.php" class="nav-item nav-link">ร่วมงานกับเรา</a>
            </div>

        </div>
    </nav>
    <!-- Navbar End -->