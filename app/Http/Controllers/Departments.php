<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Managment;

class Departments extends Controller
{
    //
    public function index()
    {
        return view('departments/index', [
            'departments' => Department::all(),
            'managments' => Managment::where('status', 1)->get()
        ]);
    }
    public function add()
    {
        return view('departments/add', [
            'managments' => Managment::where('status', 1)->get()
        ]);
    }
    public function save(Request $erquest)
    {
        $department = new Department;
        $department->name = $erquest->input('name');
        $department->managment_id = $erquest->input('managment_id');
        $department->save();
        return redirect('/departments');
    }
    public function info($id)
    {
        return view('departments/info', [
            'departments' => Department::find($id),
            'managments' => Managment::get()
        ]);
    }
    public function edit($id)
    {
        return view('departments/edit', [
            'departments' => Department::find($id),
            'mangments' => Managment::where('status', 1)->get()
        ]);
    }
    public function update(Request $req)
    {
        $dept = Department::find($req->input('id'));
        $dept->name = $req->input('name');
        $dept->managment_id = $req->input('managment_id');

        return ($dept->update());
    }
    public function delete($id)
    {
        $dept = Department::find($id);
        $dept->status = 0;

        return ($dept->update())
        ? back()->with('done', '  تم الخذف   ')
        : back()->with('erorr', '  لم يتم حاول من جديد  ');
    }
}
