<?php

namespace App\Http\Repositories;

use App\Models\User;

class LoginRepository
{
    protected $user;

    public function __construct(User $user)
    {
        return $this->user = $user;
    }

    public function findUser($email)
    {
        $user = User::where('email', '=', "$email")->get()
            ->first();
        return $user;
    }
}
