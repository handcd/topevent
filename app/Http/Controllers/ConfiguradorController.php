<?php

namespace WIT\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use WIT\Mail\OrderReceived;
use WIT\Comanda;
use WIT\Product;
use WIT\Cliente;
use WIT\DatosOrden;
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
        $datosOrden = new DatosOrden;

        $this->validate($request, [
                // Primero validarmos los datos del cliente.
                'nombre' => 'required',
                'apellidos' => 'required',
                'email' => 'required',

                // Validamos los datos básicos de la orden
                'fechaevento' => 'required',
                'duracion' => 'required',
                'tipoEvento' => 'required',
                'introduccion' => 'required',
                'noInvitados' => 'required',
                'lugarEvento' => 'required'
            ]);

        // Cliente
        $cliente->nombre = $request->nombre;
        $cliente->apellido = $request->apellidos;
        $cliente->email = $request->email;
        $cliente->phone = $request->celular;
        $cliente->save();

        // Orden General
        $orden->user_id = $cliente->id;
        $orden->fecha = $request->fechaevento;
        $orden->duracion = $request->duracion;
        $orden->tipo_evento = $request->tipoEvento;
        $orden->introduccion = $request->introduccion;
        $orden->no_invitados = $request->noInvitados;
        $orden->id_lugar_evento = $request->lugarEvento;
        $orden->nombre_lugar = $request->nombreLugar;
        $orden->direccion_lugar = $request->direccionLugar;
        $orden->id_limpieza = $request->idLimpieza;
        $orden->save();

        // Productos
        $i = 0;
        foreach (Product::all() as $producto) {
            if (!empty($request->producto[$i])) {
                $datos = new DatosOrden;
                $datos->order_id = $orden->id;
                $datos->product_id = $producto->id;
                $datos->valor = $request->producto[$i];
                $datos->save();
            }
            $i++;
        }

        // Enviamos Mail.
        Mail::to($cliente->email)->send(new OrderReceived($orden));
        
        return redirect('/');
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
