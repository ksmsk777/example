@extends('layouts.main')

@section('content')
    <div>
        <h3>This is Bikes page</h3>
        <div class="container">
            <div class="row">

                <div class="col-12 col-sm-1"><a class="btn btn-success mb-4 mt-2"
                                                href="{{route('bike.edit', $bike->id)}}">Edit</a></div>
                <div class="col-12 col-sm-1 mb-4 mt-2">
                    <form action="{{route('bike.delete', $bike->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete" class="btn btn-danger">
                    </form>
                </div>

            </div>
        </div>

        <div>

            <div><h5><span style="font-weight: bold; color: #6574cd">name:  </span>{{$bike->id}}. {{$bike->title}}</h5>
            </div>
            <div><h5><span style="font-weight: bold; color: #6574cd">   Desc:  </span>{{$bike->content}} </h5></div>
            <div><h5><span style="font-weight: bold; color: #6574cd">Power:  </span>{{$bike->power}} hp</h5></div>
        </div>


        <div>
            <a class="btn btn-outline-warning mt-4" href="{{route('bikes.index')}}">Back</a>

        </div>

@endsection
