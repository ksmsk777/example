<?php

namespace App\Http\Controllers;

use App\Bike;

use Illuminate\Http\Request;

class BikeController extends Controller
{
    public function index()
    {
        $bikes = Bike::all();

        return view('bike.index', compact('bikes'));

    }

    public function create()
    {
        return view('bike.create');
    }

    public function show(Bike $bike)
    {
        return view('bike.show', compact('bike'));

    }


    public function store()
    {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',
            'power' => 'int',


        ]);
        Bike::create($data);
        return redirect()->route('bikes.index');
    }


    public function update(Bike $bike)
    {


        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',
            'power' => 'int',
        ]);
        $bike->update($data);
        return redirect()->route('post.show', $bike->id);
    }

    public function edit(Bike $bike)
    {
        return view('bike.edit', compact('bike'));

    }

    public function destroy(Bike $bike)
    {
        $bike->delete();
        return redirect()->route('bikes.index');
    }


}
