<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Carrito;
use App\Models\OfertaTuristica;
use App\Models\Region;
use App\Models\LugarTuristico;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $regiones = Region::all();
        $ofertas_turisticas = OfertaTuristica::take(8)->get();
        return view('home', ['regiones' => $regiones, 'ofertas_turisticas' => $ofertas_turisticas]);
    }

    public function region_detail($region)
    {
        // obtain a tourist site of a specific region
        $region = Region::find($region);
        $lugaresTuristicos = $region->lugaresTuristicos;
        $regionId = $region->id;
        $ofertasTuristicas = OfertaTuristica::whereHas('lugarTuristico', function ($query) use ($regionId) {
            $query->where('region_id', $regionId);
        })->get();

        return view('region_detail', ['region' => $region, 'lugares_turisticos' => $lugaresTuristicos, 'ofertas_turisticas' => $ofertasTuristicas]);
    }

    public function tourist_sites()
    {
        $lugares_turisticos = LugarTuristico::all();
        return view('tourist_sites', ['lugares_turisticos' => $lugares_turisticos]);
    }

    public function offer_detail($offer)
    {
        $oferta_turistica = OfertaTuristica::find($offer);
        $usuarioId = Auth::id(); // Suponiendo que estás trabajando con la autenticación de Laravel.
        $enCarrito = Carrito::where('user_id', $usuarioId)
            ->where('oferta_turistica_id', $oferta_turistica->id)
            ->exists();

        $cart = Carrito::where('user_id', $usuarioId)
            ->where('oferta_turistica_id', $oferta_turistica->id)->first();

        $imagenes = explode(',', $oferta_turistica->imagenes);
        $posibilidades = explode(',', $oferta_turistica->cartera_posibilidades);
        return view('offer_detail', ['oferta_turistica' => $oferta_turistica, 'imagenes' => $imagenes, 'posibilidades' => $posibilidades, 'enCarrito' => $enCarrito, 'cart' => $cart]);
    }

    public function tourist_offers()
    {
        $ofertas_turisticas = OfertaTuristica::all();

        return view('tourist_offers', ['ofertas_turisticas' => $ofertas_turisticas]);
    }

    public function site_detail($site)
    {
        $lugar_turistico = LugarTuristico::find($site);
        $ofertas_turisticas = $lugar_turistico->ofertasTurisicas;
        return view('site_detail', ['ofertas_turisticas' => $ofertas_turisticas, 'lugar_turistico' => $lugar_turistico]);
    }

    public function cart()
    {
        // get carritos by user
        $carritos = Carrito::where('user_id', Auth::user()->id)->get();
        return view('cart', ['carritos' => $carritos]);
    }

    // public function cartDestroy(Request $request)
    // {
    //     $carrito = Carrito::find($request->get('oferta'));
    //     // delete carrito
    //     $carrito->delete();
    //     return redirect('cart');
    // }

    public function cartDestroy($id)
    {
        $carrito = Carrito::find($id);
        // delete carrito
        $carrito->delete();
        return redirect('cart');
    }

    public function offer_cart_detail($offer, $cart)
    {
        $oferta_turistica = OfertaTuristica::find($offer);
        $imagenes = explode(',', $oferta_turistica->imagenes);
        $posibilidades = explode(',', $oferta_turistica->cartera_posibilidades);
        return view('offer_cart_detail', ['oferta_turistica' => $oferta_turistica, 'imagenes' => $imagenes, 'posibilidades' => $posibilidades, 'cart' => $cart]);
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function cartStore(Request $request)
    {
        // $request->validate([
        //     'oferta' => 'required|unique:carritos',
        // ]);
        $usuario = Auth::user();
        $carrito = new Carrito();

        $carrito->oferta_turistica_id = $request->get('oferta');
        $carrito->user_id = $usuario->id;

        // Guardar el carrito
        $carrito->save();
        // echo $carrito;

        return redirect('cart');
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
