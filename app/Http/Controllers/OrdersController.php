<?php

namespace App\Http\Controllers;

use App\Mail\OrderMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
        Mail::to('test@test.com')->send(new OrderMail($data));
        return view('welcome')->with('successMsg','Property is updated .');
    }
}
