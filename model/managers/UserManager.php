<?php

require 'model/managers/connection.php';

class UserManager 
{
    public static function getUser($pseudo)
    {
        $db = getConnection();
        $query = $db->prepare('SELECT * FROM users WHERE pseudo = :pseudo');
        $query->execute(array(
            'pseudo' => $pseudo
        ));
        $user = $query->fetch(PDO::FETCH_ASSOC);
        return $user;
    }

    public static function getUsers()
    {
        $db = getConnection();
        $query = $db->prepare('SELECT * FROM users');
        $query->execute();
        $users = $query->fetchAll();
        return $users;
    }

    public function addUser($pseudo, $email, $pwd)
    {
        $db = getConnection();
        $query = $db->prepare('INSERT INTO users(pseudo, email, pwd) VALUES(:pseudo, :email, :pwd)');
        $query->execute(array(
            'pseudo' => $pseudo,
            'email' => $email,
            'pwd' => $pwd
        ));
    }

    public function deleteUser($pseudo)
    {
        $db = getConnection();
        $query = $db->prepare('DELETE FROM users WHERE pseudo = :pseudo');
        $query->execute(array(
            'pseudo' => $pseudo
        ));
    }

    public function updateUser($pseudo, $email, $pwd)
    {
        $db = getConnection();
        $query = $db->prepare('UPDATE users SET email = :email, pwd = :pwd WHERE pseudo = :pseudo');
        $query->execute(array(
            'pseudo' => $pseudo,
            'email' => $email,
            'pwd' => $pwd
        ));
    }
}