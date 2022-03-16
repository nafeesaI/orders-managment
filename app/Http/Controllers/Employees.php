<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Emp;
use App\Models\Department;

class Employees extends Controller
{
    public function index()
    {
        return view('employees/index', [
            'employees' => Emp::all(),
            'departments' => Department::where('status', 1)->get()
        ]);
    }
    public function add()
    {
        return view('employees/add', [
            'departments' => Department::where('status', 1)->get()
        ]);
    }
    public function save(Request $req)
    {
        $emp = new Emp;
        $emp->f_name = $req->input('f_name');
        $emp->l_name = $req->input('l_name');
        $emp->department_id = $req->input('department_id');
        $emp->phone = $req->input('phone');
        $emp->address = $req->input('address');
        $emp->profile_img = $req->input('profile_img');
        $emp->bio = $req->input('bio');

        $emp->save();
        return redirect('/employees');

    }
}
