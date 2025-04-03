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
    public function sumar($x,$y){
        return $x+$y;
    }
    public function suma($x,$y){
        return "El resultado de la suma ".$x." + ".$y." es: ".$x+$y;
    }
    public function resta($x,$y){
        return "El resultado de la resta ".$x." - ".$y." es: ".$x-$y;
    }
    public function multiplicacion($x,$y){
        return "El resultado de la multiplicacion ".$x." x ".$y." es: ".$x*$y;
    }
    public function division($x,$y){
        if($x>0 && $y>0){
            return "El resultado de dividir ".$x." / ".$y." es: ".$x/$y;
        }else{
            return "Imposible dividir un valor con 0";
        }
    }
}
