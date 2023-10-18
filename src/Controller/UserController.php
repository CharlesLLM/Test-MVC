<?php

require_once('src/Entity/User.php');

function index() {
    $users = User::findUsers();

    require_once('views/user/index.php');
}

function login() {
    if (isset($_SESSION['user'])) {
        header("Location: /test-mvc/movie/index");
    }

    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $user = User::findUser($username);
        if ($user && password_verify($password, $user->getPassword())) {
            session_start();
            $_SESSION['user'] = $user->getUsername();
            header("Location: /test-mvc/movie/index");
        } else {
            $error = "Identifiants incorrects.";
        }
    }

    require_once('views/user/login.php');
}

function logout() {
    if (isset($_SESSION['user'])) {
        unset($_SESSION['user']);
    }

    header("Location: /test-mvc/user/login");
}

function register() {
    if (isset($_POST['submit'])) {
        if (!User::findUser($_POST['username'])) {
            User::register($_POST['username'], $_POST['password']);
        } else {
            $error = "Un compte existe déjà avec cet identifiant.";
        }
    }

    require_once('views/user/register.php');
}
