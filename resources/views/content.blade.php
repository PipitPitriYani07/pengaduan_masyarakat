@extends('layouts.master')
@section('content')
<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay=".3s">
                <div class="about-img">
                    <div class="rotate-left" style="background-color: #4A47A3;"></div>
                    <div class="rotate-right" style="background-color: #4A47A3;"></div>
                    <img src="{{ asset('pestkit/img/about-img.jpg') }}" class="img-fluid h-100" alt="img">
                    <div class="bg-white experiences">
                        <h1 class="display-3">20</h1>
                        <h6 class="fw-bold">Years Of Experiences</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay=".6s">
                <div class="about-item overflow-hidden">
                    <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">About PestKit</h5>
                    <h1 class="display-5 mb-2">World Best Pest Control Services Since 2008</h1>
                    <p class="fs-5" style="text-align: justify;">Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiu smod tempor incididunt ut labore dolore magna aliqua.Quis ipsum suspen disse ultrices gravida Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                    <div class="row">
                        <div class="col-3">
                            <div class="text-center">
                                <div class="p-4 rounded d-flex" style="background-color: #4A47A3; align-items: center; justify-content: center;">
                                    <i class="fas fa-city fa-4x text-primary"></i>
                                </div>
                                <div class="my-2">
                                    <h5>Building</h5>
                                    <h5>Cleaning</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="text-center">
                                <div class="p-4 rounded d-flex" style="background-color: #4A47A3; align-items: center; justify-content: center;">
                                    <i class="fas fa-school fa-4x text-primary"></i>
                                </div>
                                <div class="my-2">
                                    <h5>Education</h5>
                                    <h5>center</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="text-center">
                                <div class="p-4 rounded d-flex" style="background-color: #4A47A3; align-items: center; justify-content: center;">
                                    <i class="fas fa-warehouse fa-4x text-primary"></i>
                                </div>
                                <div class="my-2">
                                    <h5>Warehouse</h5>
                                    <h5>Cleaning</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="text-center">
                                <div class="p-4 rounded d-flex" style="background-color: #4A47A3; align-items: center; justify-content: center;">
                                    <i class="fas fa-hospital fa-4x text-primary"></i>
                                </div>
                                <div class="my-2">
                                    <h5>Hospital</h5>
                                    <h5>Cleaning</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary border-0 rounded-pill px-4 py-3 mt-5">Find Services</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Project Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".3s">
            <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">Our Project</h5>
            <h1 class="display-5">Our recently completed projects</h1>
        </div>
        <div class="row g-5">
            <div class="col-xxl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".3s">
                <div class="project-item">
                    <div class="project-left bg-custom"></div>
                    <div class="project-right bg-custom"></div>
                    <img src="{{ asset('pestkit/img/project 1.jpg') }}" class="img-fluid h-100" alt="img">
                    <a href="" class="fs-4 fw-bold text-center">Perbaikan Jalan Berlubang</a>
                </div>
            </div>
            <div class="col-xxl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".5s">
                <div class="project-item">
                    <div class="project-left bg-custom"></div>
                    <div class="project-right bg-custom"></div>
                    <img src="{{ asset('pestkit/img/project 2.jpg') }}" class="img-fluid h-100" alt="img">
                    <a href="" class="fs-4 fw-bold text-center">Perbaikan Gangguan Listrik</a>
                </div>
            </div>
            <div class="col-xxl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".7s">
                <div class="project-item">
                    <div class="project-left bg-custom"></div>
                    <div class="project-right bg-custom"></div>
                    <img src="{{ asset('pestkit/img/project 3.jpg') }}" class="img-fluid h-100" alt="img">
                    <a href="" class="fs-4 fw-bold text-center">Perbaikan Pipa Air</a>
                </div>
            </div>
            <div class="col-xxl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".3s">
                <div class="project-item">
                    <div class="project-left bg-custom"></div>
                    <div class="project-right bg-custom"></div>
                    <img src="{{ asset('pestkit/img/project 4.jpg') }}" class="img-fluid h-100" alt="img">
                    <a href="" class="fs-4 fw-bold text-center">Penertiban Lalu Lintas</a>
                </div>
            </div>
            <div class="col-xxl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".5s">
                <div class="project-item">
                    <div class="project-left bg-custom"></div>
                    <div class="project-right bg-custom"></div>
                    <img src="{{ asset('pestkit/img/project 5.jpg') }}" class="img-fluid h-100" alt="img">
                    <a href="" class="fs-4 fw-bold text-center">Pengangkutan Sampah</a>
                </div>
            </div>
            <div class="col-xxl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".7s">
                <div class="project-item">
                    <div class="project-left bg-custom"></div>
                    <div class="project-right bg-custom"></div>
                    <img src="{{ asset('pestkit/img/project 6.jpg') }}" class="img-fluid h-100" alt="img">
                    <a href="" class="fs-4 fw-bold text-center">Penanganan Pohon Tumbang</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Project End -->


<!-- Call To Action Start -->
<div class="container-fluid py-5 call-to-action wow fadeInUp" data-wow-delay=".3s" style="margin: 6rem 0;">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-6">
                <img src="{{ asset('pestkit/img/action.jpg') }}" class="img-fluid w-100 rounded-circle p-5" alt="">
            </div>
            <div class="col-lg-6 my-auto">
                <div class="text-start mt-4">
                    <h1 class="pb-4 text-white">Sampaikan Keluhan Anda Perubahan Dimulai Dari Sekarang</h1>
                </div>
                <form method="post" action="index.html">
                    <div class="form-group">
                        <div class="d-flex call-btn">
                            <button type="submit" class="btn btn-primary border-0 rounded-pill px-5">Mulai</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Call To Action End -->


@endsection
