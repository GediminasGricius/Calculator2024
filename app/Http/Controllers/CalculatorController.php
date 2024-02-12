<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function form(){
       return view("form", [
           "text"=>""
       ]);
    }

    public function  result(Request $request){

        $text="Result: ".($request->price*1.21);
        return view("form",[
            "text"=>$text
        ]);
    }
}
