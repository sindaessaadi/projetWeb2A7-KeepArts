<?php
include '../config.php';
include '../Model/Artist.php';

class ArtistC
{
    public function listArtists()
    {
        $sql = "SELECT * FROM artiste";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function deleteArtist($id)
    {
        $sql = "DELETE FROM artiste WHERE Id = :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function addArtist($artist)
    {
        $sql = "INSERT INTO artiste  
        VALUES (NULL, :fn,:ln, :ad,:ds)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'fn' => $artist->getPrénom_artiste(),
                'ln' => $artist->getNom_artiste(),
                'ad' => $artist->getAdresse_artiste(),
                'ds' => $artist->getDescription()
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function updateArtist($artist, $id)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE artiste SET 
                    Prénom_artiste = :Prénom_artiste, 
                    Nom_artiste = :Nom_artiste, 
                    Adresse_artiste = :Adresse_artiste, 
                    Description = :Description
                WHERE Id= :id'
            );
            $query->execute([
                'Id' => $id,
                'Prénom_artiste' => $artist->getPrénom_artiste(),
                'Nom_artiste' => $artist->getNom_artiste(),
                'Adresse_artiste' => $artist->getAdresse_artiste(),
                'Description' => $artist->getDescription()
            ]);
            echo $query->rowCount() . " recorDescription UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    function showartist($id)
    {
        $sql = "SELECT * from artiste where Id = $id";
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