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
}
