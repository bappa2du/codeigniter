<?php



class Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        has_access();
    }

    public function check_user()
    {
    }

    public function index()
    {
        template('admin/dashboard','admin/layout');
    }
}