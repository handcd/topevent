<?php

namespace WIT\Http\Controllers;

use Illuminate\Http\Request;
use WIT\Order;
use WIT\Client;

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
        $clients = Client::all();
        return view('dashboard',compact('ordenes'));
    }
}
