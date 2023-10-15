<?php
namespace App\Http\Controllers;

use App\Models\OfertaTuristica;
use App\Models\Region;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        // $ofertas_turisticas = OfertaTuristica::all();
        $regiones = Region::all();
        return view('home', ['regiones' => $regiones]);
        // return view('tourist_offers', ['ofertas_turisticas' => $ofertas_turisticas]);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
