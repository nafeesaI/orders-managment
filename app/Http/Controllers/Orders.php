<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Orders_types;
use App\Models\Emp;

class Orders extends Controller
{
    public function index()
    {
        return view('orders/index', [
        'orders' => Order::all(),
        'ordertypes' => Orders_types::where('status', 1)->get(),
        'employees' => Emp::where('status', 1)->get()
        ]);
    }
    public function add()
    {
        return view('orders/add', [
            'ordertypes' => Orders_types::where('status', 1)->get(),
            'employees' => Emp::where('status', 1)->get()
        ]);
    }
    public function save(Request $req)
    {
        $orders = new Order;
        $orders->title = $req->input('title');
        $orders->sub_ttile = $req->input('sub_ttile');
        $orders->emp_id = $req->input('emp_id');
        $orders->orders_type_id = $req->input('orders_type_id');
        $orders->content = $req->input('content');
        $orders->file_url = $req->input('file_url');

        $orders->save();

        return redirect('/orders');

    }
}
