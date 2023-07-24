<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class UserController extends Controller
{
    public function login(StoreUserRequest $request, User $user)
    {
        // $arr=array("status", "response");
        // $obj=(object)$arr;
        // print_r($obj);
        $user = DB::table('users')->select('email', 'password')->get();
        $loginData = json_decode($request->getContent());
        if (Hash::check($loginData->pwrd, $user[0] -> password) && $loginData->usrnm == $user[0]->email) {
            $response = Str::random(16);
            return response()-> json($response, 200);
        } else {
            $response = "err failed";
            return response()-> json($response, 403);
        }
    }
}
