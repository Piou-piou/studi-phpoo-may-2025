<?php

namespace App\Article\Controller;

use App\Controller\BaseController;
use App\Database\DbConnection;
use PDO;

class ArticleController extends BaseController
{
    public function listArticle()
    {
        // requete en bdd pour récupérer la liste des articles (créer la table en bdd biensûr)
        $query = DbConnection::getPdo()->prepare('SELECT * FROM article');
        $query->execute();

        $articles = $query->fetchAll(PDO::FETCH_OBJ);

        return $this->render('pages/articles/list.php', [
            'articles' => $articles,
        ]);
    }
}