<?php

function view($view_file)
{
    $ci = &get_instance();
    $ci->load->view($view_file);
}

function template($view_file,$template,$data='')
{
    $ci = &get_instance();
    $view_data['content'] = $ci->load->view($view_file,$data,true);
    $ci->load->view($template,$view_data);
}

function session($param)
{
    if (is_array($param)) {
        foreach ($param as $k => $p) {
            $_SESSION[$k] = $p;
        }
    } elseif (is_string($param)) {
        if (isset($_SESSION[$param])) {
            return $_SESSION[$param];
        }
        return false;
    }
}

function session_remove($key)
{
    unset($_SESSION[$key]);
}

function _post($param = null)
{
    $ci = &get_instance();
    return $ci->input->post($param);
}

function _get($param = null)
{
    $ci = &get_instance();
    return $ci->input->post($param);
}

function password($text, $encryption = PASSWORD_BCRYPT)
{
    return password_hash($text, $encryption);
}

function set_auth($user_object)
{
    $_SESSION['auth_user'] = $user_object;
}

function auth_user()
{
    return $_SESSION['auth_user'];
}

function check_auth()
{
    if(isset($_SESSION['auth_user']))
        return true;
    return false;
}

function has_access()
{
    if(isset($_SESSION['auth_user']))
        return true;
    redirect('/');
}

function auth_destroy()
{
    unset($_SESSION['auth_user']);
}