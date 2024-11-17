<?php

namespace App\Models;


class User{

    public static function getAllUsers()
    {
        global $db;
        $stmt = $db->getConnectionInstance()->prepare("SELECT id, name, email, role FROM users");
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
    public static function getUserById($id){
        global $db;
        $stmt = $db->getConnectionInstance()->prepare("SELECT * FROM users WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    public static function getUserByEmail($email){
        global $db;
        $stmt = $db->getConnectionInstance()->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    public static function create($name, $email, $role, $password){
         global $db;
         $stmt = $db->getConnectionInstance()->prepare("INSERT INTO users (name, email, role, password) VALUES (?, ?, ?, ?)");
         return $stmt->execute([$name, $email, $role, $password]);
    }

    public static function deleteUserById(int $id): bool
    {
        global $db;
        $stmt = $db->getConnectionInstance()->prepare("DELETE FROM users WHERE id = ?");
        return $stmt->execute([$id]);
    }
    public static function updateUser(int $id, string $name, string $email): bool
    {
        global $db;
        $stmt = $db->getConnectionInstance()->prepare("UPDATE users SET name = ?, email = ? WHERE id = ?");
        return $stmt->execute([$name, $email, $id]);
    }
}
