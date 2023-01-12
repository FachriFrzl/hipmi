@extends('layouts.frontapp', ['title' => 'Testimony'])

@section('content')
    <section class="header-page" style="background-image:url({{asset('assets/img/kata_mereka_tentang_AIS.jpg')}})">
        <div class="container">
            <h1 class="center-text fw-600 lt-2 mb-10">KATA MEREKA</h1>
        </div>
    </section>
    @include('front.component.profile_menu')
    <section class="pages-content">
        <div class="container">
            @foreach($testimonies as $q)
            <div class="row mb-50">
                
                <div class="col-sm-4">
                    <img src="{{asset('/storage/testimonies/'.$q->image)}}" alt="{{$q->name}}" class="img-testimony">
                </div>
                <div class="col-sm-8">
                    <h4><b>{{$q->name}}</b></h4>
                    <p>{{$q->title}}</p>
                    <p class="mt-20">{!! $q->content !!}</p>
                </div>
                
            </div>
            @endforeach
        </div>
    </section>

@endsection