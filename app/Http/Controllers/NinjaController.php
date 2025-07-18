<?php

namespace App\Http\Controllers;

use App\Models\Ninja;
use Illuminate\Http\Request;

class NinjaController extends Controller
{
    public function index()
    {
        // route --> /ninjas/
        $ninjas = Ninja::orderBy('created_at', 'desc')->get();

        // fetch all records from DB and pass to view
        return view('ninjas.index', ["ninjas" => $ninjas]);
    }

    public function show($id)
    {
        $ninja = Ninja::findOrFail($id);
        // route --> /ninjas/{id}
        // fetch single record from DB and pass to view
         return view('ninjas.show', ["ninja" => $ninja]);
    }

    public function create()
    {
        // route --> /ninjas/create
        // render a create view (with web form) to users
        return view('ninjas.create');
    }

    public function store()
    {
        // route --> /ninjas (POST)
        // create new record in DB
    }


}
