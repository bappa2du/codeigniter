<?php

use Illuminate\Contracts\Auth;

class Authentication extends CI_Controller
{
    public function login()
    {
        view('auth/login');
    }

    public function index()
    {
        UserModel::create([
            'first_name' => 'bappa',
            'last_name'  => 'raz',
            'email'      => 'bappa2du@outlook.com',
            'password'   => password('bappa123'),
        ]);
        echo 'Created';
    }

    public function attempt()
    {
        $input = _post();
        if ($this->auth->attempt($input)) {
            dump($this->auth->userModel());
        }
        dd('exit');
        redirect('admin');
    }

    public function logout()
    {
        $this->auth->logout();
        redirect(base_url());
    }
}
