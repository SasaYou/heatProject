<?php

namespace App\Http\Controllers\Top;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class melancholy extends Controller
{
    public function show(){
        return view('melancholy.index');
    }

    public function check(Request $request){
        return view('melancholy.check');
    }

    public function ans(Request $request){
        $anser = $request->all();
        $point = 0;
     
        foreach($anser as $q => $x){
            if($q != "_token"){
                $point += $x;
            }}
        return view('melancholy.anser')->with('anser',$point);
    }
}
