<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrdersController extends Controller
{
    //

    public function store(){
        $data = request()->validate([
            'name' => 'required',
            'city' => 'required',
            'adress' => 'required',
            'phone' => 'required'
        ]);

        //dd($data);

        \App\Order::create($data);
        return view('welcome');
    }
}
