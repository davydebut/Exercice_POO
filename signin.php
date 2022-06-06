<?php
require 'model/managers/connection.php';
require 'model/managers/UserManager.php';

if (!empty($_POST['login'])) {
    $pseudo = $_POST['sr_pseudo'];
    $pwd = $_POST['password'];
    $user = UserManager::getUser($pseudo);
    if (password_verify($pwd, $user['pwd'])) {
        session_start();
        $_SESSION['user'] = $user;
        header('Location: index.php');
    } else {
        header('Location: signin.php?status=Error');
    }
}

include 'view/partials/header.php';
include 'view/signinView.php';
?>