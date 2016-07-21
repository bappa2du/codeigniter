<?php

use Cartalyst\Sentinel\Native\Facades\Sentinel;

class Authentication extends CI_Controller
{
    public function login()
    {
        view('auth/login');
    }

    public function attempt()
    {
        $r = Sentinel::register([
            'email'    => 'test@example.com',
            'password' => 'foobar',
        ]);
        dump($r);
    }

    public function logout()
    {
        session_destroy();
        redirect(base_url());
    }
}
