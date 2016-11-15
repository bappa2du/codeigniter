<?php

use Illuminate\Contracts\Auth;

class Authentication extends CI_Controller
{
    public function login()
    {
        view('auth/login');
    }

    public function attempt()
    {
        $input = _post();
        $check_user = UserModel::where('email',$input['email'])->first();
        if(!empty($check_user)){
            $hash_password = $check_user->password;
            if(password_verify($input['password'], $hash_password)){
                set_auth($check_user);
                redirect('admin');
            }
        } 
    }

    public function logout()
    {
        auth_destroy();
        redirect(base_url());
    }
}
