<?php

class UserModel extends BaseModel
{
    protected $table = 'users';
    protected $hidden = ['password'];
}