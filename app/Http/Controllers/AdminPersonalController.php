<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\personal;

class AdminPersonalController extends Controller
{
    //
    function __construct()
    {

        $this->middleware(function ($request, $next) {
            session(['modules_active' => 'personal']);
            return $next($request);
        });
    }
    //list
    function list()
    {

        $personal = personal::paginate(10);

        return view('admin.personal.personal-list', compact('personal'));
    }


    // view//
    function create()
    {

        return view('admin.personal.personal-add');
    }

    // store
    function store(Request $request)
    {
         $input = $request->all();
        $request->validate(
            [
                'name' => 'required|max:50|min:2',
                'slug' => 'required|max:50|min:2',
                'desc' => 'required',
                'file' => 'required',
                'status' => 'required',
            ],
            [],
            [
                'name' => 'Tên-Biệt danh',
                'file' => 'Ảnh',

            ]
        );
        if ($request->hasFile('file')) {
            $file = $request->file;
            $filename = $request->slug . '-'  . '.' . $file->getClientOriginalExtension();
            $path = $file->move('public/uploads/personal', $filename);
            $img = "public/uploads/personal/" . $filename;
            $input['images'] = $img;
        }

        personal::create($input);

        return redirect()->back()->with('success', 'Thêm thông tin thành công');
    }



    //edit 
    function edit(personal $personal) {
        
        return view('admin.personal.personal-edit',compact('personal'));

    }
    function update(Request $request , personal $personal) {

        $update =$request->only('name','slug','desc','status');
        $request->validate(
            [
                'name' => 'required|max:50|min:2',
                'slug' => 'required|max:50|min:2',
                'desc' => 'required',
                'status' => 'required',
            ],
            [],
            [
                'name' => 'Tên-Biệt danh',

            ]
        );
        if ($request->hasFile('file')) {
            $file = $request->file;
            $filename = $request->slug . '-'  . '.' . $file->getClientOriginalExtension();
            $path = $file->move('public/uploads/personal', $filename);
            $img = "public/uploads/personal/" . $filename;
            $update['images'] = $img;
        }

        $personal->update($update);

         return redirect(route('personal.list'))->with('success','Cập nhật thông tin thành công');
    }

    //delte
    function delete(personal $personal) {
        $personal->delete();
        return redirect()->back()->with('success', 'Xóa thông tin thành công');
    }


}
