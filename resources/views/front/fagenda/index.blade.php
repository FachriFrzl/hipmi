@extends('layouts.frontapp', ['title' => 'Agenda List'])

@section('content')
<section class="header-page" style="background-image:url({{asset('/assets/img/allathif_news_background.jpg')}});">
    <div class="container">
        <h1 class="center-text fw-600 lt-2 mb-10">AGENDA</h1>
    </div>
</section>
@include('front.component.profile_menu')
<section class="postlist mb-50">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <h2>Agenda Yang Akan Datang</h2><hr>
                @foreach($agendas as $agenda)
                <div class="row mb-30 scroll-element js-scroll slide-left">
                    <div class="col-sm-4">
                        <img src="{{asset('/storage/agendas/'.$agenda->image)}}" alt="{{$agenda->title}}" class="image-blog-list">
                    </div>
                    <div class="col-sm-8 list-page">
                        <h5><b>{{$agenda->title}}</b></h5>
                        <div class="agendas-time mt-30 mb-30">
                            Mulai: <b>{{date('l, d M Y', strtotime($agenda->start_date))}}</b> pukul <b>{{ date('H.i A', strtotime($agenda->end_time)) }}</b><br>
                            Sampai: <b>{{date('l, d M Y', strtotime($agenda->end_date))}}</b> pukul <b>{{ date('H.i A', strtotime($agenda->end_time)) }}</b><br>
                            Lokasi: <b>{{$agenda->location}}</b>
                        </div>
                        <a href="{{route('agenda.agenda.show',['agenda'=>$agenda])}}" class="btn btn-success">Selengkapnya >></a>
                    </div>                
                </div>
                @endforeach
            </div>
            <div class="col-sm-4">
                <section class="side-news-event scroll-element js-scroll slide-right">
                    <h5 class="sidebar-title">Event Terlewat</h5>
                    <hr>
                    @foreach($agendaolds as $ao)
                        <div class="old-agenda">
                            <h5><b>{{ $ao->title }}</b></h5>
                            Selesai:{{date('d M Y', strtotime($ao->end_date))}}
                        </div>
                        <hr>
                    @endforeach
                    <h5 class="sidebar-title">Berita Terkini</h5>
                    @foreach($posts as $post)
                                {{$post->title}}
                                <hr>
                    @endforeach
                </section>
                
            </div>
        </div>
    </div>
</section>


@endsection