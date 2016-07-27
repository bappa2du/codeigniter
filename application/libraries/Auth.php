<?php

class Auth
{
    private $ci;
    private $userTable = 'users';
    private $authKey = 'auth';

    function __construct()
    {
        $this->ci = &get_instance();
    }

    public function authSessionObject()
    {
        return $_SESSION[$this->authKey];
    }

    public function protectPassword()
    {
        if (isset($_SESSION[$this->authKey]->password)) {
            unset($_SESSION[$this->authKey]->password);
        }
    }

    public function setAuthSession($object)
    {
        /*if (isset($_SESSION[$this->authKey])) {
            die('session exists');
        }*/
        $_SESSION[$this->authKey] = $object;
        $this->protectPassword();
        return true;
    }

    public function check()
    {
        if (isset($_SESSION[$this->authKey])) {
            return true;
        }
        return false;
    }

    public function destroyAuthSession()
    {
        if (isset($_SESSION[$this->authKey])) {
            unset($_SESSION[$this->authKey]);
            return true;
        }
        return false;
    }

    public function login(array $credentials)
    {
        if (empty($credentials)) {
            return false;
        }
        if (!isset($credentials['password'])) {
            return false;
        }
        $password = $credentials['password'];
        unset($credentials['password']);
        foreach ($credentials as $key => $credential) {
            $this->ci->db->where($key, $credential);
        }
        $user = $this->ci->db->get($this->userTable)->row();
        if (empty($user)) {
            return false;
        }
        if (password_verify($password, $user->password)) {
            $this->setAuthSession($user);
            return true;
        }
        return false;
    }

    public function logout()
    {
        return $this->destroyAuthSession();
    }

    public function loginById($id)
    {
        $user = $this->ci->db->where('id', $id)->get($this->userTable)->row();
        if (empty($user)) {
            return false;
        }
        return $this->setAuthSession($user);

    }

    public function attempt(array $credentials)
    {
        return $this->login($credentials);
    }

    public function user()
    {
        if ($this->check()) {
            return $this->authSessionObject();
        }
        return false;
    }

    public function userModel()
    {
        $auth_user_id = $this->user()->id;
        $model = UserModel::find($auth_user_id);
        return $model;
    }

}
