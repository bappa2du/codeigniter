<?php

class User extends BaseModel
{
    protected $table = 'users';
    protected $hidden = ['password'];
}
