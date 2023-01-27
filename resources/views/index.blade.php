@extends('layout.main')

@section('hero')
<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-up">Cloud Hosting Dengan Pelayanan Terbaik</h1>
                <h2 data-aos="fade-up" data-aos-delay="400">Cloud Hosting Indonesia dengan Resource Terbaik dan Promo Menarik</h2>
                <div data-aos="fade-up" data-aos-delay="600"><br>
                <span>
                    <img src="{{url('assets/img/sertif.png')}}" class="img-fluid" alt="" width="50">
                    <img src="{{url('assets/img/sertif1.svg')}}" class="img-fluid" alt="" width="50">
                    <img src="{{url('assets/img/sertif2.svg')}}" class="img-fluid" alt="" width="50">
                    <img src="{{url('assets/img/sertif3.png')}}" class="img-fluid" alt="" width="50">
                    <img src="{{url('assets/img/sertif4.png')}}" class="img-fluid" alt="" width="50">
                </span>
                    <div class="text-center text-lg-start">
                        <a href="#pricing" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                            <span>Cek Disini</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                <img src="{{url('assets/img/internet-cepat.png')}}" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</section><!-- End Hero -->
@endsection