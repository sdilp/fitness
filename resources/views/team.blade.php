@extends('layout')

@section('content')
    <!-- Hero Start -->
    <div class="container-fluid bg-primary p-5 bg-hero mb-5">
        <div class="row py-5">
            <div class="col-12 text-center">
                <h1 class="display-2 text-uppercase text-white mb-md-4">Trainers</h1>
                <a href="/~2013464/fitness/public/" class="btn btn-primary py-md-3 px-md-5 me-3">Home</a>
                <a href="/~2013464/fitness/public/viewTrainerindex" class="btn btn-light py-md-3 px-md-5">Trainers</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Team Start -->
    <div class="container-fluid p-5">
        <div class="mb-5 text-center">
            <h5 class="text-primary text-uppercase">The Team</h5>
            <h1 class="display-3 text-uppercase mb-0">Expert Trainers</h1>
        </div>
        <div class="row g-5">
            @foreach($data as $expert)
            <div class="col-lg-4 col-md-6">
                <div class="team-item position-relative">
                    <div class="position-relative overflow-hidden rounded">
                        <img class="img-fluid w-100" src="{{ asset('assets/uploads/'.$expert->image) }}" alt="">
                        <!-- <div class="team-overlay">
                            <div class="d-flex align-items-center justify-content-start">
                                <a class="btn btn-light btn-square rounded-circle mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-light btn-square rounded-circle mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-light btn-square rounded-circle mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div> -->
                    </div>
                    <div class="position-absolute start-0 bottom-0 w-100 rounded-bottom text-center p-4" style="background: rgba(34, 36, 41, .9);">
                        <h5 class="text-uppercase text-light">{{ $expert->name }}</h5>
                        <p class="text-uppercase text-secondary m-0">{{ $expert->title }}</p>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- <div class="col-lg-4 col-md-6">
                <div class="team-item position-relative">
                    <div class="position-relative overflow-hidden rounded">
                        <img class="img-fluid w-100" src="https://mi-linux.wlv.ac.uk/~2013464/fitness/public/assets/img/team-2.jpg" alt="">
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
            </div> -->
            <!-- <div class="col-lg-4 col-md-6">
                <div class="team-item position-relative">
                    <div class="position-relative overflow-hidden rounded">
                        <img class="img-fluid w-100" src="https://mi-linux.wlv.ac.uk/~2013464/fitness/public/assets/img/team-3.jpg" alt="">
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
            <!-- <div class="col-lg-4 col-md-6">
                <div class="team-item position-relative">
                    <div class="position-relative overflow-hidden rounded">
                        <img class="img-fluid w-100" src="https://mi-linux.wlv.ac.uk/~2013464/fitness/public/assets/img/team-2.jpg" alt="">
                        <div class="team-overlay">
                            <div class="d-flex align-items-center justify-content-start">
                                <a class="btn btn-light btn-square rounded-circle mx-1" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-light btn-square rounded-circle mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-light btn-square rounded-circle mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="position-absolute start-0 bottom-0 w-100 rounded-bottom text-center p-4" style="background: rgba(34, 36, 41, .9);">
                        <h5 class="text-uppercase text-light">John Deo</h5>
                        <p class="text-uppercase text-secondary m-0">Trainer</p>
                    </div>
                </div>
            </div> -->
            <!-- <div class="col-lg-4 col-md-6">
                <div class="team-item position-relative">
                    <div class="position-relative overflow-hidden rounded">
                        <img class="img-fluid w-100" src="https://mi-linux.wlv.ac.uk/~2013464/fitness/public/assets/img/team-3.jpg" alt="">
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
            </div> -->
            <!-- <div class="col-lg-4 col-md-6">
                <div class="team-item position-relative">
                    <div class="position-relative overflow-hidden rounded">
                        <img class="img-fluid w-100" src="https://mi-linux.wlv.ac.uk/~2013464/fitness/public/assets/img/team-1.jpg" alt="">
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
@stop()