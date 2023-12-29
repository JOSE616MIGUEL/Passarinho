<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tour;

class TourController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $tour = Tour::all();
        return view('admin.tour.index', compact('tour'));
    }

    public function create()
    {
        return view('admin.tour.add');
    }

    public function store(Request $request)
    {
        $tour = new Tour();
        $tour->code = $request->post('code');
        $tour->name = $request->post('name');
        $tour->price = $request->post('price');
        $tour->status = $request->post('status') == true ? '1':'0';
        $tour->itinerary = $request->post('itinerary');
        $tour->description = $request->post('description');
        if($request->hasFile('image')){
            $imagen = $request->file('image');
            $url = 'images/tours/';
            $nombreimagen = time() . '-' . $imagen->getClientOriginalName();
            $uploadSuccess = $request->file('image')->move($url,$nombreimagen);
            $tour->image = $url. $nombreimagen;
        }
        $tour->save();

        return redirect()->back()->with("success", "Agregado con exito!");
    }

  
    public function show(string $id)
    {
        $tour  = Tour::find($id);
        return view('admin.tour.delete', compact('tour'));
    }

    public function edit(string $id)
    {
        $tour  = Tour::find($id);
        return view('admin.tour.update', compact('tour'));
    }

    public function update(Request $request, string $id)
    {
        $tour  = Tour::find($id);
        $tour->code = $request->post('code');
        $tour->name = $request->post('name');
        $tour->price = $request->post('price');
        $tour->status = $request->post('status') == true ? '1':'0';
        $tour->itinerary = $request->post('itinerary');
        $tour->description = $request->post('description');
        if($request->hasFile('image')){
            $imagen = $request->file('image');
            $url = 'images/tours/';
            $nombreimagen = time() . '-' . $imagen->getClientOriginalName();
            $uploadSuccess = $request->file('image')->move($url,$nombreimagen);
            $tour->image = $url. $nombreimagen;
        }
        $tour->save();

        return redirect()->back()->with("success", "Actualizado con exito!");
    }

    public function destroy(string $id)
    {
        $tour  = Tour::find($id);
        $tour->delete();
        return redirect()->route("Tour.index")->with("success", "Eliminado con exito!");
    }
}
