<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function getName($param=''){
        return view('welcome',['name'=>$param]);
    }
    public function index(){
        //$x=2;
        //$y=34;
        //echo 'la suma es: '.$this->sumar($x,$y);
        $variables =[
            'name'=>'miguel',
            'lastname'=>'castro',
            'age'=>32
        ];
        //return view('app.children',['variables'=>$variables]);
        //return view('app.children')->with(['variables'=>$variables]);
        return view('app.children',compact('variables'));
    }
    private function sumar($x,$y){
        return $x+$y;
    }
}
