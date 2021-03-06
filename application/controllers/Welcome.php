<?php
defined('BASEPATH') or exit('No direct script access allowed');

// use Illuminate\Pagination\Paginator;
// use Intervention\Image\ImageManager;

class Welcome extends CI_Controller
{

    public function index()
    {
        // $this->paginate();
        // $user = UserModel::paginate();
        // UserModel::create([
        //     'username'=>'bappa',
        //     'password'=>password('bappa123'),
        //     'email'=>'bappa2du@gmail.com',
        //     'updated_at'=>time()
        //     ]);
        // $user = UserModel::get();
        // $user = UserModel::where('name',LIKE,'%Alex%');
        // dump($user);
        view('welcome');
    }

    /************Only for Example******************* 

    public function upload_image($image_file, $image_name)
    {
        // default image driver is gd
        $image = new ImageManager(['driver' => 'imagick']);
        $image->make($image_file)
            ->resize(200, null, function ($constraint) {
                $constraint->aspectRatio();
            })
            ->crop(200, 200)
            ->save('upload/path/' . $image_name);
    }

    public function paginate()
    {
        $currentPage = isset($_GET['page']) ? (int) $_GET['page'] : 1;
        Paginator::currentPageResolver(function () use ($currentPage) {
            return $currentPage;
        });
    }

    *************************************************/

}
