<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class AdminOrderController extends Controller
{
    private $orders;
    public function index()
    {
        $this->orders=Order::orderBy('id','desc')->get();
        return view('admin.order.manage',['orders'=>$this->orders]);
    }
}
