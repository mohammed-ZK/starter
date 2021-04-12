<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
class FirstController extends Controller
{
    public function printtt(){
        return "mohammed";
    }
    public function mohammed(){

        $obj=new \stdClass();
        $obj->name="m55ohamm444ed";
        $obj->age=66;

        return view("welcome",compact("obj"));
    }
}
