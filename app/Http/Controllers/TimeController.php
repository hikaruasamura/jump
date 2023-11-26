<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pushtime;
class TimeController extends Controller
{
    public function start(Pushtime $pushtime)
    {
        $pushtimes=$pushtime->get();
        $count=0;
        foreach($pushtimes as $pushtime){
            if($pushtime->judge==0){
                $count=$count+1;
            }
        }
        return view('times/start')->with(['rank' => $count]);
        
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
