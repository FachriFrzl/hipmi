@extends('layouts.frontapp', ['title' => 'Prestasi'])

@section('content')
<section class="header-page" style="background-image:url({{asset('assets/img/ais-achievement.jpg')}})">
    <div class="container">
        <h1 class="center-text fw-600 lt-2 mb-10">PRESTASI</h1>
    </div>
</section>
@include('front.component.profile_menu')
@include('front.component.prestasi')

<!-- <section class="postlist">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                @foreach($prestasis as $prestasi)
                <h3>{{$prestasi->title}}</h3>
                <p>{{$prestasi->name}}</p>
                @endforeach
            </div>
            <div class="col-sm-6">
                <div class="row">
                    @foreach($prestasiimage as $q)
                     <div class="col-sm-4">
                        <img src="{{asset('/storage/prestasis/'.$q->image)}}" alt="{{$q->title}}" class="img-prestasi">
                     </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section> -->


@endsection