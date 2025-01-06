<?php

namespace App\Models;
session_start();

require_once __DIR__ . '../../../vendor/autoload.php';
use App\Config\Database;
use PDO;


class Utilisateur {
    protected int $id;
    protected string $nom;
    protected string $email;
    protected string $mot_de_passe;
    protected string $role;
    private $db;
    private $conn;
    public function __construct(string $nom = '', string $email = '', string $mot_de_passe = '', string $role = '') {

        $this->id = 0; 
        $this->nom = $nom;
        $this->email = $email;
        $this->mot_de_passe = $mot_de_passe;
        $this->role = $role;
        $this->db = new Database();
        $this->conn = $this->db->getConnection();
    }

    public function findUserByEmail(string $email) {
        $query = 'SELECT * FROM utilisateur WHERE email = :email';
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function s_inscrire(string $username, string $password): bool {
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        $query = "INSERT INTO users (username, password) VALUES (:username, :password)";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $hashedPassword);

        return $stmt->execute();
    }

    public function se_connecter(): void {
       
        $user = $this->findUserByEmail($this->email);
      
    
        if ($this->mot_de_passe == $user['mot_de_passe']){
            
            $_SESSION['user'] = $user; 
            $_SESSION['success'] = 'Connexion réussie !';
    
            header('Location: ../Views/admin/dashboard.php');
            exit;
        } else {
            
            $_SESSION['errors'] = ['message' => 'Identifiants invalides. Veuillez réessayer.'];
            header('Location: ../Views/auth/login.php');
            exit;
        }
    }
    
}




