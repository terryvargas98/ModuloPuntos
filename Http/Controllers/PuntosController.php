<?php

namespace Modules\Puntos\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\puntos;
use Illuminate\Routing\Controller;

class PuntosController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('puntos::index');
    }
    public function CalcularPuntos()
    {
        $Clientes = Cliente::all();
        $TablePuntos = puntos::truncate();
        foreach ($Clientes as $cliente ) {
            $Puntos = new puntos;
            $Puntos->client_id = $cliente->id;
            $Puntos->puntos =$cliente->totalcompra;
            $Puntos->save();
            
        }
        $PuntosPorCliente = puntos::all();
    
        return view('puntos::PuntosPorClient',\compact('PuntosPorCliente'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('puntos::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('puntos::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('puntos::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
