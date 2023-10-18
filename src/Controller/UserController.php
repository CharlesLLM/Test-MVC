<?php

require_once('src/Entity/User.php');

function index() {
    $users = User::findUsers();

    require_once('views/user/index.html');
}

function login() {
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $user = User::findUser($username);
        if ($user && password_verify($password, $user->getPassword())) {
            session_start();
            $_SESSION['id'] = $user->getId();
            $_SESSION['username'] = $username;
            header("Location: ");
        } else {
            $error = "Identifiants incorrects.";
        }
    }

    require_once('views/user/login.html');
}

function register() {
    if (isset($_POST['submit'])) {
        User::register($_POST['username'], $_POST['password']);
    }

    require_once('views/user/register.html');
}
