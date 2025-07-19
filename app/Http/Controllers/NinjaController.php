<?php

namespace App\Http\Controllers;

use App\Models\Ninja;
use App\Models\Dojo;
use Illuminate\Http\Request;

class NinjaController extends Controller
{
    public function index()
    {
        // route --> /ninjas/
        $ninjas = Ninja::with('dojo')->orderBy('created_at', 'desc')->paginate(10);

        // fetch all records from DB and pass to view
        return view('ninjas.index', ["ninjas" => $ninjas]);
    }

    public function show($id)
    {
        $ninja = Ninja::with('dojo')->findOrFail($id);
        // route --> /ninjas/{id}
        // fetch single record from DB and pass to view
         return view('ninjas.show', ["ninja" => $ninja]);
    }

    public function create()
    {
        $dojos = Dojo::all();
        // route --> /ninjas/create
        // render a create view (with web form) to users
        return view('ninjas.create', ['dojos' => $dojos]);
    }

    public function store(Request $request)
    {
        // route --> /ninjas (POST)
        // create new record in DB
        $validatedData = $request->validate([
            'name'    => 'required|string|max:255',
            'skill'   => 'required|integer|min:0|max:100',
            'bio'     => 'required|string|min:20|max:255',
            'dojo_id' => 'required|exists:dojos,id',
        ]);

        Ninja::create($validatedData);
        return redirect()->route('ninjas.index');
    }

    public function destroy($id)
    {
        // route --> /ninjas/{id} (DELETE)
        // delete record from DB
        $ninja = Ninja::findOrFail($id);
        $ninja->delete();

        return redirect()->route('ninjas.index');
    }

}
