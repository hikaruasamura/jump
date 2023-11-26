<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Pushtime;
use DateTime;

class TimeController extends Controller
{
    public function start()
    {
        $song = Auth::user()->song()->first();
        return view('times/start')->with(['song'=>$song]);
    }

    public function fortune()
    {
         return view('times/fortune');
    }

    public function song()
    {
        $pushtime = new Pushtime();
        $input = ['user_id'=>Auth::id(), 'time'=>date('H:i:s')];
        $time1 = new DateTime(date('H:i:s'));
        $time2 = new DateTime(Auth::user()->awaketime);
        if($time1>$time2){
            $input += ['judge'=>0];
        } else {
             $input += ['judge'=>1];
        }
        $pushtime->fill($input)->save();
        return 'OK';
    }

}
