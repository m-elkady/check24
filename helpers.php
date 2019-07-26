<?php
if (!function_exists('redirect')) {

    function redirect($page)
    {
        header("Location: {$page}");
        exit;
    }
}


if (!function_exists('back')) {

    function back()
    {
        $httpReferer = $_SERVER['HTTP_REFERER'];
        redirect($httpReferer);
    }
}