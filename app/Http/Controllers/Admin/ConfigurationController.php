<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


class ConfigurationController extends Controller
{
   
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(string $id)
    {
        $user  = User::find($id);
        return view('admin.configuration.index', compact('user'));
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

   
    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        $user  = User::find($id);
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|min:8'
        ]);
        $user->name = $request->post('name');
        $user->email = $request->post('email');
        $user->password = Bcrypt($request->post('password'));
        if($request->hasFile('image')){
            $imagen = $request->file('image');
            $url = 'images/user/';
            $nombreimagen = time() . '-' . $imagen->getClientOriginalName();
            $uploadSuccess = $request->file('image')->move($url,$nombreimagen);
            $user->image = $url. $nombreimagen;
        }
        $user->save();

        return redirect()->back()->with("success", "Actualizado con exito!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
