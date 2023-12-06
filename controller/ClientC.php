<?php
require_once  $_SERVER['DOCUMENT_ROOT'] . "/paiement/config.php";
require_once  $_SERVER['DOCUMENT_ROOT'] .'/paiement/phpqrcode/qrlib.php';
//the next two lines are for errors reporting/troubleshooting!!
error_reporting(E_ALL);
ini_set('display_errors', '1');

class ClientC
{

    public function listClient()
    {
       
        $sql = "SELECT c.*, u.nom AS u_nom
        FROM client c
        INNER JOIN user u ON c.iduser = u.Id";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }
    public function listUser()
    {
        $sql = "SELECT * FROM user";
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
        $sql = "INSERT INTO client (nom, prenom, email, iduser) VALUES (:nom, :prenom, :email, :iduser)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'nom' => $client->getNom(),
                'prenom' => $client->getPrenom(),
                'email' => $client->getEmail(),
                'iduser' => $client->getIdUser(),
            ]);
        } catch (PDOException $e) {
            echo 'SQL Error: ' . $e->getMessage();
        }
         catch (Exception $e) {
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
                    email = :email,
                    iduser = :iduser 
                WHERE id= :idClient'
            );
            
            $query->execute([
                'idClient' => $id,
                'nom' => $client->getNom(),
                'prenom' => $client->getPrenom(),
                'email' => $client->getEmail(),
                'iduser' => $client->getIduser(),
            ]);
            
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
}