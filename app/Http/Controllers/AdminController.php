<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function profile($id)
    {
        return view('profile', ['id' => $id]);
    }

    public function users()
    {
        $users = User::simplePaginate(15);
        return view('admin.users', ['users'=>$users]);
    }

    public function create()
    {
        return view('admin.create');
    }

    public function update(Request $request){
        $id = $request->user;

        $user = User::find($id);
        $user->role = $request->role;
        $user->update();
        return redirect('/admin/users')->with('msg','User updated.');
    }

    public function delete(Request $request){
        $id = $request->user;
        $user = User::find($id);
        $user->delete();
        return redirect('/admin/users')->with('msg','User deleted.');
    }
}
