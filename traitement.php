<?php
require 'model/managers/connection.php';
include 'view/partials/header.php';
include 'model/managers/UserManager.php';

if (isset($_POST['pseudo']) && isset($_POST['email']) && isset($_POST['pwd'])) {
    $pseudo = $_POST['pseudo'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $pwd_hash = password_hash($pwd, PASSWORD_BCRYPT);
    UserManager::addUser($pseudo, $email, $pwd_hash);
    header('Location: index.php?action=login');
}