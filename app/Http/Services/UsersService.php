<?php

namespace App\Http\Services;

use App\Http\Controllers\LoginController;
use App\Http\Repositories\UsersRepository;
use App\Models\User;
use http\Env\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UsersService
{
    protected $userRepository;
    public function __construct(UsersRepository $userRepository)
    {
        return $this->userRepository=$userRepository;
    }
}
