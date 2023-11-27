<?php
include '../config.php';
include '../Model/article.php';

class RatingC
{
    public function listRatings()
    {
        $sql = "SELECT * FROM ratings";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function deleteRating($id)
    {
        $sql = "DELETE FROM ratings WHERE id=:id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function addRating($rating)
    {
        $sql = "INSERT INTO ratings (article_id, rating) VALUES (:article_id, :rating)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'article_id' => $rating->getArticleId(),
                'rating' => $rating->getRating(),
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function updateRating($rating, $id)
    {
        $sql = "UPDATE ratings SET article_id=:article_id, rating=:rating WHERE id=:id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'id' => $id,
                'article_id' => $rating->getArticleId(),
                'rating' => $rating->getRating(),
            ]);
        } catch (PDOException $e) {
            die("Error: " . $e->getMessage());
        }
    }

    function showRating($id)
    {
        $sql = "SELECT * FROM ratings WHERE id = $id";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (PDOException $e) {
            die("Error: " . $e->getMessage());
        }
    }
}
?>
