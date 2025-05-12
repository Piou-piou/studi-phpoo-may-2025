<?php

namespace App\Person;

use App\Person\Interface\PersonneInterface;

class Homme implements PersonneInterface
{

    public function definirNom(string $nom): string
    {
        return $nom;
    }

    public function definirPrenom(string $prenom): string
    {
        return $prenom;
    }

    public function definirAdresse(string $adresse): void
    {
        return;
    }

    public function definirAge(int $age)
    {
        // TODO: Implement definirAge() method.
    }

    public function test()
    {

    }
}