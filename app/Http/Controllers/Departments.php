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
        $mana = Managment::all();
        $dept = Department::get();
        $dept = Department::find($id);
        return view('departments/info', compact('dept', 'mana'));
    }
    public function edit($id)
    {
        return view('departments/edit', [
            'dept' => Department::find($id),
            'mana' => Managment::where('status', 1)->get()
        ]);
    }
    public function update(Request $req, $id)
    {
        $input = $req->all();
        $dept = Department::find($id);
        $dept->name = $input['name'];
        $dept->managment_id = $input['managment_id'];

        $dept->name = $req['name'];
        $dept->managment_id = $req['managment_id'];
        $dept->save();
        return redirect('/departments');
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
