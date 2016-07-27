<?php


class UserModel extends BaseModel
{
    protected $table = 'users';
    protected $fillable = ['user_name','email','password'];
    protected $hidden = ['password'];
}
