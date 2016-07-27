# Codeigniter Framework(Modified)

Modified version of codeigniter included some feature

  - Setinel Auth (Authentication & Authorization)
  - Eloquent ORM
  - Pagination
  - PHP dotenv(.env)
  - Intervation for Image Manupulation
  - Symphony vardumper


  * [Seninel] - For Details Documentation
    [Seninel]:<https://cartalyst.com/manual/sentinel/2.0>

> Database credential will be placed in .env file in the root directory 

## Image Intervention System Requirements

   - PHP >= 5.4
   - Fileinfo Extension
   - GD Library (>=2.0) … or …
   - Imagick PHP extension (>=6.5.7)

## Image Intervention Uses
```sh
use Intervention\Image\ImageManager;

// Sample Method

public function upload_image($image_file, $image_name)
{
    // default image driver is gd
    $image = new ImageManager();
    // For imagick driver
    $image = new ImageManager(['driver' => 'imagick']);
    $image->make($image_file)
        ->resize(200, null, function ($constraint) {
            $constraint->aspectRatio();
        })
        ->crop(200, 200)
        ->save('upload/path/' . $image_name);
}

```
  * [Intervention Image] - For Details Documentation
  [Intervention Image]:<http://image.intervention.io/>

## Creating The Eloquent ORM
  - Codeigniter active recored/models will placed in default folder application/models dir.
  - Eloquent model will be placed in application/eloquent dir.
  - All Eloquent model will be autoload defined in application/config/autoload.php

## Using The Eloquent ORM
```sh
class User extends Illuminate\Database\Eloquent\Model {}

$users = User::where('votes', '>', 1)->get();

// For Pagination
$users = User::paginate(10);
```

* [Eloquent ORM] - For Details Laravel Documentation
  [Eloquent ORM]:<https://laravel.com/docs/5.2/eloquent>

### About Pagination
To work with Pagination library perfectly load the `paginate` method in controller constructor. This
pagination library support `bootstrap style pagination`.
```sh
use Illuminate\Pagination\Paginator;

public function paginate()
{
    $currentPage = isset($_GET['page']) ? (int) $_GET['page'] : 1;
    Paginator::currentPageResolver(function () use ($currentPage) {
      return $currentPage;
    });
}
```

### Version
1.0
