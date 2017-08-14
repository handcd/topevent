<?php

namespace WIT\Http\Controllers;

use Illuminate\Http\Request;
use WIT\Order;
use WIT\Cliente;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ordenes = Order::all();
        $clientes = Cliente::all();
        return view('dashboard',compact('ordenes'));
    }
}
