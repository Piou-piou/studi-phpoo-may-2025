<?php

namespace App\Article\Controller;

use App\Database\DbConnection;

class ArticleController
{
    public function listArticle()
    {
        // requete en bdd pour récupérer la liste des articles (créer la table en bdd biensûr)
        //$query = DbConnection::getPdo()->xxx();

        // renvoyer le résultat et donner un template à utiliser
        // on voudra retourner un tableau

        return [
            'template' => 'articles.php',
            'users' => []
        ];
    }
}