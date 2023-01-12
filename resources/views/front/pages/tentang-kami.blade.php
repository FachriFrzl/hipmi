@extends('layouts.frontapp', ['title' => 'Tentang HIPMI Kota Cimahi'])

@section('content')
<section class="header-page" style="background-image:url({{asset('assets/img/slider-2.jpg')}})">
    <div class="container">
        <h1 class="center-text fw-600 lt-2 mb-10">TENTANG HIPMI</h1>
    </div>
</section>
@include('front.component.profile_menu')
<section class="home-agenda mt-50 mb-50 ">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 scroll-element js-scroll slide-left">
                <img src="{{asset('assets/img/tentang-kami.jpg')}}" alt="" class="img-fit">
            </div>
            @foreach($about as $item)
            <div class="col-md-6 home-widget-agenda scroll-element js-scroll slide-right">
                <p>{{$item -> deskripsi}}</p>
                <p>{{$item -> deskripsi_lanjutan}}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>
<section class="philosophy scroll-element js-scroll fade-in-bottom" style="background-image:url({{asset('assets/img/bg-motto.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-sm-7">
                <h2 class="fw-600">MOTTO</h2>
                <h4>HIPMI Kota Cimahi</h4>
                <h5 class="mt-50 fw-700">HIPMI memiliki motto Pengusaha Pejuang-Pejuang Pengusaha yang bermakna bahwa kader-kader HIPMI tidak saja diharapkan menjadi pengusaha nasional yang tangguh tetapi juga menjadi pengusaha yang berwawasan kebangsaan dan memiliki kepedulian terhadap tuntutan nurani rakyat.</h5>
                <br>
                <p>- HIPMI</p>
            </div>
        </div>
    </div>
</section>
<section class="mt-10 mb-5">
    <div class="row align-items-center">
        <div class="col-sm-5 scroll-element js-scroll slide-left">
            <img src="{{asset('assets/img/visi-hipmic.png')}}" alt="">
        </div>
        <div class="col-sm-6 scroll-element js-scroll slide-right">
            <h1 class="section-title">VISI HIPMI</h1>
            <hr class="under_title">
            <h4 class="mt-20">Menjadikan HIPMI Jaya sebagai organisasi pencetak pengusaha muda dan pembentuk ekosistem wirausaha terbaik di Kota Cimahi melalui program kerja yang tepat inovatif dengan semangat dan marwah organisasi HIPMI Jaya</h4>
        </div>
    </div>
</section>
<section class="mt-5 mb-10">
    <div class="row align-items-center justify-content-end">
        <div class="col-sm-6 scroll-element js-scroll slide-left">
            <h1 class="section-title">MISI HIPMI</h1>
            <hr class="under_title">
            <ul>
                <li>1. Bangun koneksi dan kolaborasi dengan semangat inovasi dan optimalisasi</li>
                <li>2. Pengembangan ilmu dan kompetensi untuk anggota</li>
                <li>3. Membantu solusi modal dan akses pasar untuk anggota</li>
                <li>4. Menyebarkan semangat kewirausahaan di Kota Cimahi</li>

            </ul>
        </div>
        <div class="col-sm-5 scroll-element js-scroll slide-right">
            <img src="{{asset('assets/img/misi-hipmic.png')}}" alt="">
        </div>
    </div>
</section>

@endsection