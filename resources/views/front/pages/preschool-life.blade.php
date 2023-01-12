@extends('layouts.frontapp', ['title' => 'Kehidupan Sekolah Preschool (TK/RA)'])

@section('content')
    <section class="header-page" style="background-image:url({{asset('assets/img/33055576268_5b20310992_z.jpg')}})">
        <div class="container">
            <h1 class="center-text fw-600 lt-2 mb-10">KEHIDUPAN SEKOLAH PRESCHOOL (TK)</h1>
        </div>
    </section>
    <section class="pages-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <h2 class="text-center fw-600">Gambaran Kegiatan Harian</h2>
                    <h4 class="text-center">Al Lathif Islamic Preschool</h4>
                    <img src="{{asset('assets/img/ais-preschool-school-life.jpg')}}" alt="" class="scroll-element js-scroll fade-in-bottom">
                </div>
                <div class="col-sm-3">
                    @include('front.component.program_menu')
                </div>                
            </div>
        </div>
        
            
    </section>
<section>

@endsection