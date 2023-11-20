<?php

require '../config.php';

class TicketC
{

    public function listTicket()
    {
        $sql = "SELECT * FROM ticket";
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
        $sql = "INSERT INTO ticket  
        VALUES (NULL, :dateexpiration,:cvv, :numcarte)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
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
