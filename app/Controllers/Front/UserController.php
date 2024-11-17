<?php

namespace App\Controllers\Front;

use App\Models\User;
use Core\Helper;

class UserController
{
    public static function index(){
        require_once Helper::getViewFileExists('/users');
    }
    public static function profile(){
        $user = User::getUserById($_SESSION['user']['id']);
        require_once Helper::getViewFileExists('/profile');
    }

    public static function update(){

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $userId = $_SESSION['user']['id'];
            User::updateUser($userId, trim($_POST['name']), trim($_POST['email']));
            header('Location: /profile');
            exit();
        }
    }

}