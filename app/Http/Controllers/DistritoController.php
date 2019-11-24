<?php

namespace App\Http\Controllers;

use App\Distrito;
use Illuminate\Http\Request;

class DistritoController extends Controller
{
    public function index(){
        $distritos = Distrito::paginate(5);
        return response()->json($distritos,200);
    }

    public function show($id){
        $distrito = Distrito::find($id);
        if(is_null($distrito)){
            return response()->json(["message" =>'Record Not Found'], 404);
        }
        return response()->json(Distrito::find($id), 200);
    }

    public function getTerraByDistrito($id){
        $distrito = Distrito::find($id)->terras()->get();

        if(is_null($distrito)){
            return response()->json(["message" =>'Record Not Found'], 404);
        }

        return response()->json($distrito, 200);
    }
}
