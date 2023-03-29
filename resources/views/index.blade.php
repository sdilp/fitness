@extends('layout')

@section('content')
        <!-- Carousel Start -->
        <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="/assets/img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase">Best Gym Center</h5>
                            <h1 class="display-2 text-white text-uppercase mb-md-4">Build Your Body Strong With Gymster</h1>
                            <a href="/login" class="btn btn-primary py-md-3 px-md-5 me-3">Join Us</a>
                            <a href="/contact" class="btn btn-light py-md-3 px-md-5">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="/assets/img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase">Best Gym Center</h5>
                            <h1 class="display-2 text-white text-uppercase mb-md-4">Grow Your Strength With Our Trainers</h1>
                            <a href="login.html" class="btn btn-primary py-md-3 px-md-5 me-3">Join Us</a>
                            <a href="/contact" class="btn btn-light py-md-3 px-md-5">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid p-5">
        <div class="row gx-5">
            <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded" src="/assets/img/about.jpg" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="mb-4">
                    <h5 class="text-primary text-uppercase">About Us</h5>
                    <h1 class="display-3 text-uppercase mb-0">Welcome to Gymster</h1>
                </div>
                <h4 class="text-body mb-4">By joining us, you've already taken the first step on your fitness journey and we couldn't be happier to walk with you on the path to achieve your health and fitness goals!</h4>
                <p class="mb-4">Get started by collecting your [MEMBER ID CARD/KEY FOB] from the front desk, at which time you can also schedule an introductory session where we’ll review your goals and outline a plan together that best suits your needs.</p>
                <div class="rounded bg-dark p-5">
                    <ul class="nav nav-pills justify-content-between mb-3">
                        <li class="nav-item w-50">
                            <a class="nav-link text-uppercase text-center w-100 active" data-bs-toggle="pill" href="#pills-1">About Us</a>
                        </li>
                        <li class="nav-item w-50">
                                <a class="nav-link text-uppercase text-center w-100" data-bs-toggle="pill" href="#pills-2">Why Choose Us</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="pills-1">
                            <p class="text-secondary mb-0">Being physically and mentally fit is necessary to live a happy, long life. Exercise is one of the best ways to keep a person healthy. Hence, it is always best to find a workout routine no matter how busy you are. With the numerous diseases that spread today, many individuals realized the essence of workout.</p>
                        </div>
                        <div class="tab-pane fade" id="pills-2">
                            <p class="text-secondary mb-0">Specifically, having a workout routine will give an individual the greatest physical, mental, and social benefits. Accordingly, exercise will help you increase energy levels, reduce chronic disease risk, lose weight, and help improve brain health and memory. With such benefits, you probably will love to do workout routines soon.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Programe Start -->
    <div class="container-fluid programe position-relative px-5 mt-5" style="margin-bottom: 135px;">
        <div class="row g-5 gb-5">
            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded text-center p-5">
                    <i class="flaticon-six-pack display-1 text-primary"></i>
                    <h3 class="text-uppercase my-4">Body Building</h3>
                    <p>Bodybuilding is the use of progressive resistance exercise to control and develop one's muscles by muscle hypertrophy for aesthetic purposes.</p>
                    <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded text-center p-5">
                    <i class="flaticon-barbell display-1 text-primary"></i>
                    <h3 class="text-uppercase my-4">Weight Lefting</h3>
                    <p>Weight training is a common type of strength training for developing the strength, size of skeletal muscles and maintenance of strength.</p>
                    <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="bg-light rounded text-center p-5">
                    <i class="flaticon-bodybuilding display-1 text-primary"></i>
                    <h3 class="text-uppercase my-4">Muscle Building</h3>
                    <p>Don’t be scared to LIFT HEAVY! You won’t get huge and bulky, you’ll just get amazing. </p>
                    <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-12 col-md-6 text-center">
                
                <a href="/login" class="btn btn-primary py-3 px-5">Become A Member</a>
            </div>
        </div>
    </div>
    <!-- Programe Start -->


    <!-- Class Timetable Start -->
    <div class="container-fluid p-5">
        <div class="mb-5 text-center">
            <h5 class="text-primary text-uppercase">Class Schedule</h5>
            <h1 class="display-3 text-uppercase mb-0">Working Hours</h1>
        </div>
        <div class="tab-class text-center">
            <!-- <ul class="nav nav-pills d-inline-flex justify-content-center bg-dark text-uppercase rounded-pill mb-5">
                <li class="nav-item">
                    <a class="nav-link rounded-pill text-white active" data-bs-toggle="pill" href="#tab-1">Monday</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link rounded-pill text-white" data-bs-toggle="pill" href="#tab-2">Tuesday</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link rounded-pill text-white" data-bs-toggle="pill" href="#tab-3">Wednesday</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link rounded-pill text-white" data-bs-toggle="pill" href="#tab-4">Thursday</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link rounded-pill text-white" data-bs-toggle="pill" href="#tab-5">Friday</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link rounded-pill text-white" data-bs-toggle="pill" href="#tab-6">Saturday</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link rounded-pill text-white" data-bs-toggle="pill" href="#tab-7">Sunday</a>
                </li>
            </ul> -->
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-5">
                    @foreach ($data as $dat)
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">{{ $dat->time }}</h6>
                                <h5 class="text-uppercase text-primary">{{ $dat->type }}</h5>
                                <p class="text-uppercase text-secondary mb-0">{{ $dat->pname }}</p>
                            </div>
                        </div>
                    @endforeach
                        <!-- <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">6.00am - 8.00am</h6>
                                <h5 class="text-uppercase text-primary">Power Lifting</h5>
                                <p class="text-uppercase text-secondary mb-0">John Deo</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">8.00am - 10.00am</h6>
                                <h5 class="text-uppercase text-primary">Body Building</h5>
                                <p class="text-uppercase text-secondary mb-0">James Taylor</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">10.00am - 12.00pm</h6>
                                <h5 class="text-uppercase text-primary">Cardio Program</h5>
                                <p class="text-uppercase text-secondary mb-0">Jack Sparrow</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">12.00pm - 2.00pm</h6>
                                <h5 class="text-uppercase text-primary">Weight Loose</h5>
                                <p class="text-uppercase text-secondary mb-0">Robert Smith</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">2.00pm - 4.00pm</h6>
                                <h5 class="text-uppercase text-primary">Fitness Program</h5>
                                <p class="text-uppercase text-secondary mb-0">Adam Phillips</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">4.00pm - 6.00pm</h6>
                                <h5 class="text-uppercase text-primary">Crossfit Class</h5>
                                <p class="text-uppercase text-secondary mb-0">James Alien</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">6.00pm - 8.00pm</h6>
                                <h5 class="text-uppercase text-primary">Muscle Building</h5>
                                <p class="text-uppercase text-secondary mb-0">Petter John</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">8.00pm - 10.00pm</h6>
                                <h5 class="text-uppercase text-primary">Yoga Class</h5>
                                <p class="text-uppercase text-secondary mb-0">Jessy Reo</p>
                            </div>
                        </div> -->
                    </div>
                </div>
                <!-- <div id="tab-2" class="tab-pane fade p-0">
                    <div class="row g-5">
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">6.00am - 8.00am</h6>
                                <h5 class="text-uppercase text-primary">Power Lifting</h5>
                                <p class="text-uppercase text-secondary mb-0">John Deo</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">8.00am - 10.00am</h6>
                                <h5 class="text-uppercase text-primary">Body Building</h5>
                                <p class="text-uppercase text-secondary mb-0">James Taylor</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">10.00am - 12.00pm</h6>
                                <h5 class="text-uppercase text-primary">Cardio Program</h5>
                                <p class="text-uppercase text-secondary mb-0">Jack Sparrow</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">12.00pm - 2.00pm</h6>
                                <h5 class="text-uppercase text-primary">Weight Loose</h5>
                                <p class="text-uppercase text-secondary mb-0">Robert Smith</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">2.00pm - 4.00pm</h6>
                                <h5 class="text-uppercase text-primary">Fitness Program</h5>
                                <p class="text-uppercase text-secondary mb-0">Adam Phillips</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">4.00pm - 6.00pm</h6>
                                <h5 class="text-uppercase text-primary">Crossfit Class</h5>
                                <p class="text-uppercase text-secondary mb-0">James Alien</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">6.00pm - 8.00pm</h6>
                                <h5 class="text-uppercase text-primary">Muscle Building</h5>
                                <p class="text-uppercase text-secondary mb-0">Petter John</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">8.00pm - 10.00pm</h6>
                                <h5 class="text-uppercase text-primary">Yoga Class</h5>
                                <p class="text-uppercase text-secondary mb-0">Jessy Reo</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tab-3" class="tab-pane fade p-0">
                    <div class="row g-5">
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">6.00am - 8.00am</h6>
                                <h5 class="text-uppercase text-primary">Power Lifting</h5>
                                <p class="text-uppercase text-secondary mb-0">John Deo</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">8.00am - 10.00am</h6>
                                <h5 class="text-uppercase text-primary">Body Building</h5>
                                <p class="text-uppercase text-secondary mb-0">James Taylor</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">10.00am - 12.00pm</h6>
                                <h5 class="text-uppercase text-primary">Cardio Program</h5>
                                <p class="text-uppercase text-secondary mb-0">Jack Sparrow</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">12.00pm - 2.00pm</h6>
                                <h5 class="text-uppercase text-primary">Weight Loose</h5>
                                <p class="text-uppercase text-secondary mb-0">Robert Smith</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">2.00pm - 4.00pm</h6>
                                <h5 class="text-uppercase text-primary">Fitness Program</h5>
                                <p class="text-uppercase text-secondary mb-0">Adam Phillips</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">4.00pm - 6.00pm</h6>
                                <h5 class="text-uppercase text-primary">Crossfit Class</h5>
                                <p class="text-uppercase text-secondary mb-0">James Alien</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">6.00pm - 8.00pm</h6>
                                <h5 class="text-uppercase text-primary">Muscle Building</h5>
                                <p class="text-uppercase text-secondary mb-0">Petter John</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">8.00pm - 10.00pm</h6>
                                <h5 class="text-uppercase text-primary">Yoga Class</h5>
                                <p class="text-uppercase text-secondary mb-0">Jessy Reo</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tab-4" class="tab-pane fade p-0">
                    <div class="row g-5">
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">6.00am - 8.00am</h6>
                                <h5 class="text-uppercase text-primary">Power Lifting</h5>
                                <p class="text-uppercase text-secondary mb-0">John Deo</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">8.00am - 10.00am</h6>
                                <h5 class="text-uppercase text-primary">Body Building</h5>
                                <p class="text-uppercase text-secondary mb-0">James Taylor</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">10.00am - 12.00pm</h6>
                                <h5 class="text-uppercase text-primary">Cardio Program</h5>
                                <p class="text-uppercase text-secondary mb-0">Jack Sparrow</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">12.00pm - 2.00pm</h6>
                                <h5 class="text-uppercase text-primary">Weight Loose</h5>
                                <p class="text-uppercase text-secondary mb-0">Robert Smith</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">2.00pm - 4.00pm</h6>
                                <h5 class="text-uppercase text-primary">Fitness Program</h5>
                                <p class="text-uppercase text-secondary mb-0">Adam Phillips</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">4.00pm - 6.00pm</h6>
                                <h5 class="text-uppercase text-primary">Crossfit Class</h5>
                                <p class="text-uppercase text-secondary mb-0">James Alien</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">6.00pm - 8.00pm</h6>
                                <h5 class="text-uppercase text-primary">Muscle Building</h5>
                                <p class="text-uppercase text-secondary mb-0">Petter John</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">8.00pm - 10.00pm</h6>
                                <h5 class="text-uppercase text-primary">Yoga Class</h5>
                                <p class="text-uppercase text-secondary mb-0">Jessy Reo</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tab-5" class="tab-pane fade p-0">
                    <div class="row g-5">
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">6.00am - 8.00am</h6>
                                <h5 class="text-uppercase text-primary">Power Lifting</h5>
                                <p class="text-uppercase text-secondary mb-0">John Deo</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">8.00am - 10.00am</h6>
                                <h5 class="text-uppercase text-primary">Body Building</h5>
                                <p class="text-uppercase text-secondary mb-0">James Taylor</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">10.00am - 12.00pm</h6>
                                <h5 class="text-uppercase text-primary">Cardio Program</h5>
                                <p class="text-uppercase text-secondary mb-0">Jack Sparrow</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">12.00pm - 2.00pm</h6>
                                <h5 class="text-uppercase text-primary">Weight Loose</h5>
                                <p class="text-uppercase text-secondary mb-0">Robert Smith</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">2.00pm - 4.00pm</h6>
                                <h5 class="text-uppercase text-primary">Fitness Program</h5>
                                <p class="text-uppercase text-secondary mb-0">Adam Phillips</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">4.00pm - 6.00pm</h6>
                                <h5 class="text-uppercase text-primary">Crossfit Class</h5>
                                <p class="text-uppercase text-secondary mb-0">James Alien</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">6.00pm - 8.00pm</h6>
                                <h5 class="text-uppercase text-primary">Muscle Building</h5>
                                <p class="text-uppercase text-secondary mb-0">Petter John</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">8.00pm - 10.00pm</h6>
                                <h5 class="text-uppercase text-primary">Yoga Class</h5>
                                <p class="text-uppercase text-secondary mb-0">Jessy Reo</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tab-6" class="tab-pane fade p-0">
                    <div class="row g-5">
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">6.00am - 8.00am</h6>
                                <h5 class="text-uppercase text-primary">Power Lifting</h5>
                                <p class="text-uppercase text-secondary mb-0">John Deo</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">8.00am - 10.00am</h6>
                                <h5 class="text-uppercase text-primary">Body Building</h5>
                                <p class="text-uppercase text-secondary mb-0">James Taylor</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">10.00am - 12.00pm</h6>
                                <h5 class="text-uppercase text-primary">Cardio Program</h5>
                                <p class="text-uppercase text-secondary mb-0">Jack Sparrow</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">12.00pm - 2.00pm</h6>
                                <h5 class="text-uppercase text-primary">Weight Loose</h5>
                                <p class="text-uppercase text-secondary mb-0">Robert Smith</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">2.00pm - 4.00pm</h6>
                                <h5 class="text-uppercase text-primary">Fitness Program</h5>
                                <p class="text-uppercase text-secondary mb-0">Adam Phillips</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">4.00pm - 6.00pm</h6>
                                <h5 class="text-uppercase text-primary">Crossfit Class</h5>
                                <p class="text-uppercase text-secondary mb-0">James Alien</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">6.00pm - 8.00pm</h6>
                                <h5 class="text-uppercase text-primary">Muscle Building</h5>
                                <p class="text-uppercase text-secondary mb-0">Petter John</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">8.00pm - 10.00pm</h6>
                                <h5 class="text-uppercase text-primary">Yoga Class</h5>
                                <p class="text-uppercase text-secondary mb-0">Jessy Reo</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tab-7" class="tab-pane fade p-0">
                    <div class="row g-5">
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">6.00am - 8.00am</h6>
                                <h5 class="text-uppercase text-primary">Power Lifting</h5>
                                <p class="text-uppercase text-secondary mb-0">John Deo</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">8.00am - 10.00am</h6>
                                <h5 class="text-uppercase text-primary">Body Building</h5>
                                <p class="text-uppercase text-secondary mb-0">James Taylor</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">10.00am - 12.00pm</h6>
                                <h5 class="text-uppercase text-primary">Cardio Program</h5>
                                <p class="text-uppercase text-secondary mb-0">Jack Sparrow</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">12.00pm - 2.00pm</h6>
                                <h5 class="text-uppercase text-primary">Weight Loose</h5>
                                <p class="text-uppercase text-secondary mb-0">Robert Smith</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">2.00pm - 4.00pm</h6>
                                <h5 class="text-uppercase text-primary">Fitness Program</h5>
                                <p class="text-uppercase text-secondary mb-0">Adam Phillips</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">4.00pm - 6.00pm</h6>
                                <h5 class="text-uppercase text-primary">Crossfit Class</h5>
                                <p class="text-uppercase text-secondary mb-0">James Alien</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">6.00pm - 8.00pm</h6>
                                <h5 class="text-uppercase text-primary">Muscle Building</h5>
                                <p class="text-uppercase text-secondary mb-0">Petter John</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="bg-dark rounded text-center py-5 px-3">
                                <h6 class="text-uppercase text-light mb-3">8.00pm - 10.00pm</h6>
                                <h5 class="text-uppercase text-primary">Yoga Class</h5>
                                <p class="text-uppercase text-secondary mb-0">Jessy Reo</p>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <!-- Class Timetable Start -->
    

    <!-- Facts Start -->
    <!-- <div class="container-fluid bg-dark facts p-5 my-5">
        <div class="row gx-5 gy-4 py-5">
            <div class="col-lg-3 col-md-6">
                <div class="d-flex">
                    <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                        <i class="fa fa-star fs-4 text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="text-secondary text-uppercase">Experience</h5>
                        <h1 class="display-5 text-white mb-0" data-toggle="counter-up">12345</h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="d-flex">
                    <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                        <i class="fa fa-users fs-4 text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="text-secondary text-uppercase">Our Trainers</h5>
                        <h1 class="display-5 text-white mb-0" data-toggle="counter-up">12345</h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="d-flex">
                    <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                        <i class="fa fa-check fs-4 text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="text-secondary text-uppercase">Complete Project</h5>
                        <h1 class="display-5 text-white mb-0" data-toggle="counter-up">12345</h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="d-flex">
                    <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                        <i class="fa fa-mug-hot fs-4 text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="text-secondary text-uppercase">Happy Clients</h5>
                        <h1 class="display-5 text-white mb-0" data-toggle="counter-up">12345</h1>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Facts End -->


    <!-- Team Start -->
    <div class="container-fluid p-5">
        <div class="mb-5 text-center">
            <h5 class="text-primary text-uppercase">The Team</h5>
            <h1 class="display-3 text-uppercase mb-0">Expert Trainers</h1>
        </div>
        <div class="row g-5">
            @foreach ($tdata as $tdat)
            <div class="col-lg-4 col-md-6">
                <div class="team-item position-relative">
                    <div class="position-relative overflow-hidden rounded">
                        <img class="img-fluid w-100" src="{{ asset('assets/uploads/'.$tdat->image) }}" alt="">
                        <!-- <div class="team-overlay">
                            <div class="d-flex align-items-center justify-content-start">
                                <a class="btn btn-light btn-square rounded-circle mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-light btn-square rounded-circle mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-light btn-square rounded-circle mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div> -->
                    </div>
                    <div class="position-absolute start-0 bottom-0 w-100 rounded-bottom text-center p-4" style="background: rgba(34, 36, 41, .9);">
                        <h5 class="text-uppercase text-light">{{ $tdat->name }}</h5>
                        <p class="text-uppercase text-secondary m-0">{{ $tdat->title }}</p>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- <div class="col-lg-4 col-md-6">
                <div class="team-item position-relative">
                    <div class="position-relative overflow-hidden rounded">
                        <img class="img-fluid w-100" src="/assets/img/team-2.jpg" alt="">
                        <div class="team-overlay">
                            <div class="d-flex align-items-center justify-content-start">
                                <a class="btn btn-light btn-square rounded-circle mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-light btn-square rounded-circle mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-light btn-square rounded-circle mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="position-absolute start-0 bottom-0 w-100 rounded-bottom text-center p-4" style="background: rgba(34, 36, 41, .9);">
                        <h5 class="text-uppercase text-light">James Taylor</h5>
                        <p class="text-uppercase text-secondary m-0">Trainer</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="team-item position-relative">
                    <div class="position-relative overflow-hidden rounded">
                        <img class="img-fluid w-100" src="/assets/img/team-3.jpg" alt="">
                        <div class="team-overlay">
                            <div class="d-flex align-items-center justify-content-start">
                                <a class="btn btn-light btn-square rounded-circle mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-light btn-square rounded-circle mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-light btn-square rounded-circle mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="position-absolute start-0 bottom-0 w-100 rounded-bottom text-center p-4" style="background: rgba(34, 36, 41, .9);">
                        <h5 class="text-uppercase text-light">Adam Phillips</h5>
                        <p class="text-uppercase text-secondary m-0">Trainer</p>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
    <!-- Team End -->
    

    <!-- Testimonial Start -->
    <!-- <div class="container-fluid p-0 my-5">
        <div class="row g-0">
            <div class="col-lg-6" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100" src="/assets/img/testimonial.jpg" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-6 bg-dark p-5">
                <div class="mb-5">
                    <h5 class="text-primary text-uppercase">Testimonial</h5>
                    <h1 class="display-3 text-uppercase text-light mb-0">Our Client Say</h1>
                </div>
                <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item">
                        <p class="fs-4 fw-normal text-light mb-4"><i class="fa fa-quote-left text-primary me-3"></i>Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat dolor rebum sit ipsum.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid rounded-circle" src="/assets/img/testimonial-1.jpg" alt="">
                            <div class="ps-4">
                                <h5 class="text-uppercase text-light">Client Name</h5>
                                <span class="text-uppercase text-secondary">Profession</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <p class="fs-4 fw-normal text-light mb-4"><i class="fa fa-quote-left text-primary me-3"></i>Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat dolor rebum sit ipsum.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid rounded-circle" src="/assets/img/testimonial-2.jpg" alt="">
                            <div class="ps-4">
                                <h5 class="text-uppercase text-light">Client Name</h5>
                                <span class="text-uppercase text-secondary">Profession</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Testimonial End -->


    <!-- Blog Start -->
    <!-- <div class="container-fluid p-5">
        <div class="mb-5 text-center">
            <h5 class="text-primary text-uppercase">Our Blog</h5>
            <h1 class="display-3 text-uppercase mb-0">Latest Blog Post</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-4">
                <div class="blog-item">
                    <div class="position-relative overflow-hidden rounded-top">
                        <img class="img-fluid" src="img/blog-1.jpg" alt="">
                    </div>
                    <div class="bg-dark d-flex align-items-center rounded-bottom p-4">
                        <div class="flex-shrink-0 text-center text-secondary border-end border-secondary pe-3 me-3">
                            <span>01</span>
                            <h6 class="text-light text-uppercase mb-0">January</h6>
                            <span>2045</span>
                        </div>
                        <a class="h5 text-uppercase text-light" href="">Sed amet tempor amet sit kasd sea lorem</h4></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog-item">
                    <div class="position-relative overflow-hidden rounded-top">
                        <img class="img-fluid" src="img/blog-2.jpg" alt="">
                    </div>
                    <div class="bg-dark d-flex align-items-center rounded-bottom p-4">
                        <div class="flex-shrink-0 text-center text-secondary border-end border-secondary pe-3 me-3">
                            <span>01</span>
                            <h6 class="text-light text-uppercase mb-0">January</h6>
                            <span>2045</span>
                        </div>
                        <a class="h5 text-uppercase text-light" href="">Sed amet tempor amet sit kasd sea lorem</h4></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog-item">
                    <div class="position-relative overflow-hidden rounded-top">
                        <img class="img-fluid" src="img/blog-3.jpg" alt="">
                    </div>
                    <div class="bg-dark d-flex align-items-center rounded-bottom p-4">
                        <div class="flex-shrink-0 text-center text-secondary border-end border-secondary pe-3 me-3">
                            <span>01</span>
                            <h6 class="text-light text-uppercase mb-0">January</h6>
                            <span>2045</span>
                        </div>
                        <a class="h5 text-uppercase text-light" href="">Sed amet tempor amet sit kasd sea lorem</h4></a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Blog End -->
@stop()