<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCurrencyRequest;
use App\Http\Requests\UpdateCurrencyRequest;
use Illuminate\Support\Facades\DB;
use Response;

class CurrencyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function getAll($list)
    {
        
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
    public function store(StoreCurrencyRequest $request)
    {
        $formData = json_decode($request->getContent());
        DB::table('currencies')->insert([
            'name' => $formData->name,
            'currency' => $formData->code,
        ]);
        return response("Ajout réussi");
    }

    /**
     * Display the specified resource.
     */
    public function show(Currency $currency)
    {
        return Response::json(Currency::all());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Currency $currency)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCurrencyRequest $request, Currency $currency)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Currency::find($id) -> delete();
        return response("Delete réussi");
    }
}
