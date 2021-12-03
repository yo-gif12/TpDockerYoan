<?php

function current_url()
{
    $url      = $_SERVER['REQUEST_URI'];
    $validURL = str_replace("&", "&amp;", $url);

    return $_SERVER['REQUEST_URI'];
}


if (in_array(current_url(),[
    "/",
    "/pages",
    "/Users/login",
    "/posts",
    "/register"
    ])) {
    $controller -> site_url(current_url());
}else{
    echo '<h1>Test404</h1>';
    var_dump(current_url());
}