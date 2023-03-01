@extends('layouts.main')

@section('content')
    <div>
        <h3>This is Create Post page</h3>
    </div>

    <form action="{{route('post.store')}}" method="post">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input name="title" type="text" class="form-control" id="title" placeholder="Title" >
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
             <textarea name="content" class="form-control" id="content" placeholder="Content" >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, aliquid debitis deleniti doloremque dolorum, enim iure molestias nihil nulla, officiis placeat voluptate</textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input name="image" type="text" class="form-control" id="image" placeholder="Image" >
        </div>
        <div class="row">

    <div class="col-6 col-sm-1 mt-4">    <button type="submit" class="btn btn-primary">Create</button></div>
        <div class="col-6 col-sm-1">
            <a class="btn btn-warning mt-4" href="{{route('post.index')}}">Back</a>

        </div>
</div>
    </form>



@endsection
