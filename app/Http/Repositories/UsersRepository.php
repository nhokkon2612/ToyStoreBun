<?php

namespace App\Http\Repositories;

use App\Models\User;

class UsersRepository
{
    protected $userModel;

    public function __construct(User $user)
    {
        return $this->userModel = $user;
    }

    public function findUser($email)
    {
        $user=User::where('email','=',"$email")
            ->first();
        return $user;
    }
}
