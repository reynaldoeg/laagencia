<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Courier;
use App\Product;
use App\Item;
use App\Order;

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
        return view('home');
    }

    public function result(Request $request)
    {
        $order_id = $request->input('search');

        $order = Order::find($order_id);

        return view('result')->with('order', $order);
    }
}
