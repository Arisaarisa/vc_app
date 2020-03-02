<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class messageController extends Controller
{
    public function hello() {
        return view('message.hello', ['msg' => 'Hello View!']);
    }
    public function good() {
        return view('message.good', ['msg' => 'good!!']);
    }
}
