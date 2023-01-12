@extends('layouts.frontapp', ['title' => 'Akreditasi'])

@section('content')
    <section class="header-page" style="background-image:url({{asset('assets/img/ais_acreditation.jpg')}})">
        <div class="container">
            <h1 class="center-text fw-600 lt-2 mb-10">AKREDITASI DAN KERJASAMA</h1>
        </div>
    </section>
    @include('front.component.profile_menu')
    <section class="pages-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-6"><img src="{{asset('assets/img/al-lathif-islamic-school-1-4-1.jpg')}}" alt=""></div>
                <div class="col-sm-6"><img src="{{asset('assets/img/al-lathif-dar-al-qran-palestine-1.jpg')}}" alt=""></div>
            </div>
        </div>
    </section>

@endsection