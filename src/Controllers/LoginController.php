<?php
session_start();

require_once __DIR__ . '../../../vendor/autoload.php';

use App\Models\Utilisateur;

class LoginController
{
    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
       
            $nom = htmlspecialchars(trim($_POST['name'] ?? ''));
            $email = htmlspecialchars(trim($_POST['email'] ?? ''));
            $mot_de_passe = trim($_POST['password'] ?? '');

            $_SESSION['input'] = ['name' => $nom, 'email' => $email]; 

            $errors = [];

    
            if (empty($nom)) {
                $errors['name'] = 'Nom est requis';
            }

            if (empty($email)) {
                $errors['email'] = 'Adresse email est requise';
            } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors['email'] = 'Format d\'email invalide';
            }

            if (empty($mot_de_passe)) {
                $errors['password'] = 'Mot de passe est requis';
            }

            if (!empty($errors)) {
                $_SESSION['errors'] = $errors;
                header('Location: ../Views/auth/login.php');
                exit;
            }

    
            $utilisateur = new Utilisateur($nom, $email, $mot_de_passe);
            $user = $utilisateur->findUserByEmail($email);
        

            if ($user) {
                $utilisateur->se_connecter();
            } else {
                $_SESSION['errors'] = ['message' => 'User not found.'];
                header('Location: ../Views/auth/login.php');
                exit;
            }
            

    
            unset($_SESSION['errors']);

            // $_SESSION['user'] = $user; 
            // if ($user['user_role'] === 'Admin') {

            // }
           
            
        }


        header('Location: ../Views/auth/login.php');
        exit;
    }

    public function logout()
    
    {
        session_destroy();
        header('Location: ../Views/auth/login.php');
        exit;
    }
}

$controller = new LoginController();
$controller->login();
$controller->logout();
