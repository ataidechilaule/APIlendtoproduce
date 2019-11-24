<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Terra;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class TerraController extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(){
        $terras = Terra::all();
        return response()->json($terras,200);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id){
        $terra = Terra::find($id);
        if(is_null($terra)){
            return response()->json(["message" =>'Record Not Found'], 404);
        }
        return response()->json(Terra::find($id), 200);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request){
        try{
            $terr = new Terra();
            $terr -> ter_dimensao = $request->json()->get('ter_dimensao');
            $terr -> ter_duat = $request->json()->get('ter_duat');
            $terr -> ter_culturas = $request->json()->get('ter_culturas');
            $terr -> ter_motivo = $request->json()->get('ter_motivo');
            $terr -> ter_rio = $request->json()->get('ter_rio');
            $terr -> user_id = $request->json()->get('user_id');
            $terr -> distrito_id = $request->json()->get('distrito_id');

            $terr->save();

            return ["message" =>'Sucesso'];


        }catch(Exception $erro){
            return ["message" =>'Erro'];
        }
        /*
        $rules = [
            'ter_dimensao' => 'required|min:2',
            'ter_duat' => 'required|min:5|max:8',
            'ter_rio' => 'required',
            'ter_culturas' => 'required|min:5',
            'ter_motivo' => 'required|min:5',
        ];

        $validator = Validator::make($request->all(),$rules);
        if($validator->fails()){
            return response()->json($validator->errors(),400);
        }

     // $terra =Terra::where('ter_duat',$request->input('ter_duat'));

       // if(is_null($terra)){
            $terra = Terra::create($request->all());

            return response()->json($terra,201);
       /* }
        else {
            return response()->json(["message" =>'Duat Alread registed'], 404);
        }*/



    }

    /**
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id){
        $terra = Terra::find($id);

        if(is_null($terra)){
            return response()->json(["message" =>'Record Not Found'], 404);
        }
        $terra->update($request->all());

        return response()->json($terra, 200);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id){
        $terra = Terra::find($id);
        if(is_null($terra)){
            return response()->json(["message" =>'Record Not Found'], 404);
        }
        $terra->delete();

        return response()->json(null, 204);
    }

    public function getTerraByUser($id){
        $terra = User::find($id)->terras()->get();

        if(is_null($terra)){
            return response()->json(["message" =>'Record Not Found'], 404);
        }

        return response()->json($terra, 200);
    }
}
