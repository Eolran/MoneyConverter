<?php

namespace App\Http\Controllers;

use App\Models\Pairs;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePairsRequest;
use App\Http\Requests\UpdatePairsRequest;

class PairsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StorePairsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Pairs $pairs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pairs $pairs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePairsRequest $request, Pairs $pairs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pairs $pairs)
    {
        //
    }
}
