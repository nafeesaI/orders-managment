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
    public function info($id)
    {
        $ordert = Orders_types::get();
        $ordert = Orders_types::find($id);
        return view('Orders_Types/info', compact('ordert'));
    }
    public function edit($id)
    {
        return view('Orders_Types/edit', [
            'ordert' => Orders_types::find($id)
        ]);
    }
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $ordert = Orders_types::find($id);
        $ordert->name = $input['name'];

        $ordert->name = $request['name'];
        $ordert->save();
        return redirect('/orderTypes');

    }
    public function delete($id)
    {
        $ordert = Orders_types::find($id);
        $ordert->status = 0;

        return ($ordert->update())
            ? back()->with('done', '  تم الخذف   ')
            : back()->with('erorr', '  لم يتم حاول من جديد  ');
    }
}
