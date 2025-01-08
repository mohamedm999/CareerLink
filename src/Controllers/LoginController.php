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
                exit();
            }

    
            $utilisateur = new Utilisateur($nom, $email, $mot_de_passe);
            $response = $utilisateur->se_connecter();
            


            if ($response['success']) {
                $user = $response['user'];
                $_SESSION['user']=$user ;
                if ($user['user_role'] == 'admin') {
               
                    header('Location: ../Views/admin/home/dashboard.php');
                    exit();

                } elseif ($user['user_role'] == 'recruiter') {
               
                    header('Location: ../Views/recruiter/index.php');
                    exit();

                }elseif ($user['user_role'] == 'candidate') {
               
                    header('Location: ../Views/Candidate/index.php');
                    exit();

                }else {

                    $_SESSION['errors'] = ['message' => 'Rôle utilisateur inconnu.'];
                    header('Location: ../Views/auth/login.php');
                    exit();

                }
    
                exit();

            } else {
                $_SESSION['errors'] = ['message' => $response['message']];
                header('Location: ../Views/auth/login.php');
                exit();
            }
            

    
            unset($_SESSION['errors']);
            unset($_SESSION['input']); 
            
        }


        header('Location: ../Views/auth/login.php');
        exit();
    }


}

$controller = new LoginController();
$controller->login();
