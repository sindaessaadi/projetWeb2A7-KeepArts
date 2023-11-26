<?php
include '../config.php';
include '../Model/ratingarticle.php';

class ratingarticleC
{
    public function listratings()
    {
        $sql = "SELECT * FROM rating_article";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function deleterating($id)
    {
        $sql = "DELETE FROM rating_article WHERE id=:id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);

        try {
            $req->execute();
        } catch (Exception $e) {
            
            die('Error:' . $e->getMessage());
        }
    }

    function addrating($ratingarticle)
    {
        $sql = "INSERT INTO rating_article
        VALUES (NULL, :id,:ar,:m,:val)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'id' => $ratingarticle->getId(),
                'ar' => $ratingarticle->getarticleid(),
                'm' => $ratingarticle->getmsg(),
                'val' => $ratingarticle->getvalue()
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function updaterating($ratingarticle, $id)
    {
        $sql = "UPDATE ratingarticle SET id=:id,ar=:ar,m=:m,val=:val WHERE id=:id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute(array(
                'id' => $id,
                'id' => $ratingarticle->getId(),
                'ar' => $ratingarticle->getarticleid(),
                'm' => $ratingarticle->getmsg(),
                'val' => $ratingarticle->getvalue()

                ));
                } catch (PDOException $e) {
                    echo   $e -> getMessage ();
                    }
    }

    function showrating($id)
    {
        $sql = "SELECT * from rating_article where id = $id";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (PDOException $e) {
            die("erreur" . $e->getMessage());
        } 
    }
}