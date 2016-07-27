<?php

function view($view_file)
{
    $ci = &get_instance();
    $ci->load->view($view_file);
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
