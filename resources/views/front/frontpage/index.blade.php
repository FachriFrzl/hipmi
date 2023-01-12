@extends('layouts.frontapp', ['title' => 'Home'])

@section('content')

@include('front.component.slider')

<section class="home-visi text-center">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-8 scroll-element js-scroll fade-in-top">
                <h1 class="section-title">VISI HIPMI</h1>
                <h5>Menjadikan HIPMI sebagai organisasi pencetak pengusaha muda dan pembentuk ekosistem wirausaha terbaik di Kota Cimahi melalui program kerja yang tepat inovatif dengan semangat dan marwah organisasi HIPMI</h5>
            </div>
        </div>
    </div>
</section>

<section class="home-about-sec" style="background-image:url({{asset('/assets/img/audiensi.jpg')}});">
    <div class="home-about t-white" >
        <div class="row align-items-center">
            <div class="col-sm-7 home-about-left scroll-element js-scroll slide-left">
                <div class="container">
                    <h5>Tentang Kami</h5>
                    <h2>HIPMI KOTA CIMAHI</h2>
                    <p>Sejak 1976, HIPMI Jaya membina pengusaha muda untuk berjuang, bukan hanya untuk kesuksesan diri dan usahanya, tapi juga untuk bangsa. Organisasi ini berawal dari sekelompok pengusaha yang ingin mencapai cita-cita kemandirian ekonomi bangsa, salah satunya dengan menumbuhkan semangat kewirausahaan di kalangan anak muda. Pembentukan HIPMI diniatkan sebagai wadah yang dapat menampung dan menghimpun aspirasi pengusaha muda Indonesia, juga menjad rumah untuk tumbuh, berkembang, dan berjuang bersama demi kemandirian bangsa.</p>
                    <a href="{{route('home')}}/tentang-kami" class="btn btn-salaam">selengkapnya >></a>
                </div>
            </div>
            <div class="col-sm-5 youtube-popup">
            <!-- Button trigger modal -->
                <a class="btn-wrap" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <div class="play-btn">
                    <div class="play-icon"></div>
                    </div>
                <div class="play-btn-pulse"></div>
                </a>
                <h5 class="watch-video">Watch Our Video</h5>
            <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <iframe id="ais" width="100%" height="100%" src="https://www.youtube-nocookie.com/embed/zF6SwZ0k0Eg" title="YouTube video player" frameborder="5" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; " allowfullscreen></iframe>      
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-why">
    @include('front.component.unggulan')
</section>
@include('front.component.prestasi')
<section class="home-agenda">
    <div class="container">
        <div class="row">
            <div class="col-md-6 home-col-border scroll-element js-scroll slide-left">
                <div class="row row-flex ">
                    <div class="col-sm-6 home-col-text">
                        <h4>Musyawarah Cabang Luar Biasa</h4><hr>
                        <p>musyawarah Cabang Luar Biasa (Muscablub) BPC Himpunan Pengusaha Muda Indonesia (HIPMI) Kota Cimahi</p>
                    </div>
                    <div class="col-sm-6 home-col-img" style="background-image:url({{asset('assets/img/muscab.jpg')}})"></div>
                </div>
                <div class="row row-flex">
                    <div class="col-sm-6 home-col-img" style="background-image:url({{asset('assets/img/audiensi.jpg')}})"></div>
                    <div class="col-sm-6 home-col-text">
                        <h4>Audiensi HIPMI</h4><hr>
                        <p>Audiensi HIPMI Kota Cimahi dengan PLT Walikota Cimahi untuk memajukan perekenomian Cimahi yang lebih menyala</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 home-widget-agenda scroll-element js-scroll slide-right">
                <h4 class="widget_title">Kegiatan HIPMI</h4>
                @foreach ($agendas as $agenda)
                <div class="row agenda-list">
                    <div class="col-3 col-agenda-list-left">
                        <div class="date-left">{{date('d', strtotime($agenda->start_date))}}</div>
                        <div>{{ date('M Y', strtotime($agenda->start_date)) }}</div>
                    </div>
                    <div class="col-9 col-agenda-list-right">
                        <h5><b>{{$agenda->title}}</b></h5>
                        <div class="agendas-time">
                            Mulai: <b>{{date('l, d M Y', strtotime($agenda->start_date))}}</b> pukul <b>{{ date('H.i A', strtotime($agenda->end_time)) }}</b><br>
                            Sampai: <b>{{date('l, d M Y', strtotime($agenda->end_date))}}</b> pukul <b>{{ date('H.i A', strtotime($agenda->end_time)) }}</b><br>
                            Lokasi: <b>{{$agenda->location}}</b>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@include('front.component.testimony')
<section class="home-news text-center">
    <div class="container">
        <h5 class="t-white">Berita & Artikel</h5>
        <h2 class="home-news-title mb-50">HIPMI UPDATE</h2>
        <div class="row col-news">
            @foreach($posts as $post)
            <div class="col-md-3 col-sm-6 box-home-news scroll-element js-scroll fade-in-bottom">
                
                    <img src="{{asset('/storage/posts/'.$post->image)}}" alt="" class="img-news">
                    <p class="mt-15">{{date('l, d F Y', strtotime($post->updated_at))}}</p>
                    <a href="{{route('post.post.show',['post'=>$post])}}"><h5 class="mt-15"><b>{{$post->title}}</b></h5></a>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection