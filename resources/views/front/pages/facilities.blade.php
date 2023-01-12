@extends('layouts.frontapp', ['title' => 'Fasilitas'])

@section('content')
    <section class="header-page" style="background-image:url({{asset('assets/img/slider-3.jpg')}})">
        <div class="container">
            <h1 class="center-text fw-600 lt-2 mb-10">PARTNERS & SUPPORTERS</h1>
        </div>
    </section>
    @include('front.component.profile_menu')
    <section class="pages-content">
        <div class="container">
            <div class="row">
                @foreach($facilities as $q)
                    <div class="col-md-3 col-sm-2 scroll-element js-scroll fade-in-bottom">
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