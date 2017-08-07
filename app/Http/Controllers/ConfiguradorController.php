<?php

namespace WIT\Http\Controllers;

use Illuminate\Http\Request;
use WIT\Comanda;
use WIT\Cliente;
use WIT\Order;

class ConfiguradorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comandas = Comanda::all();
        return view('configurador.index',compact('comandas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $comandas = Comanda::all();
        return view('configurador.index',compact('comandas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $orden = new Order;
        $cliente = new Cliente;

        $this->validate($request, [
                // Primero validarmos los datos del cliente.
                'nombre' => 'required',
                'apellidos' => 'required',
                'email' => 'required'
            ]);

        $cliente->nombre = $request->nombre;
        $cliente->apellido = $request->apellidos;
        $cliente->email = $request->email;
        $cliente->phone = $request->celular;

        $cliente->save();

        $orden->user_id = $cliente->id;
        
        /*
        $producto = new Product;
        $this->validate($request, [
                'nombre' => 'required',
                'descripcion' => 'required',
                'precio' => 'required',
                'campo' => 'required',
            ]);

        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;
        $producto->comanda_id = $request->campo;
        $producto->seccion_comanda = 0;
        $producto->save();
        */
        Mail::to($cliente->email)->send(new OrderReceived($orden));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comandas = Comanda::all();
        return view('configurador.index',compact('comandas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comandas = Comanda::all();
        return view('configurador.index',compact('comandas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
