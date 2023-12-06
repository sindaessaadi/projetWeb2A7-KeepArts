<?php

include '../Controller/TicketC.php';
include '../model/Ticket.php';
$error = "";

$ticketC = new TicketC();
$ti = $ticketC->showTicket($_GET['id']);
$ticketC->QrCode($ti);
?>
