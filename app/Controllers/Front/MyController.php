<?php

namespace App\Controllers\Front;
use App\Models\Cars;
use Core\Helper;

class MyController
{
        public static function index($request){
            $cars = Cars::getAllCars();
            require_once Helper::getViewFileExists($request);
        }

        public static function bookCar(){
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $carId = intval($_POST['id']);
                Cars::updateCarStatusToRented($carId);
                header('Location: /cars');
                exit();
            }
        }

    public static function unBookCar(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $carId = intval($_POST['id']);
            Cars::updateCarStatusToAvailable($carId);
            header('Location: /cars');
            exit();
        }
    }


}