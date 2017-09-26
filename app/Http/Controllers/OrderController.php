<?php

namespace WIT\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use WIT\Mail\OrderReceived;
use WIT\Order;
use WIT\DatosOrden;
use WIT\Product;
use WIT\Comanda;
use WIT\Client;

class OrderController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ordenes = Order::all();
        $revenue = $ordenes
                        ->where('aprobado',1)
                        ->sum('cotizacion');
        return view('order.index', compact('ordenes','revenue'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $comandas = Comanda::all();
        return view('order.create',compact('comandas'));
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
        $this->validate($request, [
                'client' => 'required',
                'fechaevento' => 'required',
                'duracionEvento' => 'required',
                'tipoEvento' => 'required',
                'lugarEvento' => 'required',
                'numInvitados' => 'required',
                'introduccion' => 'required',
                'aprobado' => 'required',
                'limpieza' => 'required',
            ]);

        $orden->client_id = $request->client;
        $orden->fecha = $request->fechaevento;
        $orden->duracion = $request->duracionEvento;
        $orden->tipo_evento = $request->tipoEvento;
        $orden->id_lugar_evento = $request->lugarEvento;
        $orden->nombre_lugar = $request->nombreLugarEvento;
        $orden->direccion_lugar = $request->direccionLugarEvento;
        $orden->no_invitados = $request->numInvitados;
        $orden->introduccion = $request->introduccion;
        $orden->id_limpieza = $request->limpieza;
        $orden->aprobado = $request->aprobado;
        $orden->notas = $request->notas;
        $orden->cotizacion = $request->cotizacion;
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

        $email = Client::find($orden->client_id)->email;
        Mail::to($email)->send(new OrderReceived($orden));

        return redirect('ordenes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $orden = Order::find($id);
        return view('order.show',compact('orden'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Order::find($id);
        $comandas = Comanda::all();
        return view('order.edit',compact('item','comandas'));
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
        $orden = Order::find($id);

        $this->validate($request, [
                'client' => 'required',
                'fechaevento' => 'required',
                'duracionEvento' => 'required',
                'tipoEvento' => 'required',
                'lugarEvento' => 'required',
                'numInvitados' => 'required',
                'introduccion' => 'required',
                'aprobado' => 'required',
                'limpieza' => 'required',
            ]);

        $orden->client_id = $request->client;
        $orden->fecha = $request->fechaevento;
        $orden->duracion = $request->duracionEvento;
        $orden->tipo_evento = $request->tipoEvento;
        $orden->id_lugar_evento = $request->lugarEvento;
        $orden->nombre_lugar = $request->nombreLugarEvento;
        $orden->direccion_lugar = $request->direccionLugarEvento;
        $orden->no_invitados = $request->numInvitados;
        $orden->introduccion = $request->introduccion;
        $orden->id_limpieza = $request->limpieza;
        $orden->aprobado = $request->aprobado;
        $orden->notas = $request->notas;
        $orden->cotizacion = $request->cotizacion;
        $orden->save();

        // Productos
        $i = 0;
        foreach (Product::all() as $producto) {
            if (!empty($request->producto[$i])) {
                $datos = DatosOrden::where([
                    ['order_id','=',$orden->id],
                    ['product_id','=',$producto->id],
                ])->first();
                if (is_null($datos)) {
                    $datos = new DatosOrden;
                    $datos->order_id = $orden->id;
                    $datos->product_id = $producto->id;
                }
                $datos->valor = $request->producto[$i];
                $datos->save();
            }
            $i++;
        }

        return redirect('ordenes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Order::find($id);
        $item->delete();
        return redirect('/ordenes');
    }
}
