<?php

class Authentication extends CI_Controller
{
    public function login()
    {
        view('auth/login');
    }

    public function logout()
    {
        session_destroy();
        redirect(base_url());
    }
}
