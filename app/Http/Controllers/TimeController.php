<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TimeController extends Controller
{
    public function start()
    {
        return view('times/start');
    }

    public function fortune()
    {
         return view('times/fortune');
    }

    public function song()
    {
         return view('times/start');
    }

}
