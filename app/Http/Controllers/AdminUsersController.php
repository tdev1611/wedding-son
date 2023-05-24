<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use App\Models\User;

class AdminUsersController extends Controller
{
    //\
    function __construct()
    {

        $this->middleware(function ($request, $next) {
            session(['modules_active' => 'users']);
            return $next($request);
        });
    }
    function add_user()
    {

        return view('admin.Users.add-user');
    }

    function store(Request $request)
    {
        $input = $request->all();
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|string|email|unique:users,email|min:5|max:40',
                'password' => ['required', Password::min(8)->mixedCase()->numbers()],
                'access' => 'required',
            ],
            [],
            [
                'name' => 'Họ và tên',
                'password' => 'Mật khẩu',
                'access' => 'Quyền truy cập'
            ]
        );
        //password validate
        $password = bcrypt($_POST['password']);
        $input['password'] = $password;   // Thêm passowrd
        $user =  User::create($input);        // add user
        return redirect()->back()->with('success', 'Thêm thành viên mới thành công');
    }


    function list_users(Request $request)
    {

        $users = User::paginate(10);
        $key = $request->key;
        if ($key) {
            $users =  User::where('name', 'like', '%' . $key . '%')
                ->orWhere('email', 'like', '%' . $key . '%')->paginate(10);
        }

        return view('admin.Users.list-user', compact('users'));
    }

    function edit_user(User $user)
    {

        return view('admin.Users.edit-user', compact('user'));
    }

    function update(Request $request, User $user)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|string|email|min:5|max:40|unique:users,email,' . $user->id,
                'password' => ['required', Password::min(8)->mixedCase()->numbers()],
                'access' => 'required',
            ],
            [],
            [
                'name' => 'Họ và tên',
                'password' => 'Mật khẩu',
                'access' => 'Quyền truy cập'
            ]
        );

        $update = $request->only('name', 'email', 'access');
        $password = bcrypt($_POST['password']);
        $update['password'] = $password;
        $user->update($update);
        return redirect(route('user.list'))->with('success', 'Cập nhật thành công');
    }
    function delete(User $user)
    {
        $user->delete();
        return redirect()->back()->with('success', 'Xóa thành viên thành công');
    }

    //restore
    function restore (User $user) {

    }

    //formance


}
