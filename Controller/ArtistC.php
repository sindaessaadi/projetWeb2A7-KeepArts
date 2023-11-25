<?php
include '../config.php';
include '../Model/Artist.php';

class ArticleC
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
        $sql = "DELETE FROM articles WHERE id = :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function addArticles($artist)
    {
        $sql = "INSERT INTO articles
        VALUES (NULL, :fn,:ln, :ad,:ds)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'fn' => $artist->getNomArticle(),
                'ln' => $artist->getEtatArticle(),
                'ds' => $artist->getDescription(),
                'ad' => $artist->getDate()
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function updatearticle($article, $id)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE articles SET 
                    name = :name,
                    state =:state, 
                    date= :date, 
                    artiste = :artiste, 
                WHERE id= :id'
            );
            $query->execute([
                'id' => $id,
                'fn' => $artist->getNomArticle(),
                'ln' => $artist->getEtatArticle(),
                'ds' => $artist->getDescription(),
                'ad' => $artist->getDate()
            ]);
            echo $query->rowCount() . " recorDescription UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    function showarticle($id)
    {
        $sql = "SELECT * from articles where id = $id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $artist = $query->fetch();
            return $artist;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }
}