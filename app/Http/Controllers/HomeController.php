<?php

namespace WIT\Http\Controllers;

use Illuminate\Http\Request;
use WIT\Order;
use WIT\Client;
use Carbon\Carbon;

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
        $grafica1 = array(
            6 => Order::whereRaw('DATE(created_at) = CURRENT_DATE - INTERVAL 6 DAY')->count(),
            5 => Order::whereRaw('DATE(created_at) = CURRENT_DATE - INTERVAL 5 DAY')->count(),
            4 => Order::whereRaw('DATE(created_at) = CURRENT_DATE - INTERVAL 4 DAY')->count(),
            3 => Order::whereRaw('DATE(created_at) = CURRENT_DATE - INTERVAL 3 DAY')->count(),
            2 => Order::whereRaw('DATE(created_at) = CURRENT_DATE - INTERVAL 2 DAY')->count(),
            1 => Order::whereRaw('DATE(created_at) = CURRENT_DATE - INTERVAL 1 DAY')->count(),
            0 => Order::whereRaw('DATE(created_at) = CURRENT_DATE')->count(),
        );
        $grafica2 = array(
            6 => Client::whereRaw('DATE(created_at) = CURRENT_DATE - INTERVAL 6 DAY')->count(),
            5 => Client::whereRaw('DATE(created_at) = CURRENT_DATE - INTERVAL 5 DAY')->count(),
            4 => Client::whereRaw('DATE(created_at) = CURRENT_DATE - INTERVAL 4 DAY')->count(),
            3 => Client::whereRaw('DATE(created_at) = CURRENT_DATE - INTERVAL 3 DAY')->count(),
            2 => Client::whereRaw('DATE(created_at) = CURRENT_DATE - INTERVAL 2 DAY')->count(),
            1 => Client::whereRaw('DATE(created_at) = CURRENT_DATE - INTERVAL 1 DAY')->count(),
            0 => Client::whereRaw('DATE(created_at) = CURRENT_DATE')->count(),
        );
        $grafica3 = array(
            6 => Order::whereRaw('DATE(created_at) <= CURRENT_DATE - INTERVAL 6 DAY')->count(),
            5 => Order::whereRaw('DATE(created_at) <= CURRENT_DATE - INTERVAL 5 DAY')->count(),
            4 => Order::whereRaw('DATE(created_at) <= CURRENT_DATE - INTERVAL 4 DAY')->count(),
            3 => Order::whereRaw('DATE(created_at) <= CURRENT_DATE - INTERVAL 3 DAY')->count(),
            2 => Order::whereRaw('DATE(created_at) <= CURRENT_DATE - INTERVAL 2 DAY')->count(),
            1 => Order::whereRaw('DATE(created_at) <= CURRENT_DATE - INTERVAL 1 DAY')->count(),
            0 => Order::whereRaw('DATE(created_at) <= CURRENT_DATE')->count(),
        );
        return view('dashboard',compact('ordenes','grafica1','grafica2','grafica3'));
    }
}
