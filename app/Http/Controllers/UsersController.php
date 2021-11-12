<?php

namespace App\Http\Controllers;

use App\Http\Repositories\UsersRepository;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterNewUser;
use App\Http\Services\UsersService;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    protected $userService;
    public function __construct(UsersService $userService)
    {
        return $this->userService=$userService;
    }

    public function checkOutCart()
    {
        if (!session('user.login')){
            return redirect()->route('user.login');
        }
    }
}
