<?php

namespace App\Http\Services;

use App\Http\Repositories\LoginRepository;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginService
{
    protected $loginRepository;

    public function __construct(LoginRepository $loginRepository)
    {
        return $this->loginRepository = $loginRepository;
    }

    public function loginAdmin($request)
    {
        $email = $request->email;
        $password = $request->password;
        $user = $this->loginRepository->findUser($email);
        if ($user == null) {
            Session::flash('error', 'Tài Khoản mật khẩu không chính xác');
            $ad = session('adminInfo');
            return redirect()->route('admin.login');
        } else {
            $check = Hash::check($password, $user->password);
            if ($check == true && $user->role == 1) {
                Session::put('adminInfo', $user);
                return redirect()->route('dashboard');
            } else {
                Session::flash('error', 'Tài Khoản mật khẩu không chính xác');
                return redirect()->route('admin.login');
            }
        }
    }

    public function loginUser($request)
    {
        $email = $request->email;
        $password = $request->password;
        $user = $this->loginRepository->findUser($email);
        if ($user == null) {
            Session::flash('error', 'Tài Khoản mật khẩu không chính xác');
            return redirect()->route('user.showFormLogin');
        } else {
            $check = Hash::check($password, $user->password);
            if ($check == true && $user->role == 0) {
                Session::put('userInfo', "$user");
                if (!session('infoUser')) {
                    return redirect()->route('user.showFormAddInfo');
                } else {
                    return redirect()->route('user.checkout.cart');
                }
            } else {
                Session::flash('error', 'Tài Khoản mật khẩu không chính xác');
                return redirect()->route('user.showFormLogin');
            }
        }
    }

    public function registerUser($request)
    {
        $newUser = $this->loginRepository->findUser($request->email);
        if ($newUser) {
            Session::flash('error', 'Email này đã tồn tại');
            return back();
        } else {
            $newUser = new User();
            $newUser->email = $request->email;
            $newUser->name = $request->name;
            $newUser->password = Hash::make($request->email);
            $newUser->save();

        }
    }


}
