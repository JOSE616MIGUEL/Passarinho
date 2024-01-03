<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Galery;

class GaleryController extends Controller
{
   
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $galery = Galery::all();
        return view('admin.gallery.index', compact('galery'));
    }

    
    public function create()
    {
        return view('admin.gallery.add');
    }

   
    public function store(Request $request)
    {
        $galery = new Galery();
        $galery->name = $request->post('name');
        $galery->status = $request->post('status') == true ? '1':'0';
        if($request->hasFile('image')){
            $imagen = $request->file('image');
            $url = 'images/galeria/';
            $nombreimagen = time() . '-' . $imagen->getClientOriginalName();
            $uploadSuccess = $request->file('image')->move($url,$nombreimagen);
            $galery->image = $url. $nombreimagen;
        }
        $galery->save();
        return redirect()->back()->with("success", "Agregado con exito!");
    }

   
    public function show(string $id)
    {
        $galery  = Galery::find($id);
        return view('admin.gallery.delete', compact('galery'));
    }

    public function edit(string $id)
    {
        $galery  = Galery::find($id);
        return view('admin.gallery.update', compact('galery'));
    }

    public function update(Request $request, string $id)
    {
        $galery  = Galery::find($id);
        $galery->name = $request->post('name');
        $galery->status = $request->post('status') == true ? '1':'0';
        if($request->hasFile('image')){
            $imagen = $request->file('image');
            $url = 'images/galeria/';
            $nombreimagen = time() . '-' . $imagen->getClientOriginalName();
            $uploadSuccess = $request->file('image')->move($url,$nombreimagen);
            $galery->image = $url. $nombreimagen;
        }
        $galery->save();

        return redirect()->back()->with("success", "Actualizado con exito!");
    }

    public function destroy(string $id)
    {
        $galery  = Galery::find($id);
        $galery->delete();
        return redirect()->route("Galery.index")->with("success", "Eliminado con exito!");
    }
}
