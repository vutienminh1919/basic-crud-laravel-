<?php

namespace App\Http\Controllers;

use App\Models\User;
use http\QueryString;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;
class UserController extends Controller
{

    public function index()
    {
//        $users = $this->users = DB::select("SELECT * FROM users");
        $users = User::all();
//        $users = DB::table('users')->get();

        return view("user.list", compact("users"));

    }

    public function show($id)
    {
            $user = User::query()->findOrFail($id);
            return view("user.detail", compact("user"));
    }

    public function showFormCreate()
    {
        return view("user.create");
    }


    public function store(Request $request)
    {
        $data = $request->all();
        User::query()->create($data);
//        $user = new User();
//        $user->name = $request->name;
//        $user->email = $request->email;
//        $user->password = $request->password;
//        $user->save();
        return redirect()->route('users.index');
    }

    public function showFormEdit($id)
    {
        $user = User::query()->findOrFail($id);
        return view("user.edit",compact("user"));
    }


    public function update(Request $request, $id)
    {
        $user = User::query()->findOrFail($id);
        $data = $request->only('name','email','password');
        User::query()->where("id","=",$id)->update($data);
        return redirect()->route('users.index');
    }

    public function delete($id)
    {
        $user = User::query()->findOrFail($id);

        $user->delete();
        echo"success delete user";
        return redirect()->route('users.index');
    }

}
