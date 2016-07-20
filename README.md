# Codeigniter Framework(Modified)

Modified version of codeigniter included some feature

  - Eloquent ORM
  - Pagination
  - PHP dotenv(.env)
  - Intervation for Image Manupulation
  - Symphony vardumper

> Database credential will be placed in .env file in the root directory 

### About Pagination
To work with Pagination library perfectly load the `paginate` method in controller constructor. This
pagination library support `bootstrap style pagination`.
```sh
public function paginate()
{
    $currentPage = isset($_GET['page']) ? (int) $_GET['page'] : 1;
    Paginator::currentPageResolver(function () use ($currentPage) {
      return $currentPage;
    });
}
```

## Image Intervention System Requirements

   - PHP >= 5.4
   - Fileinfo Extension
   - GD Library (>=2.0) … or …
   - Imagick PHP extension (>=6.5.7)

## Creating The Eloquent ORM
  - Codeigniter active recored/models will placed in default folder application/models dir.
  - Eloquent model will be placed in application/models dir.
  - All Eloquent model will be autoload defined in application/config/autoload.php

## Using The Eloquent ORM
```sh
class User extends Illuminate\Database\Eloquent\Model {}

$users = User::where('votes', '>', 1)->get();

// For Pagination
$users = User::paginate(10);
```

### Version
1.0
