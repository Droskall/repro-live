<?php

namespace App\Model\Manager;

use App\Model\DB;
use App\Model\Entity\Article;
use DateTime;

class ArticleManager
{
    public function findAll(): array
    {
        $articles = [];
        $query = DB::getPDO()->query("SELECT * FROM article");
        if ($query) {
            $useManager = new UserManager();
            $format = 'Y-m-d H:i:s';

            foreach ($query->fetchAll() as $articleData) {
                $article = new Article();
                $article->setAutor($useManager->getUserById($articleData['author']));
                $article->setContent($article['content']);
                $article->setTitle($article['title']);
                $article->getDateAdd(DateTime::createFromFormat($format, $articleData['date_add']));
            }
        }

        return $articles;
    }

}
