<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Place;

class PlaceController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $place = Place::all();
        return view('admin.place.index', compact('place'));
    }


    public function create()
    {
        return view('admin.place.add');

    }

   
    public function store(Request $request)
    {
        $place = new Place();
        $place->name = $request->post('name');
        $place->status = $request->post('status') == true ? '1':'0';
        if($request->hasFile('image')){
            $imagen = $request->file('image');
            $url = 'images/destinos/';
            $nombreimagen = time() . '-' . $imagen->getClientOriginalName();
            $uploadSuccess = $request->file('image')->move($url,$nombreimagen);
            $place->image = $url. $nombreimagen;
        }
        $place->save();
        return redirect()->back()->with("success", "Agregado con exito!");
    }

    public function show(string $id)
    {
        $place  = Place::find($id);
        return view('admin.place.delete', compact('place'));
    }

 
    public function edit(string $id)
    {
        $place  = Place::find($id);
        return view('admin.place.update', compact('place'));
    }

    public function update(Request $request, string $id)
    {
        $place  = Place::find($id);
        $place->name = $request->post('name');
        $place->status = $request->post('status') == true ? '1':'0';
        if($request->hasFile('image')){
            $imagen = $request->file('image');
            $url = 'images/tours/';
            $nombreimagen = time() . '-' . $imagen->getClientOriginalName();
            $uploadSuccess = $request->file('image')->move($url,$nombreimagen);
            $place->image = $url. $nombreimagen;
        }
        $place->save();

        return redirect()->back()->with("success", "Actualizado con exito!");
    }


    public function destroy(string $id)
    {
        $place  = Place::find($id);
        $place->delete();
        return redirect()->route("Place.index")->with("success", "Eliminado con exito!");
    }
}
