<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Sample extends Controller
{
    public function index()
    {

        $data = [
            ['name' => 'Josh'],
            ['name' => 'Lois']
        ];

        $info = request('info');

        return view('sample', ['data' => $data, 'info' => $info]);
    }
}
