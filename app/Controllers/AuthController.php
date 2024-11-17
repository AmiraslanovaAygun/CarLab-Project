<?php

namespace App\Controllers;
use App\Models\User;
use Core\Helper;

class AuthController
{
    public static function login(){

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = trim($_POST['email']);
            $password = trim($_POST['password']);
            $user = User::getUserByEmail($email);
            if(!$user){
                echo "User not found";
                die();
            }
            if(!password_verify($password, $user['password'])){
                echo "Wrong password";
                die();
            }
            $_SESSION['user'] = [
                'id' => $user['id'],
                'name' => $user['name'],
                'role' => $user['role'],
            ];


            header('Location: /home');
            die();
        }

        require_once Helper::getViewFileExists('/login');
    }

    public static function register()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = trim($_POST['name']);
            $email = trim($_POST['email']);
            $password = trim($_POST['password']);
            $role = 'customer';

            $user = User::create($name, $email, $role, password_hash($password, PASSWORD_DEFAULT));

            header('Location: /login');
            exit;
        }
        require_once Helper::getViewFileExists('/register');

    }

    public static function logout(){
        unset($_SESSION['user']);
        session_destroy();
        header('Location: /login');
        exit;
    }
}