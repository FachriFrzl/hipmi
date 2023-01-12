@extends('layouts.frontapp', ['title' => $post->title])

@section('content')
<section class="header-page" style="background-image:url({{asset('/assets/img/allathif_news_background.jpg')}});">
    <div class="container">
        <h1 class="center-text fw-600 lt-2 mb-10">BERITA & ARTIKEL</h1>
    </div>
</section>
<section>
    <div class="container mt-100">
        <div class="row">
            <div class="col-sm-8">
                <div class="title-post-show text-center">
                    <h3 class="py-20 ml-20 font-bold">{{$post->title}}</h3>
                    <p>{{date('l, d F Y', strtotime($post->updated_at))}}</p>
                </div>
                

                <figure class="figure">
                <img src="{{asset('storage/posts/'.$post->image)}}" class="post-detail-image" alt="{{$post->title}}">
                <div class="mt-5">
                    {!!$post->content!!}
                </div>
                </figure>

            </div>
            <div class="col-sm-4">
            @include('front.component.side_news_event')
            </div>
        </div>
    </div>
</section>




@endsection