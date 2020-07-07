<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(5);
        return view('users.list', compact('users'));
    }

    public function detail($id)
    {
        $user = User::findOrFail($id);
        return view('users.detail',compact('user'));
    }

    public function create()
    {
        return view('users.create');
    }


    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        if (!$request->hasFile('inputFile')) {
            $user->image = $request->inputFile;
        } else {
            $file = $request->file('inputFile');

            //Lấy ra định dạng và tên mới của file từ request
            $fileExtension = $file->getClientOriginalExtension();
            $fileName = $request->inputFileName;

            // Gán tên mới cho file trước khi lưu lên server
            $newFileName = "$fileName.$fileExtension";

            //Lưu file vào thư mục storage/app/public/image với tên mới
            $request->file('inputFile')->storeAs('public/images', $newFileName);

            // Gán trường image của đối tượng task với tên mới
            $user->image = $newFileName;
        }
        $user->birthday = $request->birthday;
        $user->gender = $request->gender;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->password = $request->password;
        $user->role = $request->role;
        $user->save();
        return redirect()->route('users.index');
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->name = $request->image;
        $user->birthday = $request->birthday;
        $user->gender = $request->gender;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->password = $request->password;
        $user->role = $request->role;
        $user->save();
        return redirect()->route('users.index');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('users.index');
    }

    public function search(Request $request)
    {
        $keyword = $request->keyword;
        $users = DB::table('users')->where('name', 'LIKE', '%' . $keyword . '%')->paginate(5);
        return view('users.list', compact('users'));
    }
}
