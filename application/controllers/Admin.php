<?php



class Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function check_user()
    {
    }

    public function index()
    {
//        $this->check_user();
        echo 'Login';
    }
}