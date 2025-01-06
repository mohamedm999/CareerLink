<?php

namespace App\Models;

class Candidat extends Utilisateur {
    private string $cv;
    private string $profil;
    private string $role; 

    public function __construct(int $id, string $nom, string $email, string $mot_de_passe, string $cv, string $profil) {
        parent::__construct($id, $nom, $email, $mot_de_passe);
        $this->cv = $cv;
        $this->profil = $profil;
        $this->role = 'candidat';
    }

    

}