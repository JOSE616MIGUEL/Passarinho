<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tour;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $tour = Tour::all();
        return view('home', compact('tour'));
    }

    public function configuracionperfil(string $id)
    {
        $tour = Tour::all();
        $user  = User::find($id);
        return view('configuracionperfil', compact('user','tour'));
    }
    public function configuracionperfilupdate(Request $request, string $id)
    {
        $user  = User::find($id);
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|min:8',
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
}

