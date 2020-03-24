@extends('layouts.app')
@section('content')

    <div class="container">
        @foreach($posts as $post)
        <div class="row py-2" style="border-bottom: 2px solid black">
            <div class="col-5">
                <h1>{{$post->title}}</h1>
                <div class="lead">{{$post->author}}</div>
            </div>
            <div class="col-7">{{$post->description}}</div>
        </div>
        @endforeach
    </div>

@endsection
