<?php
defined('BASEPATH') or exit('No direct script access allowed');

// use Illuminate\Pagination\Paginator;
// use Intervention\Image\ImageManager;

class Welcome extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // default image driver is gd
        // $this->image = new ImageManager(['driver' => 'imagick']);
        // $this->paginate();
    }

    /*public function paginate()
    {
    $currentPage = isset($_GET['page']) ? (int) $_GET['page'] : 1;
    Paginator::currentPageResolver(function () use ($currentPage) {
    return $currentPage;
    });
    }*/

    public function index()
    {
        // $user = UserModel::paginate();
        // dump($user);
        view('welcome');
    }

}
