<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuario;
use Response; 


class jsonController extends Controller
{
    
    public function index()
    {
        $usuario=usuario::all();
        return Response::json(
            array(
                'success' => true,
                'message' => "exito",
                'listusuarios' => $usuario,
            ),200);
    
    }

    public function usuarios(){
        $usuario=usuario::all();
        return Response::json(
            array(
                'success' => true,
                'message' => "usuarios",
                'listusuarios' => $usuario,
            ),200);
    }

    
}
