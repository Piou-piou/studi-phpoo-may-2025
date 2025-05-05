<?php

class Femme implements PersonneInterface
{

    public function definirNom(string $nom): string
    {
        return 'Mme '. $nom;
    }

    public function definirPrenom(string $prenom): string
    {
        // TODO: Implement definirPrenom() method.
    }

    public function definirAdresse(string $adresse): void
    {
        // TODO: Implement definirAdresse() method.
    }

    public function definirAge(int $age)
    {
        // TODO: Implement definirAge() method.
    }

    public function estEnceinte()
    {

    }
}