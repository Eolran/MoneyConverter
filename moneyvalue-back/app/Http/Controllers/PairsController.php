<?php

namespace App\Http\Controllers;

use App\Models\Pairs;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePairsRequest;
use App\Http\Requests\UpdatePairsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Response;

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
        $formData = json_decode($request->getContent());
        DB::table('pairs')->insert([
            'from' => $formData->from,
            'to' => $formData->to,
            'rate' => $formData->rate
        ]);
        // return response("Ajout réussi");
    }

    /**
     * Display the specified resource.
     */
    public function show(Pairs $pairs)
    {
        return Response::json(Pairs::all());
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
    public function update($id, Request $request)
    {
        $formData = json_decode($request->getContent());
        DB::table('pairs')->where('id', $id) -> update([
            "rate" => $formData->rate
        ]);
        return response("Update réussi");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Pairs::find($id) -> delete();
        return response("Delete réussi");
    }
}
