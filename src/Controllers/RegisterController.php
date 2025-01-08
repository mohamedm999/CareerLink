<?php
session_start();

require_once __DIR__ . '../../../vendor/autoload.php';

use App\Models\Utilisateur;

class RegisterController
{
    public function Register(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nom = htmlspecialchars(trim($_POST['nom'] ?? ''));
            $email = htmlspecialchars(trim($_POST['email'] ?? ''));
            $mot_de_passe = trim($_POST['mot_de_passe'] ?? '');
            $role = trim($_POST['role'] ?? '');

            $_SESSION['input'] = ['name' => $nom, 'email' => $email, 'role' => $role];

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

            if (empty($role)) {
                $errors['role'] = 'Role est requis';
            }

            if (!empty($errors)) {
                $_SESSION['errors'] = $errors;
                header('Location: ../Views/auth/register.php');
                exit();
            }

            $utilisateur = new Utilisateur($nom, $email, $mot_de_passe, $role);
            $user = $utilisateur->findUserByEmail($email);

            if ($user) {
                $_SESSION['errors'] = ['message' => 'User already exists.'];
                header('Location: ../Views/auth/register.php');
                exit();
            } else {
                $utilisateur->s_inscrire($nom, $email, $mot_de_passe, $role);
                $_SESSION['success'] = 'Inscription réussie !';
                header('Location: ../Views/auth/login.php');
                exit();
            }

            unset($_SESSION['errors']);
            unset($_SESSION['input']);
        }
 
}
}

$controller = new RegisterController();
$controller->Register();