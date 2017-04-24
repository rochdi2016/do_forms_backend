<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\UserRepository;

class UserController extends Controller
{
    //
    protected $userRepository;
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }
    public function store(Request $request){
        $userData = $request->all();
        return response()->json($this->userRepository->storeUser($userData),201);
    }
    public function show($id,Request $request){
        $model = $this->userRepository->find($id);
        return response()->json($model,201);
    }
    public function update(){

    }
}
