<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Managment;

class Managments extends Controller
{
    public function index()
    {
        //  بجيب بس الادارات الخالتها 1  لانو 0 بكون معناها ممسوحة
        return view('/managments/index', [
            'managments' => Managment::where('status', 1)->get()
        ]);
    }

    public function add()
    {
        return view('/managments/add');
    }

    public function save_new(Request $request)
    {
        $mana = new Managment;
        $mana->name = $request->input('name');

        if ($mana->save()) {
            return redirect('/managments')->with('done', 'تم إضافة الاإدارة الجديدة ');
        } else {
            return back()->with('erorr', '  لم يتم حاول من جديد  ');
        }

        //  الكود المظلل تحت دا بس إحتصار ممكن تكتبي الفوق دا عادي 
        // return ($mana->save()) 
        //     ? redirect('/managments/')->with('done', 'تم إضافة الاإدارة الجديدة ')
        //     : back()->with('erorr', '  لم يتم حاول من جديد  ');
    }

    public function info($id)
    {
        $mana = Managment::get();
        $mana = Managment::find($id);
        return view('managments.info')->with('Managment', $mana);
    }

    public function edit($id)
    {
        return view('/managments/edit', [
            'managment' => Managment::find($id)
        ]);
    }

    public function save_edit(Request $request)
    {
        //   بجيب الإدارة العاوزها الاول بعدين بعدل قيمة الاسم وبنفذة دالة التعديل 
        $mana = Managment::find($request->input('id'));
        $mana->name = $request->input('name');

        return ($mana->update())
            ? back()->with('done', ' تم التعديل  ')
            : back()->with('erorr', '  لم يتم حاول من جديد  ');
    }



    public function dele($id)
    {
        //  نفس بتاعة التعديل بس بعدل الحالـه
        $mana = Managment::find($id);
        $mana->status = 0;

        return ($mana->update())
            ? back()->with('done', '  تم الخذف   ')
            : back()->with('erorr', '  لم يتم حاول من جديد  ');
    }


}
