<?php

namespace App\Http\Controllers;

use App\Models\Murid;
use App\Http\Requests\StoreMuridRequest;
use App\Http\Requests\UpdateMuridRequest;

class muridController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('murid.data')->with([
            'murid' => Murid::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMuridRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Murid $murid)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Murid $murid)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMuridRequest $request, Murid $murid)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Murid $murid)
    {
        //
    }
}
