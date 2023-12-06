<?php
require '../config.php';
require_once  $_SERVER['DOCUMENT_ROOT'] .'/paiement/phpqrcode/qrlib.php';


class TicketC
{

    public function QrCode($ticket)
    {
$data = implode(', ', $ticket);
$outputPath = $_SERVER['DOCUMENT_ROOT'] .'/paiement/qrcode.png';
QRcode::png($data, $outputPath);
header('Content-Type: image/png');
readfile($outputPath);
    }
    public function listTicket()
    {
        $sql = "SELECT * FROM ticket";
        $sql = "SELECT t.*, e.nom_event AS enom
        FROM ticket t
        INNER JOIN evenements e ON t.ideventticket = e.id_event";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }
    public function listEvents()
    {
        $sql = "SELECT * FROM evenements";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }

    function deleteTicket($ide)
    {
        $sql = "DELETE FROM ticket WHERE id = :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $ide);

        try {
            $req->execute();
        } catch (Exception $e) {
            die('Error:' . $e->getMessage());
        }
    }


    function addticket($ticket)
    {
        $sql = "INSERT INTO ticket  (ideventticket,dateexpiration,cvv,numcarte) VALUES (:ide,:dateexpiration,:cvv, :numcarte)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'ide' => $ticket->getIdEvent(),
                'dateexpiration' => $ticket->getDateexpiration(),
                'cvv' => $ticket->getCvv(),
                'numcarte' => $ticket->getNumcarte(),
            ]);
        } catch (Exception $e) {
            echo 'Error: ' . $e->getMessage();
        }
       }
    

    function showTicket($id)
    {
        $sql = "SELECT * from ticket where id = $id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();
            $ticket = $query->fetch();
            return $ticket;
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    function updateTicket($ticket, $id)
    {   
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE ticket SET 
                    dateexpiration = :dateexpiration, 
                    cvv = :cvv, 
                    numcarte = :numcarte
                    WHERE id= :idTicket'
            );
            
            $query->execute([
                'idTicket' => $id,
                'dateexpiration' => $ticket->getDateexpiration(),
                'cvv' => $ticket->getCvv(),
                'numcarte' => $ticket->getNumcarte(),
            ]);
            
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
}
