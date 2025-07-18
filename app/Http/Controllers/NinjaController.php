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

    public function store()
    {
        // route --> /ninjas (POST)
        // create new record in DB
    }

    public function destyroy($id)
    {
        // route --> /ninjas/{id} (DELETE)
        // delete record from DB
    }

}
