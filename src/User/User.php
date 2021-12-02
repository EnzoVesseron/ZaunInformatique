<?php
declare(strict_types=1);

class User
{
    private int $id;
    private string $lastName;
    private string $firstName;
    private string $phone;
    private string $ville;
    private string $codePostal;
    private string $adresse;

    public function __construct(array $data)
    {
        $this->id = (int)$data['IDCLIENT'];
        $this->firstName = $data['NOM'];
        $this->lastName = $data['PRENOM'];
        $this->phone = $data['TEL'] ?? "";
        $this->ville = $data['VILLE'] ?? "";
        $this->codePostal = $data['CODEPOSTAL'] ?? "";
        $this->adresse = $data['ADRESSE'] ?? "";
    }

}