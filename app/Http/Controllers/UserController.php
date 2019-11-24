<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(5);
        return response()->json($users,200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'ut_nome' => 'required|min:2',
            'email' => 'required|min:5',
            'ut_tipo_doc' => 'required',
            'ut_numero' => 'required|min:5',
            'ut_contacto' => 'required|min:5',
            'ut_morada' => 'required|min:5',
            'password' => 'required|min:5',
        ];

        $validator = Validator::make($request->all(),$rules);
        if($validator->fails()){
            return response()->json($validator->errors(),400);
        }


        $user = User::create($request->all());
        return response()->json($user,201);
        /* }
         else {
             return response()->json(["message" =>'Duat Alread registed'], 404);
         }*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        if(is_null($user)){
            return response()->json(["message" =>'Record Not Found'], 404);
        }
        return response()->json(User::find($id), 200);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);

        if(is_null($user)){
            return response()->json(["message" =>'Record Not Found'], 404);
        }
        $user->update($request->all());

        return response()->json($user, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        if(is_null($user)){
            return response()->json(["message" =>'Record Not Found'], 404);
        }
        $user->delete();

        return response()->json(null, 204);
    }
}
