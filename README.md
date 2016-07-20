# Codeigniter Framework(Modified)

Modified version of codeigniter included some feature

  - Eloquent ORM
  - PHP dotenv
  - Intervation for Image Manupulation
  - Symphony vardumper

## Image Intervention System Requirements

   - PHP >= 5.4
   - Fileinfo Extension
   - GD Library (>=2.0) … or …
   - Imagick PHP extension (>=6.5.7)

## Using The Eloquent ORM
```sh
class User extends Illuminate\Database\Eloquent\Model {}

$users = User::where('votes', '>', 1)->get();
```

### Version
1.0
