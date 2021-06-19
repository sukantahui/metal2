<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Resources\LoginResource;

class UserController extends ApiController
{

    public function register(Request $request)
    {




        $user = User::create([
            'email'    => $request->email,
            'password' => $request->password,
            'user_name' => $request->name,
            'user_type_id' => $request->user_type_id
        ]);

//        return response()->json(['success'=>1,'data'=>$user], 200,[],JSON_NUMERIC_CHECK);

        $token = $user->createToken('my-app-token')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token
        ];
        return response($response, 201);
    }

    function login(Request $request)
    {

        $user= User::where('email', $request->email)->first();
        // print_r($data);
        if (!$user || !Hash::check($request->password, $user->password)) {
//            return response()->json(['success'=>0,'data'=>null, 'message'=>'Credential does not matched'], 200,[],JSON_NUMERIC_CHECK);
            return $this->errorResponse('Credential does not matched',403);
        }

        $token = $user->createToken('my-app-token')->plainTextToken;
        $user->setAttribute('token',$token);
        return $this->successResponse(new LoginResource($user));
    }


    function getCurrentUser(Request $request){
        return $request->user();
//        return User::get();

    }

    function getAllUsers(Request $request){
        return User::get();
    }
    function logout(Request $request){
        return $request->user()->currentAccessToken()->delete();
    }
}
