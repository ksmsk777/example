@extends('layouts.main')

@section('content')
    <div>
        <h3>This is Posts page</h3>

    </div>

    <div><a class="btn btn-secondary mt-2" href="{{route('post.create')}}">Create one</a></div>
    <hr>
    <div>
    @foreach($posts as $post)
    <div><a  href="{{route('post.show', $post->id)}}"> {{$post->id}}. {{$post->title}}</a></div>
        @endforeach
    </div>


@endsection
