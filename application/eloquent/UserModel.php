<?php


class UserModel extends BaseModel
{
    protected $table = 'users';
    protected $guarded = [];
    protected $hidden = ['password'];
}
