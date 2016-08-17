# Codeigniter Framework(Modified)

Modified version of codeigniter included some feature

  - Eloquent ORM
  - Pagination
  - PHP dotenv(.env)
  - Intervation for Image Manupulation
  - Symphony vardumper

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

### Guzzle Http client
Guzzle is a PHP HTTP client that makes it easy to send HTTP requests and trivial to integrate with web services.
Example:

```sh
$client  = new \GuzzleHttp\Client(['http_errors' => false]);
$URL='url here';
$username='username';
$password='password';
$response = $client->get($URL, ['auth' => [$username, $password]]);
// or like
$response = $client->post('http://httpbin.org/post', [
    'form_params' => [
        'field_name' => 'abc',
        'other_field' => '123',
        'nested_field' => ['nested' => 'hello']
    ]
]);
// return this response as object
$object = json_decode($response->getBody()->getContents());
```

* [Guzzle] - For Details Guzzle Documentation
  [Guzzle]:<http://docs.guzzlephp.org/en/latest/index.html>


### Version
1.0
