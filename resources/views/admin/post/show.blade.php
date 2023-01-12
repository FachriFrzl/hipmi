@extends('layouts.app', ['title' => $post->title])

@section('content')
<div class="container">
    <h2 class="py-20 ml-20">{{$post->title}}</h2>

    <figure class="figure">
    <img src="{{asset('storage/posts/'.$post->image)}}" class="figure-img img-fluid rounded" alt="...">
    </figure>

</div>

<h2><b></b></h2>

{!!$post->content!!}


@endsection