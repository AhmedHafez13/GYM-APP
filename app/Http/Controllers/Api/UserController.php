<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use Illuminate\Http\Request;
use App\Http\Resources\UserResource;
use App\Models\User;


class UserController extends Controller
{
    // public function index(){
    //     $users = UserResource::collection(User::all());
    //     return $users;
    // }

    
    public function show($UserId){
        // $userData = User::find($UserId);
        //to let the user show his info on the app
        $userData = UserResource::make(User::find($UserId));
        return $userData;
    }

    public function store(StoreUserRequest $request){
        //caution > [password_confirmation] must be in the request
        $requestData = request()->all();
        $newUser = User::create($requestData);
        return $newUser;
    }
}
