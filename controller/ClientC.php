<?php

require '../config.php';

class ClientC
{

    public function listClient()
    {
        $sql = "SELECT * FROM client";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function deleteClient($ide)
    {
        $sql = "DELETE FROM client WHERE id = :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $ide);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }


    function addClient($client)
    {
        $sql = "INSERT INTO client  
        VALUES (NULL, :nom,:prenom, :email)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'nom' => $client->getNom(),
                'prenom' => $client->getPrenom(),
                'email' => $client->getEmail(),
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }


    function showClient($id)
    {
        $sql = "SELECT * from client where id = $id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();
            $client = $query->fetch();
            return $client;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    function updateClient($client, $id)
    {   
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE client SET 
                    nom = :nom, 
                    prenom = :prenom, 
                    email = :email
                WHERE id= :idClient'
            );
            
            $query->execute([
                'idClient' => $id,
                'nom' => $client->getNom(),
                'prenom' => $client->getPrenom(),
                'email' => $client->getEmail(),
            ]);
            
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
}
