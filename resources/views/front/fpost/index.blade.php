@extends('layouts.frontapp', ['title' => 'Berita & Artikel'])

@section('content')
<section class="header-page" style="background-image:url({{asset('/assets/img/allathif_news_background.jpg')}});">
    <div class="container">
        <h1 class="center-text fw-600 lt-2 mb-10">BERITA & ARTIKEL</h1>
    </div>
</section>
<section class="postlist">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                @foreach($posts as $post)
                <div class="row">
                    <div class="col-sm-4">
                        <img src="{{asset('/storage/posts/'.$post->image)}}" alt="{{$post->title}}" class="image-blog-list">
                    </div>
                    <div class="col-sm-8 list-page">
                        <h3>{{$post->title}}</h3>
                        <div>{{date('l, d F Y', strtotime($post->updated_at))}}</div>
                        <p>{!! Str::limit($post->description, 200) !!}</p>
                        <a href="{{route('post.post.show',['post'=>$post])}}" class="btn btn-success">Selengkapnya >></a>
                    </div>                
                </div>
                <hr>
                @endforeach
            </div>
            <div class="col-sm-4">
                <section class="side-news-event">
                    <h5 class="sidebar-title">Event Terdekat</h5>
                    @foreach($agendas as $agenda)
                                {{$agenda->title}}
                                <hr>
                    @endforeach
                </section>
            </div>
        </div>
    </div>
</section>


@endsection