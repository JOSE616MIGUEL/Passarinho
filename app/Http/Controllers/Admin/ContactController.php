<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;


class ContactController extends Controller
{
 

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $contact = Contact::all();
        return view('admin.contact.index', compact('contact'));
    }


    public function create()
    {
        return view('admin.contact.add');

    }


    public function store(Request $request)
    {
        $contact = new Contact();
        $contact->name = $request->post('name');
        $contact->email = $request->post('email');
        $contact->fono = $request->post('fono');
        $contact->cant_client = $request->post('cant_client');
        $contact->cant_children = $request->post('cant_children');
        $contact->message = $request->post('message');
        $contact->save();
        return redirect()->back()->with("success", "Agregado con exito!");
    }

    public function show(string $id)
    {
        $contact  = Contact::find($id);
        return view('admin.contact.delete', compact('contact'));
    }

    public function edit(string $id)
    {
        $contact  = Contact::find($id);
        return view('admin.contact.update', compact('contact'));
    }

    public function update(Request $request, string $id)
    {
        $contact  = Contact::find($id);
        $contact->name = $request->post('name');
        $contact->email = $request->post('email');
        $contact->fono = $request->post('fono');
        $contact->cant_client = $request->post('cant_client');
        $contact->cant_children = $request->post('cant_children');
        $contact->message = $request->post('message');
        $contact->save();

        return redirect()->back()->with("success", "Actualizado con exito!");
    }

    public function destroy(string $id)
    {
        $contact  = Contact::find($id);
        $contact->delete();
        return redirect()->route("Contact.index")->with("success", "Eliminado con exito!");
    }
}
