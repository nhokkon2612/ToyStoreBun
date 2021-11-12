<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterNewUser;
use App\Http\Services\LoginService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    protected $loginService;

    public function __construct(LoginService $loginService)
    {
        return $this->loginService = $loginService;
    }

    public function showFormLoginAdmin()
    {
        return view('admin.login');
    }

    public function checkLoginAdmin(Request $request)
    {
        return $this->loginService->loginAdmin($request);
    }

    public function logoutAdmin()
    {
        Session::forget('adminInfo');
        return redirect()->route('admin.login');
    }

    public function showFormLoginUser()
    {
        return view('user.login');
    }

    public function showFormAddInfo()
    {

    }

    public function addUserInfo(Request $request)
    {

    }

    public function showFormLogin()
    {
        return view('user.login');
    }

    public function login(LoginRequest $request)
    {
        return $this->loginService->loginUser($request);
    }

    public function logout()
    {

    }

    public function register(RegisterNewUser $request)
    {
        $this->loginService->registerUser($request);
    }
}
