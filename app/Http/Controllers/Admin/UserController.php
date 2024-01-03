<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
   
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
    }

   
    public function create()
    {
        return view('admin.user.add');
    }

  
    public function store(Request $request)
    {
        $user = new User();
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|min:8',
            'role_as' => 'required',
            'image' => 'required',
        ]);
        $user->name = $request->post('name');
        $user->email = $request->post('email');
        $user->password = Bcrypt($request->post('password'));
        $user->role_as = $request->post('role_as');
        if($request->hasFile('image')){
            $imagen = $request->file('image');
            $url = 'images/user/';
            $nombreimagen = time() . '-' . $imagen->getClientOriginalName();
            $uploadSuccess = $request->file('image')->move($url,$nombreimagen);
            $user->image = $url. $nombreimagen;
        }
        $user->save();
        return redirect()->back()->with("success", "Agregado con exito!");
    }

   
    public function show(string $id)
    {
        $user  = User::find($id);
        return view('admin.user.delete', compact('user'));
    }

    public function edit(string $id)
    {
        $user  = User::find($id);
        return view('admin.user.update', compact('user'));
    }

    public function update(Request $request, string $id)
    {
        $user  = User::find($id);
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|min:8',
            'role_as' => 'required',
        ]);
        $user->name = $request->post('name');
        $user->email = $request->post('email');
        $user->password = Bcrypt($request->post('password'));
        $user->role_as = $request->post('role_as');
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

   
    public function destroy(string $id)
    {
        $user  = User::find($id);
        $user->delete();
        return redirect()->route("Dashboard.index")->with("success", "Eliminado con exito!");
    }
}
