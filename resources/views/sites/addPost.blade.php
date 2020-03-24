@extends('layouts.app')
@section('content')
    <div class="container">
        <form method="post" action="{{route('sites.savePost')}}">
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
            <input type="hidden" name="author" value="{{ Auth::user()->name }}"/>
            <div class="form-group">
                <input type="text" name="title" placeholder="Title"/>
            </div>
            <div class="form-group">
                <textarea name="description" placeholder="Description"></textarea>
            </div>
            <input type="submit" class="btn btn-primary" value="Add post"/>
        </form>
    </div>
@endsection
