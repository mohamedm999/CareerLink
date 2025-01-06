<?php

namespace App\Models;

class Recruteur extends Utilisateur {
    private string $nom_entreprise;
    private string $email_professionnel;

    public function __construct(int $id, string $nom, string $email, string $mot_de_passe, string $nom_entreprise, string $email_professionnel, string $role) {
        parent::__construct($id, $nom, $email, $mot_de_passe);
        $this->nom_entreprise = $nom_entreprise;
        $this->email_professionnel = $email_professionnel;
    }
}
