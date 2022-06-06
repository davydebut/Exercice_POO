<?php
require 'model/managers/connection.php';
require 'model/managers/UserManager.php';

if (isset($_POST['register'])) {
    $pseudo = $_POST['pseudo'];
    $email = $_POST['email'];
    $pwd = $_POST['password'];
    $pwd_hash = password_hash($pwd, PASSWORD_BCRYPT);
    UserManager::addUser($pseudo, $email, $pwd_hash);
    header('Location: index.php?status=Success');
}

include 'view/partials/header.php';
include 'view/signupView.php';
?>