<?php

declare(strict_types = 1);

session_start();

include '../vendor/autoload.php';
use App\Controllers\AuthController;
use App\Controllers\Front\MyController;
use App\Controllers\Front\UserController;
use App\Controllers\Admin\DashboardController;
use Core\Database;

$config  = require '../config/config.php';
$db = new Database($config['db']);

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case $request == '/' || $request == '/home':
        MyController::index('/home');
        break;
    case '/about':
        MyController::index('/about');
         break;
    case '/blog':
        MyController::index('/blog');
        break;
    case '/cars':
        MyController::index('/cars');
        break;
    case '/bookCar':
        MyController::bookCar();
        break;
    case '/unBookCar':
        MyController::unBookCar();
        break;
    case '/contact':
        MyController::index('/contact');
        break;
    case '/pricing':
        MyController::index('/pricing');
        break;
    case '/profile':
        UserController::profile();
        break;
    case '/updateUser':
        UserController::update();
        break;
    case '/register':
        AuthController::register();
        break;
    case '/login':
        AuthController::login();
        break;
        case '/logout':
        AuthController::logout();
        break;
    case '/admin':
        DashboardController::dashboard();
        break;
    case '/admin/users':
        DashboardController::users();
        break;
    case '/admin/deleteUser':
        DashboardController::deleteUser();
        break;
    case '/admin/cars-list':
        DashboardController::cars();
        break;
    case '/admin/deleteCar':
        DashboardController::deleteCar();
        break;
    case '/admin/createCar':
        DashboardController::createCar();
        break;
    case '/admin/editCar':
        DashboardController::editCar();
        break;
    case '/admin/updateCar':
        DashboardController::updateCar();
        break;
    default:
        MyController::index('/404NotFound');
         break;
}



