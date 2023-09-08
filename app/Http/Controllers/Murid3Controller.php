<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreMuridRequest;
use App\Http\Requests\UpdateMuridRequest;

class MuridController extends Controller
{
    public function index()
    {
        return view('murid.data')->with([
            'murid' => Murid::all()
        ]);
    }

    public function create()
    {
        //
    }

    public function store(StoreMuridRequest $request)
    {
        //
    }

    public function show(Murid $murid)
    {
        //
    }

    public function edit(Murid $murid)
    {
        //
    }

    public function update(UpdateMuridRequest $request, Murid $murid)
    {
        //
    }

    public function destroy(Murid $murid)
    {
        //
    }
}
