@extends('layouts.frontapp', ['title' => 'Pendaftaran'])

@section('content')
<section class="header-page-pendaftaran">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h4 class="t-yellow mt-40 fw-600 mt-30">Selamat Datang Generasi Terbaik Masa Depan Umat</h4>
                <br>
                <h2 class="t-white fw-700">DI AL LATHIF ISLAMIC SCHOOL</h2>
                <br>
                <h5 class="t-white">Sekolah Islam Tahfidz Al Quran Bersanad dengan kurikulum Internasional</h5>
                <a href="{{route('home')}}/formdaftar" class="btn btn-light mb-30 mt-30">DAFTAR SEKARANG</a>
            </div>
            <div class="col-md-6">
                <div class="video-border">
                    <iframe width="100%" height="330" src="https://www.youtube.com/embed/zF6SwZ0k0Eg" title="Al Lathif Islamic International School Bandung | www.allathif.sch.id" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-why">
@include('front.component.unggulan')
</section>
@include('front.component.prestasi')
<section class="home-agenda mt-4 mb-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6 home-col-border scroll-element js-scroll slide-left">
                <div id="slide_grade" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item slide-prestasi active">
                        <img src="{{asset('assets/img/33055576268_5b20310992_z.jpg')}}" class="d-block w-100" alt="Al Lathif Islamic Preschool">
                        </div>
                        <div class="carousel-item slide-prestasi">
                        <img src="{{asset('assets/img/allathif-islamic-school-primary-scaled.jpg')}}" class="d-block w-100" alt="Al Lathif Islamic Primary School">
                        </div>
                        <div class="carousel-item slide-prestasi">
                        <img src="{{asset('assets/img/ais_it_lab.jpg')}}" class="d-block w-100" alt="Al Lathif Islamic Secondary School">
                        </div>
                        <div class="carousel-item slide-prestasi">
                        <img src="{{asset('assets/img/allathif-tahfidz-takhasus.jpg')}}" class="d-block w-100" alt="Al Lathif Islamic Secondary School">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#slide_grade" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#slide_grade" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                        
            </div>
            <div class="col-md-6 home-widget-agenda scroll-element js-scroll slide-right">
                <div class="row">
                        <div class="col-sm-6 program-level home-preschool">
                            <a href="{{route('home')}}/preschool">
                                <div class="animated slide-chefs  fadeInRight visible" data-animation="fadeInRight" data-animation-delay="200">
                                    <div class="levelbox">
                                        <div class="leveltitle">
                                        Preschool (TK)<br><span>Usia 3 - 6 Tahun</span>                  
                                        </div>
                                    </div>
                                </div>
                             </a>
                        </div>
                        <div class="col-sm-6 program-level home-primary">
                            <a href="{{route('home')}}/primary-school">
                                <div class="animated slide-chefs  fadeInLeft visible" data-animation="fadeInLeft" data-animation-delay="200">
                                    <div class="levelbox">
                                        <div class="leveltitle">
                                        Primary School (SD) 
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6 program-level home-middle">
                            <a href="{{route('home')}}/secondary-school">
                                <div class="animated slide-chefs  fadeInRight visible" data-animation="fadeInRight" data-animation-delay="200">
                                    <div class="levelbox">
                                        <div class="leveltitle">
                                        Secondary School (SMP-SMA)                    
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-6 program-level home-pesantren">
                            <a href="{{route('home')}}/tahfidz">
                                <div class="animated slide-chefs  fadeInRight visible" data-animation="fadeInRight" data-animation-delay="200">
                                    <div class="levelbox">
                                        <div class="leveltitle">
                                        Program Takhasus<br><span>1 Tahun Hafidz 30 Juz</span>                        
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('front.component.testimony')
<section class="admission-investasi mt-4 scroll-element js-scroll fade-in-top">
    <div class="container">
        <div class="text-center t-white1">
            <h1 class="fw-600">Investas Pendidikan Sangat Terjangkau</h1>
            <h4 class="mt-4 admission-subtitle">Dengan begitu banyak manfaat yang di dapat, Investasi Pendidikan di Al Lathif in sya Allah <span>SANGAT TERJANGKAU</span> </h4>
            <h5 class="mt-4">Berikut investasi di Al Lathif Islamic School:</h5>
        </div>
        <div class="row mt-50">
            <div class="col-md-6 scroll-element js-scroll slide-left">
                <h4 class="widget_title">INVESTASI PRESCHOOL</h4>
                @include('front.component.investasi_preschool')
            </div>
            <div class="col-md-6 scroll-element js-scroll slide-right">
                <h4 class="widget_title">INVESTASI SD,SMP,SMA, & Pesantren</h4>
                @include('front.component.investasi2')
            </div>
        </div>
    </div>
</section>
<section style="background-color: var(--main-grey);" class="pt-100 pb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <h3 class="pendaftaran-beasiswa fw-600">SAYA INGIN SEKOLAH DI AL LATHIF NAMUN <span>TERKENDALA BIAYA.</span></h3>
                <h5 class="mt-30 pendaftaran-beasiswa">Kamu dapat sekolah di Al Lathif Islamic School dengan mengikuti program <a href="">BEASISWA PRESTASI</a>  atau <a href="">BEASISWA TAHFIDZ QUR'AN</a>.</h5>
            </div>
            <div class="col-sm-6">
                <img src="{{asset('assets/img/ais_6.jpg')}}" alt="" class="img-pendaftaran-beasiswa">
            </div>
        </div>
    </div>
</section>
<section class="pb-100 pt-100">
    <div class="container text-center">
        <h2 class="fw-600">Are you ready to improve your competences with us?</h2>
        <h4>Ayo segera bergabung sekarang juga sebelum kehabisan quota</h4>
        @include('front.component.pricing')
    </div>
</section>
@endsection