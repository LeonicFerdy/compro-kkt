@extends('layouts.template')

@section('main')
<div class="container">
    <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
            <h1 data-aos="fade-up">We offer modern solutions for growing your business</h1>
            <h2 data-aos="fade-up" data-aos-delay="400">We are team of talented designers making websites with Bootstrap</h2>
            <div data-aos="fade-up" data-aos-delay="600">
                <div class="text-center text-lg-start">
                    <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                        <span>Halaman Berita</span>
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
            <img src="{{asset('/tema/img/hero-img.png')}}" class="img-fluid" alt="">
        </div>
    </div>
</div>
@endsection