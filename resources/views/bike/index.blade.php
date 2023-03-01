@extends('layouts.main')

@section('content')
    <div>
        <h3>This is Bikes page</h3>

    </div>

  <div><a class="btn btn-secondary mt-2" href="{{route('bike.create')}}">Create one</a></div>
    <hr>
    <div>
    @foreach($bikes as $bike)
    <div><a  href="{{route('bike.show', $bike->id)}}"> {{$bike->id}}. {{$bike->title}}</a></div>
        @endforeach
    </div>


@endsection
