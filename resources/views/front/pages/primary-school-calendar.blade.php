@extends('layouts.frontapp', ['title' => 'Kalender Akademik Primary School (SD/MI)'])

@section('content')
    <section class="header-page" style="background-image:url({{asset('assets/img/ais-primary-top.jpg')}})">
        <div class="container">
            <h1 class="center-text fw-600 lt-2 mb-10">KALENDER AKADEMIK SD</h1>
        </div>
    </section>
    <section class="pages-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                
                </div>
                <div class="col-sm-3">
                    @include('front.component.program_menu')
                </div>
                
            </div>
            
        </div>
    </section>

@endsection