<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orders_types;

class OrderTypes extends Controller
{
    public function index()
    {
        return view('Orders_Types/index', [
            'orderType' => Orders_types::where('status', 1)->get()
        ]);
    }
    public function add()
    {
        return view('Orders_Types/add');
    }
    public function save(Request $req)
    {
        $ordertype = new Orders_types;
        $ordertype->name = $req->input('name');
        $ordertype->save();
        return redirect('/orderTypes');
    }
}
