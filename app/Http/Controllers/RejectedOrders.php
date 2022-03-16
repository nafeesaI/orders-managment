<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rejected_order;
use App\Models\Order;

class RejectedOrders extends Controller
{
    public function index()
    {
        return view('rejectedOrders/index', [
            'rejected' => Rejected_order::all(),
            'orders' => Order::where('status', 1)->get()
        ]);
    }
    public function add()
    {
        return view('rejectedOrders/add', [
            'orders' => Order::where('status', 1)->get()
        ]);
    }
    public function save(Request $req)
    {
        $rejected = new Rejected_order;
        $rejected->orders_id = $req->input('orders_id');
        $rejected->reason = $req->input('reason');

        $rejected->save();

        return redirect('/rejected');
    }
}
