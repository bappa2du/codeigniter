<?php

use Cartalyst\Sentinel\Native\Facades\Sentinel;

class Authentication extends CI_Controller
{
    public function login()
    {
        $r = Sentinel::register([
            'email'    => 'test@example.com',
            'password' => 'foobar',
            'user_name'=> 'Iftakharul Alam'
        ]);
        dump($r);
        die();
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
