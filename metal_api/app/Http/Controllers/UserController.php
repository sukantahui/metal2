<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
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
        $user= User::where('email', $request->loginId)->first();
        // print_r($data);
        if (!$user || !Hash::check($request->loginPassword, $user->password)) {
//            return response()->json(['success'=>0,'data'=>null, 'message'=>'Credential does not matched'], 200,[],JSON_NUMERIC_CHECK);
            return $this->errorResponse('Credential does not matched',403);
        }

        $token = $user->createToken('my-app-token')->plainTextToken;
        $user->setAttribute('token',$token);
        return $this->successResponse(new LoginResource($user));
    }
    function authenticationError(){
        return $this->errorResponse('Credential does not matched',403);
    }

    function getCurrentUser(Request $request){
//        $user = $request->user();
        $user=auth()->user();
        if(!$user){
            return $this->errorResponse("token expired",403);
        }else{
            return $this->successResponse(new UserResource($user));
        }

    }

    function getAllUsers(Request $request){
        return User::get();
    }
    function logout(Request $request){
        return $request->user()->currentAccessToken()->delete();
    }
    public function revoke_all(Request $request){
        //revoke all tokens from current user
        $user = request()->user();
        $result = $user->tokens()->delete();
        return $this->successResponse($result);
    }
    public function updatePassword(Request $request){
        $input = $request->all();
        $userid=$request->user()->id;

//        $user=auth()->user();
//        if(!$user){
//            return $this->errorResponse("token expired",403);
//        }else{
//            if (!$user || !Hash::check($request->currentLoginPassword, $user->password)) {
//                return $this->errorResponse('Current password is wrong',403);
//            }
////            $user->password = bcrypt($request->newLoginPassword);
//            $user->password = bcrypt($request->newLoginPassword);
//            $user->save();
//            return $this->successResponse(new UserResource($user));
//        }
        try {
            if ((Hash::check(request('old_password'), Auth::user()->password)) == false) {
                $arr = array("status" => 400, "message" => "Check your old password.", "data" => array());
            } else if ((Hash::check(request('new_password'), Auth::user()->password)) == true) {
                $arr = array("status" => 400, "message" => "Please enter a password which is not similar then current password.", "data" => array());
            } else {
                User::where('id', $userid)->update(['password' => Hash::make($input['new_password'])]);
                $arr = array("status" => 200, "message" => "Password updated successfully.", "data" => array());
            }
        } catch (\Exception $ex) {
            if (isset($ex->errorInfo[2])) {
                $msg = $ex->errorInfo[2];
            } else {
                $msg = $ex->getMessage();
            }
            return $this->errorResponse($msg);
        }
        return $this->successResponse($arr);
    }
}
