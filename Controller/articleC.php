<?php
include '../config.php';
include '../Model/article.php';

class articleC
{
    public function listArticles()
    {
        $sql = "SELECT * FROM articles";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function deleteArticle($id)
    {
        $sql = "DELETE FROM articles WHERE id=:id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);

        try {
            $req->execute();
        } catch (Exception $e) {
            
            die('Error:' . $e->getMessage());
        }
    }

    function addArticles($article)
    {
        $sql = "INSERT INTO articles
        VALUES (NULL, :id,:fn,:ln, :ad,:ds,:st)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'id' => $article->getId(),
                'fn' => $article->getnom_article(),
                'ln' => $article->getdate(),
                'ds' => $article->getArtiste(),
                'ad' => $article->getType(),
                'st' => $article->getStatus()  
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function updatearticle($article, $id)
    {
        $sql = "UPDATE articles SET fn=:fn , ln=:ln, ad=:ad, st=:st WHERE id
        =:id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute(array(
                'id' => $id,
                'fn' => $article->getnom_article(),
                'ln' => $article->getdate(),
                'ds' => $article->getArtiste(),
                'ad' => $article->getType(),
                'st' => $article->getStatus()
                ));


            $query->execute([
                'id' => $id,
                'fn' => $article->getnom_article(),
                'ln' => $article->getdate(),
                'ds' => $article->getArtiste(),
                'ad' => $article->getType(),
                'st' => $article->getStatus()
            ]);
        } catch (PDOException $e) {
            die("erreur" . $e->getMessage());
        }
    }

    function showarticle($id)
    {
        $sql = "SELECT * from articles where id = $id";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (PDOException $e) {
            die("erreur" . $e->getMessage());
        } 
    }
}