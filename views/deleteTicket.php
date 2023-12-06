<?php
include '../Controller/TicketC.php';
$ticketC = new TicketC();
$ticketC->deleteTicket($_GET["id"]);
header('Location:listTicket.php');
