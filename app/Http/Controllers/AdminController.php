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
        $users = User::all();
        return view('admin.users', ['users'=>$users]);
    }

    public function create()
    {
        return view('admin.create');
    }

    public function update(){


        return redirect('/')->with('msg','User updated.');
    }
}
