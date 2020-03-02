<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IntroductionController extends Controller
{
    public function name() {
        return view('introduction.name', ['msg' => '杉村亜里紗です!']);
    }
}