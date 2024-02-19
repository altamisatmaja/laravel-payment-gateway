<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function home() {
        return view('home');
    }

    public function checkout(Request $request) {
        dd($request->all());
    }
}
