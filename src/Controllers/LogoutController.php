<?php

class LogoutController

{

public function logout()

    {   session_start();
        session_unset();
        session_destroy();
        header('Location: ../Views/auth/login.php');
        exit();
    }
}

$controller = new LogoutController();
$controller->logout();