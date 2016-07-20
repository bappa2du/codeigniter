<?php

function view($view_file)
{
    $ci = &get_instance();
    $ci->load->view($view_file);
}
