<?php

namespace App\Models;

class OffreEmploi {
    private int $id;
    private string $poste;
    private float $salaire;
    private string $qualifications;
    private string $lieu;
    private DateTime $date_publication;

    private string $categorie;
    private array $tags; // List<Tag>
    private Recruteur $recruteur;

    public function __construct(
        int $id,
        string $poste,
        float $salaire,
        string $qualifications,
        string $lieu,
        DateTime $date_publication,
        string $categorie,
        array $tags,
        Recruteur $recruteur
    ) {
        $this->id = $id;
        $this->poste = $poste;
        $this->salaire = $salaire;
        $this->qualifications = $qualifications;
        $this->lieu = $lieu;
        $this->date_publication = $date_publication;
        $this->categorie = $categorie;
        $this->tags = $tags;
        $this->recruteur = $recruteur;
    }

    public function creer(): void {
        // Logic to create a job offer
    }

    public function modifier(): void {
        // Logic to modify a job offer
    }

    public function supprimer(): void {
        // Logic to delete a job offer
    }
}
