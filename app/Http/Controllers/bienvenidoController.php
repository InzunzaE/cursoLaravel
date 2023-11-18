<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bienvenidoController extends Controller
{
        public function bienvenido(){
           $nombre = "Eitan";
           $alumnos = ['Juan', 'Pedro', 'Maria',     'Jose','Raul ','Perez'];
           $datos = array(['nombre' =>'Ximena', 'edad' => 17, 'turno' => 'Vespertino'],
                            ['nombre' =>'Perez', 'edad' => 9393, 'turno' => 'Mañana'],
                            ['nombre' =>'Adrian', 'edad' => 5, 'turno' => 'Nocturno'],
                            ['nombre' =>'Evelyn', 'edad' => 19, 'turno' => 'Vespertino'],
                            ['nombre' =>'Dani', 'edad' => 15, 'turno' => 'Mañana'],
                            ['nombre' =>'Juan', 'edad' => 3, 'turno' => 'Vespertino']);  
                                                                                            
            return view('bienvenido',compact('nombre', 'alumnos', 'datos'));
        }
        public function inicio(){
                return view('inicio');
        }
}
