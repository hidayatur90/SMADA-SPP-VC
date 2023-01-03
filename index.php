<?php

$request = $_SERVER['REQUEST_URI'];

switch (true) {
    case '/' :
        require 'login/views/login_view.php';
        break;
    case '' :
        require '/views/index.php';
        break;
    case '/about' :
        require '/views/about.php';
        break;
    default:
        http_response_code(404);
        echo('Page not found');
        break;
}