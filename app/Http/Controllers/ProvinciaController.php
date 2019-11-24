<?php

namespace App\Http\Controllers;

use App\Provincia;
use Illuminate\Http\Request;

class ProvinciaController extends Controller
{
    //

    public function show($id){
        $provincia = Provincia::find($id);
        if(is_null($provincia)){
            return response()->json(["message" =>'Record Not Found'], 404);
        }
        return response()->json(Provincia::find($id), 200);
    }
}
