<?php

use Illuminate\Support\Facades\Session as Session;

class Authentication extends CI_Controller
{
    public function login()
    {
        view('auth/login');
    }

    public function index()
    {
        Sentinel::registerAndActivate([
            'first_name'=>'bappa',
            'last_name'=>'raz',
            'email'=>'bappa2du@outlook.com',
            'password'=>'bappa123',
        ]);
        echo 'Created';
    }

    public function attempt()
    {
        dd(session(['bappa'=>'name']));
        dd(Session::get('bappa'));
        $request = Request::createFromGlobals();
        Sentinel::forceAuthenticate($request->request->all());
        redirect('admin');
    }

    public function logout()
    {
        Sentinel::logout();
        redirect(base_url());
    }
}
