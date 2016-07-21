<?php

use Cartalyst\Sentinel\Users\EloquentUser;

class UserModel extends EloquentUser
{
    protected $table = 'users';
    protected $fillable = ['user_name','email','password'];
    protected $hidden = ['password'];
}
