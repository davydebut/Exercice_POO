<?php
require 'model/managers/connection.php';
require 'model/managers/UserManager.php';

if (isset($_POST['login'])) {
    $pseudo = $_POST['sr_pseudo'];
    $pwd = $_POST['password'];
    $user = UserManager::getUser($pseudo);
    $hash_pwd = $user['pwd'];
    if (password_verify($pwd, $hash_pwd)) {
        session_start();
        $_SESSION['user'] = $user;
        header('Location: index.php?status=Connected');
    } else {
        header('Location: signin.php?status=Error');
    }
}

/* $pseudo = $_POST['sr_pseudo'];
$user = UserManager::getUser($pseudo);
var_dump($user['pwd']);
var_dump($_SESSION['user']);
var_dump($_SESSION['user']['pseudo']); */

include 'view/partials/header.php';
include 'view/signinView.php';
