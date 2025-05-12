<?php

namespace App\Person\Interface;
interface PersonneInterface
{
    public function definirNom(string $nom): string;

    public function definirPrenom(string $prenom): string;

    public function definirAdresse(string $adresse): void;

    public function definirAge(int $age);
}