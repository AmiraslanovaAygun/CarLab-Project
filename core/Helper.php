<?php

namespace Core;


class Helper{

    public static function getViewFileExists($file){
        $filename = '../app/Views'.$file.'.php';

        if(file_exists($filename)){
            return $filename;
        }

        else{
            echo "File not found";
            exit();
        }
    }

    public static function activeOrNone($path): string {
        $request = $_SERVER['REQUEST_URI'];
        switch ($request) {
            case '/':
            case '/home':
            case '/about':
            case '/blog':
            case '/cars':
            case '/contact':
            case '/pricing':
            case '/services':
            case '/register':
            case '/login':
            case '/profile':
            case '/logout':
            case '/dashboard':
            case '/users':
            if ($request == $path) {
                return "active";
            }
            break;
            default:
                return "";
        }
        return "";
    }
}
