<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>GYMSTER</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="https://mi-linux.wlv.ac.uk/~2013464/fitness/public/assets/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://mi-linux.wlv.ac.uk/~2013464/fitness/public/assets/lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="https://mi-linux.wlv.ac.uk/~2013464/fitness/public/assets/lib/owlcarouselhttps://mi-linux.wlv.ac.uk/~2013464/fitness/public/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="https://mi-linux.wlv.ac.uk/~2013464/fitness/public/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="https://mi-linux.wlv.ac.uk/~2013464/fitness/public/assets/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Header Start -->
    <div class="container-fluid bg-dark px-0">
        <div class="row gx-0">
            <div class="col-lg-3 bg-dark d-none d-lg-block">
                <a href="./index.php" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                    <h1 class="m-0 display-4 text-primary text-uppercase">Gymster</h1>
                </a>
            </div>
            <div class="col-lg-9">
                <div class="row gx-0 bg-secondary d-none d-lg-flex">
                    <div class="col-lg-7 px-5 text-start">
                        <div class="h-100 d-inline-flex align-items-center py-2 me-4">
                            <i class="fa fa-envelope text-primary me-2"></i>
                            <h6 class="mb-0">dilpreet@gmail.com</h6>
                        </div>
                        <div class="h-100 d-inline-flex align-items-center py-2">
                            <i class="fa fa-phone-alt text-primary me-2"></i>
                            <h6 class="mb-0">+012 345 6789</h6>
                        </div>
                    </div>
                    <!-- <div class="col-lg-5 px-5 text-end">
                        <div class="d-inline-flex align-items-center py-2">
                            <a class="btn btn-light btn-square rounded-circle me-2" href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="btn btn-light btn-square rounded-circle me-2" href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="btn btn-light btn-square rounded-circle me-2" href="">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a class="btn btn-light btn-square rounded-circle me-2" href="">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a class="btn btn-light btn-square rounded-circle" href="">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div> -->
                </div>
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0 px-lg-5">
                    <a href="/" class="navbar-brand d-block d-lg-none">
                        <h1 class="m-0 display-4 text-primary text-uppercase">Gymster</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="index.php" class="nav-item nav-link active">Home</a>
                            <a href="/about" class="nav-item nav-link">About</a>
                            <a href="/viewschedulesindex" class="nav-item nav-link">Classes</a>
                            <a href="/viewTrainerindex" class="nav-item nav-link">Trainers</a>
                            <!-- <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="blog.php" class="dropdown-item">Blog Grid</a>
                                    <a href="detail.php" class="dropdown-item">Blog Detail</a>
                                    <a href="testimonial.php" class="dropdown-item">Testimonial</a>
                                </div>
                            </div> -->
                            <a href="/contact" class="nav-item nav-link">Contact</a>
                        </div>
                        <a href="/login" class="btn btn-primary py-md-3 px-md-5 d-none d-lg-block">Join Us</a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <div>
    @yield('content')
    </div>

    <!-- Footer Start -->
<div class="container-fluid bg-dark text-secondary px-5 mt-5">
        <div class="row gx-5">
            <div class="col-lg-12 col-md-12">
                <div class="row gx-5">
                    <!-- <div class="col-lg-12 col-md-12 pt-5 mb-5">
                        <h4 class="text-uppercase text-light mb-4">Get In Touch</h4>
                        <div class="d-flex mb-2">
                            <i class="bi bi-geo-alt text-primary me-2"></i>
                            <p class="mb-0">123 Street, New York, USA</p>
                        </div>
                        <div class="d-flex mb-2">
                            <i class="bi bi-envelope-open text-primary me-2"></i>
                            <p class="mb-0">info@example.com</p>
                        </div>
                        <div class="d-flex mb-2">
                            <i class="bi bi-telephone text-primary me-2"></i>
                            <p class="mb-0">+012 345 67890</p>
                        </div>
                        <div class="d-flex mt-4">
                            <a class="btn btn-primary btn-square rounded-circle me-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-primary btn-square rounded-circle me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-primary btn-square rounded-circle me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-primary btn-square rounded-circle" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div> -->
                    <!-- <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                        <h4 class="text-uppercase text-light mb-4">Quick Links</h4>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="/"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                            <a class="text-secondary mb-2" href="/about"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                            <a class="text-secondary mb-2" href="/class"><i class="bi bi-arrow-right text-primary me-2"></i>Class Schedule</a>
                            <a class="text-secondary mb-2" href="/team"><i class="bi bi-arrow-right text-primary me-2"></i>Our Trainers</a>
                            <a class="text-secondary" href="/contact"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                        </div>
                    </div> -->
                    <!-- <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                        <h4 class="text-uppercase text-light mb-4">Popular Links</h4>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="/"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                            <a class="text-secondary mb-2" href="/about"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                            <a class="text-secondary mb-2" href="/class"><i class="bi bi-arrow-right text-primary me-2"></i>Class Schedule</a>
                            <a class="text-secondary mb-2" href="/team"><i class="bi bi-arrow-right text-primary me-2"></i>Our Trainers</a>
                            <a class="text-secondary" href="/contact"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                        </div>
                    </div> -->
                </div>
            </div>
            <!-- <div class="col-lg-4 col-md-6">
                <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-5">
                    <h4 class="text-uppercase text-white mb-4">Newsletter</h4>
                    <h6 class="text-uppercase text-white">Subscribe Our Newsletter</h6>
                    <p class="text-light">Amet justo diam dolor rebum lorem sit stet sea justo kasd</p>
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                            <button class="btn btn-dark">Sign Up</button>
                        </div>
                    </form>
                </div>
            </div> -->
        </div>
    </div>
    <div class="container-fluid py-4 py-lg-0 px-5" style="background: #111111;">
        <div class="row gx-5">
            <div class="col-lg-8">
                <div class="py-lg-4 text-center">
                    <p class="text-secondary mb-0">&copy; <a class="text-light fw-bold" href="/">GYMSTER</a>. All Rights Reserved.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="py-lg-4 text-center credit">
                    <p class="text-light mb-0">Designed by <a class="text-light fw-bold" href="#">DILPREET</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-dark py-3 fs-4 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://mi-linux.wlv.ac.uk/~2013464/fitness/public/assets/lib/easing/easing.min.js"></script>
    <script src="https://mi-linux.wlv.ac.uk/~2013464/fitness/public/assets/lib/waypoints/waypoints.min.js"></script>
    <script src="https://mi-linux.wlv.ac.uk/~2013464/fitness/public/assets/lib/counterup/counterup.min.js"></script>
    <script src="https://mi-linux.wlv.ac.uk/~2013464/fitness/public/assets/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="https://mi-linux.wlv.ac.uk/~2013464/fitness/public/assets/js/main.js"></script>
</body>
</html>
