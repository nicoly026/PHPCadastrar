<?php

use App\Controller\ 
{
    LoginController,
};

$uri_parse = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


switch($uri_parse)
{
    case '/cadastrar':
        LoginController::form();
    break;

    case '/cadastrar/save':
        LoginController::save();
    break;

    case '/cadastrar/delete':
        LoginController::delete();
    break;
    case '/login':
        LoginController::index();
    break;

    case '/login/auth':
        LoginController::auth();
    break;

    case '/login/logout':
        LoginController::logout();
    break;

    default:
        echo "oi";
    break;
}