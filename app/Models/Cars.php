<?php

namespace App\Models;

class Cars {
    public static function createCar(string $brand, string $model, string $image, float $price_per_day): bool {
        global $db;
        $stmt = $db->getConnectionInstance()->prepare("INSERT INTO cars (brand, model, image, price_per_day) VALUES (?, ?, ?, ?)");
        return $stmt->execute([$brand, $model, $image, $price_per_day]);
    }

    public static function getCarById(int $id) {
        global $db;
        $stmt = $db->getConnectionInstance()->prepare("SELECT * FROM cars WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    public static function updateCar(int $id, string $brand, string $model, string $image, float $price_per_day): bool {
        global $db;
        $stmt = $db->getConnectionInstance()->prepare("UPDATE cars SET brand = ?, model = ?, image = ?, price_per_day = ? WHERE id = ?");
        return $stmt->execute([$brand, $model, $image, $price_per_day, $id]);
    }

    public static function updateCarStatusToRented(int $id): bool
    {
        global $db;
        $stmt = $db->getConnectionInstance()->prepare("UPDATE cars SET status = ? WHERE id = ?");
        return $stmt->execute(['rented', $id]);
    }

    public static function updateCarStatusToAvailable(int $id): bool
    {
        global $db;
        $stmt = $db->getConnectionInstance()->prepare("UPDATE cars SET status = ? WHERE id = ?");
        return $stmt->execute(['available', $id]);
    }

    public static function deleteCarById(int $id): bool {
        global $db;
        $stmt = $db->getConnectionInstance()->prepare("DELETE FROM cars WHERE id = ?");
        return $stmt->execute([$id]);
    }


    public static function getAllCars(): array {
        global $db;
        $stmt = $db->getConnectionInstance()->prepare("SELECT * FROM cars");
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
