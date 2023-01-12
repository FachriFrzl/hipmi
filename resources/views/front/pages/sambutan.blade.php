@extends('layouts.frontapp', ['title' => 'Sambutan Direktur'])

@section('content')
    <section class="header-page" style="background-image:url({{asset('assets/img/slider-1.jpg')}})">
        <div class="container">
            <h1 class="center-text fw-600 lt-2 mb-10">WHAT WE DO</h1>
        </div>
    </section>
    @include('front.component.profile_menu')
    <section class="pages-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 text-center scroll-element js-scroll slide-left">
                    <img src="{{asset('assets/img/ketua-hipmi.jpg')}}" alt="M. Firaldi Akbar ketua HIPMI Kota Cimahi"><br>
                    <h5"><b><u>M. Firaldi Akbar</u></b></h5>
                    <div>Ketua HIPMI Kota Cimahi</div>
                </div>
                <div class="col-sm-9 scroll-element js-scroll slide-right">
                    <p>Organisasi HIPMI (Himpunan Pengusaha Muda Indonesia) merupakan wadah bagi para pengusaha muda Indonesia yang ingin terlibat dalam pengembangan bisnis dan karirnya.</p>
                    <p>Kami menyediakan berbagai fasilitas dan pelatihan untuk membantu pengusaha muda meningkatkan kemampuan dan keterampilan mereka.</p>
                    <p>Selain itu, kami juga menyelenggarakan berbagai acara dan program yang bertujuan untuk mempromosikan usaha pengusaha muda di Indonesia.</p>
                    <p>Kami percaya bahwa dengan membantu pengusaha muda mengembangkan bisnis mereka, kami dapat berkontribusi terhadap peningkatan ekonomi Indonesia.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="pages-content">
        <div class="container">
            <div class="row">
                @foreach($metodology as $m)
                    <div class="col-md-3 col-sm-2 scroll-element js-scroll fade-in-bottom">
                        <center>
                            <img src="{{asset('/storage/metodologies/'.$m->image)}}" alt="">
                            <h5 class="mt-10"><b>{{$m->title}}</b></h5>
                            <p>{!! $m->description !!}</p>
                        </center>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="pages-content">
        <div class="container">
            <div class="row">
                <h2 class="section-title-center">OUR PARTNERSHIP</h2>
                @foreach($facilities as $q)
                    <div class="col-md-4 col-sm-2 scroll-element js-scroll fade-in-bottom">
                        <center>
                            <img src="{{asset('/storage/facilities/'.$q->image)}}" alt="">
                            <h5 class="mt-10"><b>{{$q->title}}</b></h5>
                            <p>{!! $q->description !!}</p>
                        </center>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection