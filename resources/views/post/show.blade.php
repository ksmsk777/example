@extends('layouts.main')

@section('content')
    <div>
        <h3>This is Posts page</h3>
        <div class="container">
            <div class="row">

                <div class="col-12 col-sm-1"><a class="btn btn-success mb-4 mt-2"
                                                href="{{route('post.edit', $post->id)}}">Edit</a></div>
                <div class="col-12 col-sm-1 mb-4 mt-2">
                    <form action="{{route('post.delete', $post->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete" class="btn btn-danger">
                    </form>
                </div>

                {{-- <div><a class="btn btn-warning mb-4 mt-2" href="{{route('post.delete', $post->id)}}">Delete</a></div>--}}
            </div>
        </div>
    </div>
    <div>

        <div>{{$post->id}}. {{$post->title}}</div>
        <div>{{$post->content}} </div>

    </div>




    <div>
        <a class="btn btn-outline-warning mt-4" href="{{route('post.index')}}">Back</a>

    </div>

@endsection
