<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tour;


class NuestrostourController extends Controller
{

    public function index()
    {
        $tour = Tour::all();
        return view('nuestrostours', compact('tour'));
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

 
    public function show(string $id)
    {
        //
    }

   
    public function detailstour(string $id)
    {
        $tour = Tour::all();
        $tourdetails  = Tour::find($id);
        return view('descripciontour', compact('tour','tourdetails'));
    }

    public function update(Request $request, string $id)
    {
        //
    }

 
    public function destroy(string $id)
    {
        //
    }
}
