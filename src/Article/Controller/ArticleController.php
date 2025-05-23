<?php

namespace App\Article\Controller;

use App\Database\DbConnection;
use PDO;

class ArticleController
{
    public function listArticle()
    {
        // requete en bdd pour récupérer la liste des articles (créer la table en bdd biensûr)
        $query = DbConnection::getPdo()->prepare('SELECT * FROM article');
        $query->execute();

        $articles = $query->fetchAll(PDO::FETCH_OBJ);

        // renvoyer le résultat et donner un template à utiliser
        // on voudra retourner un tableau

        // a la place de return un array appeler une méthode
        /*return $this->render('pages/articles/list.php', [
            'articles' => $articles,
        ]);*/

        return [
            'template' => 'pages/articles/list.php',
            'articles' => $articles,
        ];
    }
}