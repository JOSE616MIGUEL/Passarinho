<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sale;
use App\Models\tour;
use App\Models\User;


class SaleController extends Controller
{
   
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $sale = Sale::all();
        return view('admin.sale.index', compact('sale'));
    }

  
    public function create()
    {
        $user = User::all();
        $tour = Tour::all();
        return view('admin.sale.add', compact('tour','user'));
    }
   
    public function store(Request $request)
    {
        $sale = new Sale();
        $sale->price_total = $request->post('price_total');
        $sale->users_id = $request->post('users_id');
        $sale->tours_id = $request->post('tours_id');
        $sale->save();

        return redirect()->back()->with("success", "Agregado con exito!");
    }

    public function show(string $id)
    {
        $sale  = Sale::find($id);
        return view('admin.sale.delete', compact('sale'));
    }

    public function edit(string $id)
    {
        $sale  = Sale::find($id);
        $user = User::all();
        $tour = Tour::all();
        return view('admin.sale.update', compact('sale','user','tour'));
    }

    public function update(Request $request, string $id)
    {
        $sale  = Sale::find($id);
        $sale->price_total = $request->post('price_total');
        $sale->cant_cliente = $request->post('cant_cliente');
        $sale->tours_id = $request->post('tours_id');
        $sale->users_id = $request->post('users_id');
        $sale->save();

        return redirect()->back()->with("success", "Actualizado con exito!");
    }

    public function destroy(string $id)
    {
        $sale  = Sale::find($id);
        $sale->delete();
        return redirect()->route("Sale.index")->with("success", "Eliminado con exito!");
    }

    public function print(string $id)
    {
        $sale  = Sale::find($id);
        return view('admin.sale.printsale', compact('sale'));
    }
}
