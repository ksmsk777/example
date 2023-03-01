@extends('layouts.main')

@section('content')
    <div>
        <h3>This is Edite Post page</h3>
    </div>

    <form action="{{route('bike.update', $bike->id)}}" method="post">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input name="title" type="text" class="form-control" id="title" placeholder="Title"
                   VALUE="{{$bike->title}}">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea name="content" class="form-control" id="content"
                      placeholder="Content"> {{$bike->content}}</textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input name="image" type="text" class="form-control" id="image" placeholder="Image"
                   VALUE="{{$bike->image}}">
        </div>
        <div class="mb-3">
            <label for="power" class="form-label">Power</label>
            <input name="power" type="text" class="form-control" id="power" placeholder="Image"
                   VALUE="{{$bike->power}}">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a class="btn btn-info" href="{{route('bike.show', $bike->id)}}">Back</a>
    </form>

@endsection
