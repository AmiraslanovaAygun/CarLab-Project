<?php

namespace App\Controllers\Admin;

use App\Models\Cars;
use App\Models\User;
use Core\Helper;

class DashboardController
{
    public static function dashboard(){
        $user = User::getUserById($_SESSION['user']['id']);
        require_once Helper::getViewFileExists('/Admin/dashboard');
    }

    public static function users(){
        $users = User::getAllUsers();
        require_once Helper::getViewFileExists('/Admin/users');
    }
    public static function deleteUser(){

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $userId = intval($_POST['id']);
            User::deleteUserById($userId);
            header('Location: /admin/users');
            exit();
        }
    }

    public static function cars(){
        $cars = Cars::getAllCars();
        require_once Helper::getViewFileExists('/Admin/cars-list');
    }
    public static function createCar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $brand = trim(htmlspecialchars($_POST['brand']));
            $model = trim(htmlspecialchars($_POST['model']));
            $price = trim(htmlspecialchars($_POST['price_per_day']));

            if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
                $uploadDir = $_SERVER['DOCUMENT_ROOT'] . '/assets/Admin/images/cars/';
                $imageName = basename($_FILES['image']['name']);
                $uploadFile = $uploadDir . $imageName;

                if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile)) {
                    Cars::createCar($brand, $model, $imageName, $price);
                    header('Location: /admin');
                    exit();
                } else {
                    echo "Failed to download file.";
                }
            } else {
                echo "The image upload process failed.";
            }
        }
    }


    public static function deleteCar(){

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $carId = intval($_POST['id']);
            Cars::deleteCarById($carId);
            header('Location: /admin/cars-list');
            exit();
        }
    }

    public static function editCar(){

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $user = User::getUserById($_SESSION['user']['id']);
            $carId = intval($_POST['id']);
            $car = Cars::getCarById($carId);
            require_once Helper::getViewFileExists('/Admin/dashboard');
            exit();
        }
    }

    public static function updateCar()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $carId = intval($_POST['id']);
            $brand = $_POST['brand'];
            $model = $_POST['model'];
            $price = $_POST['price_per_day'];

            if (!empty($_FILES['image']['name'])) {
                $imageName = $_FILES['image']['name'];
                $uploadDir = $_SERVER['DOCUMENT_ROOT'] . '/assets/Admin/images/cars/';
                $uploadFile = $uploadDir . $imageName;
                move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile);

                Cars::updateCar($carId, $brand, $model, $imageName, $price);
                header('Location: /admin/cars-list');
                exit();
            }
        } else
            echo "The image upload process failed.";

    }





}