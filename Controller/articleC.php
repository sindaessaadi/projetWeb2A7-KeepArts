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

    function addArticles(Article $article)
    {
        $sql = "INSERT INTO articles (nom, type, date, status, artiste) VALUES (:nom, :type, :date, :status, :artiste)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'nom' => $article->getNom(),
                'type' => $article->getType(),
                'date' => $article->getdate(),
                'status' => $article->isStatus(),
                'artiste' => $article->getArtiste()
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }

    }

    function updatearticle(Article $article, $id)
    {
        $sql = "UPDATE articles SET nom=:nom, type=:type, date=:date, status=:status, artiste=:artiste WHERE id=:id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'id' => $id,
                'nom' => $article->getNom(),
                'type' => $article->getType(),
                'date' => $article->getdate(),
                'status' => $article->isStatus(),
                'artiste' => $article->getArtiste()
            ]);
        } catch (PDOException $e) {
            die("Error: " . $e->getMessage());
        }
    }

    function showarticle($id)
    {
        $sql = "SELECT * FROM articles WHERE id = $id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();
            $article = $query->fetch();
            return $article;
        } catch (PDOException $e) {
            die("Error: " . $e->getMessage());
        }
    }
}