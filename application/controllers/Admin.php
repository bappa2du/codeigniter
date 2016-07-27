<?php
use Cartalyst\Sentinel\Native\Facades\Sentinel;



class Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->check_user();
    }

    public function check_user()
    {
        if(Sentinel::guest()){
            redirect(base_url());
        }
    }

    public function index()
    {
//        $this->check_user();
        echo 'Login';
    }
}