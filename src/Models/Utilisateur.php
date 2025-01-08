<?php

namespace App\Models;
session_start();

require_once __DIR__ . '../../../vendor/autoload.php';
use App\Config\Database;
use PDO;
use PDOException;


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

    public function s_inscrire($nom, $email, $mot_de_passe, $role): void {
        // Hash the password using BCRYPT
        $hashedPassword = password_hash($mot_de_passe, PASSWORD_BCRYPT);
    
        // Prepare the SQL query to insert user data
        $query = "INSERT INTO Utilisateur  (nom, email, mot_de_passe, user_role) VALUES (:username, :email, :password, :role)";
    
        try {
            // Prepare the statement
            $stmt = $this->conn->prepare($query);
    
            // Bind the parameters to the query
            $stmt->bindParam(':username', $nom);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $hashedPassword);
            $stmt->bindParam(':role', $role);
    
            // Execute the query
            $stmt->execute();
    
            // Optionally, print success message or log it
            echo "User successfully registered.";
        } catch (PDOException $e) {
            // Handle errors
            echo "Error: " . $e->getMessage();
        }
    }
    

    public function se_connecter(): array {
       
        $user = $this->findUserByEmail($this->email);
    

        if ($user && password_verify($this->mot_de_passe, $user['mot_de_passe'])) {
            return [
                'success' => true,
                'user' => $user,
                'message' => 'Connexion réussie !'
            ];
        }

        return [
            'success' => false,
            'message' => 'Identifiants invalides. Veuillez réessayer.'
        ];
    }
}
    
// $utilisateur = new Utilisateur('Admin User','admin@example.com','admin123','admin');
// $utilisateur->s_inscrire('Admin User','admin@example.com','admin123','admin');

// $utilisateur = new Utilisateur('Recruiter User','recruiter@example.com','recruiter123','recruiter');
// $utilisateur->s_inscrire('Recruiter User','recruiter@example.com','recruiter123','recruiter');

// $utilisateur = new Utilisateur('Candidate User','candidate@example.com','candidate123','candidate');
// $utilisateur->s_inscrire('Candidate User','candidate@example.com','candidate123','candidate');





