<?php

namespace WIT\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use WIT\Mail\OrderReceived;
use WIT\Client;
use WIT\Order;

class ClientController extends Controller
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
        $clients = Client::all();
        return view('client.home',compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('client.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $client = new Client;
        $this->validate($request, [
                'nombre' => 'required',
                'apellido' => 'required',
                'email' => 'required | unique:clients',
            ]);
        $client->nombre = $request->nombre;
        $client->apellido = $request->apellido;
        $client->email = $request->email;
        $client->phone = $request->phone;
        $client->save();

        return redirect('clients');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = Client::find($id);
        return view('client.show',compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Client::find($id);
        return view('client.edit',compact('item'));
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
        $client = Client::find($id);
        $this->validate($request, [
                'nombre' => 'required',
                'apellido' => 'required',
                'email' => 'required'
            ]);
        $client->nombre = $request->nombre;
        $client->apellido = $request->apellido;
        $client->email = $request->email;
        $client->phone = $request->phone;
        $client->save();
        return redirect('clients');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Client::find($id);
        $item->delete();
        session()->flash('message','Successfully deleted!');
        return redirect('/clients');
    }
}
