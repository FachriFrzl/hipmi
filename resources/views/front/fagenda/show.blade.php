@extends('layouts.frontapp', ['title' => $agenda->title])

@section('content')
<section class="header-page" style="background-image:url({{asset('/assets/img/allathif_news_background.jpg')}});">
    <div class="container">
        <h1 class="center-text fw-600 lt-2 mb-10">AGENDA YANG AKAN DATANG</h1>
    </div>
</section>
<section>
    <div class="container  mt-100">
        <div class="row ">
            <div class="col-sm-8">
                <h3 class="py-20 ml-20 font-bold mb-30">{{$agenda->title}}</h3>
                <div class="row agenda-block mb-30">
                    <div class="col-sm-6">
                        <h5>Mulai:</h5>
                        <p><b>{{date('l, d F Y', strtotime($agenda->start_date))}}<br>
                            {{ date('H.i A', strtotime($agenda->start_time)) }}</b></p>
                    </div>
                    <div class="col-sm-6">
                        <h5>Selesai:</h5>
                        <p><b>{{date('l, d F Y', strtotime($agenda->end_date))}}<br>
                        {{ date('H.i A', strtotime($agenda->end_time)) }}</b></p>
                    </div>
                    <p>Lokasi:<br> <b>{{ $agenda->location }}</b></p>
                </div>
                <img src="{{asset('storage/agendas/'.$agenda->image)}}" class="post-detail-image" alt="{{$agenda->title}}">
                <div class="mt-10 mb-20">
                    {!!$agenda->content!!}
                </div>
            </div>
            <div class="col-sm-4">
                @include('front.component.side_news_event')
            </div>
        </div>
    </div>
</section>




@endsection