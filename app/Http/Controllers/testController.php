<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function test()
    {
        return view('homeTest');
    }

    public function posTest()
    {
        return view('posTest');
    }

}
