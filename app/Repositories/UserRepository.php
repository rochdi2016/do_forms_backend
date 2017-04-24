<?php
namespace App\Repositories;
use \App\User;

class UserRepository extends Repository
{
    public function __construct(User $model)
    {
        $this->model = $model;
    }
    public function storeUser($data){
        $user = new User();
        $user->email = $data['email'];
        $user->name = $data['name'];
        $user->password = $data['password'];
        $user->save();
    }
}