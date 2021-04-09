<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Datosentrada;

class OperacionesController extends Controller
{
    public function Datos(){
        return view('data');
    }
    public function guardardatos(Request $request){
        @$this->validate($request,[
            'ValorH' => 'required|regex:/^[0-9]*$/',
            'Interacciones' => 'required|regex:/^[0-9]*$/',
        ]);
        $datos = new Datosentrada;
        $datos -> ValorH = $request->ValorH;
        $datos -> Interacciones = $request->Interacciones;
        //$datos -> save();
        $valorh = $datos->ValorH;
        $interacciones = $datos -> Interacciones; 
        $valor = 0;
        $Xo = 0;
        $Yo = 0.5;
        
            while($valor <= $interacciones){
                $valor = $Yo+$valorh*(($Xo-$Yo)*($Xo-$Yo));
                $Xo = $Xo + $valor;
                $Yo = $valor;
                $valor = $valor; 
                return $valor;
            }
    }
}
