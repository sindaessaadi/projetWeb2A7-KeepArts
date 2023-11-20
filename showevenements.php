<?php 
include '../Model/evenements.php';

$evenements = new evenements();
$evenements->id_event = '1';
$evenements->nom_event = 'Exposition MÈRE NATURE - ODE À LA TERRE';
$evenements->lieu = 'Mövenpick Art Gallery';
$evenements->date = '2023/09/22';
$evenements->nb_places = '30';
$evenements->description = 'Le choix de cette thématique reflète la précieuse nécessitée de préserver la nature pour les générations futures. A travers différentes disciplines artistiques, les artistes exploreront les multiples facettes de la nature, de sa beauté brute à sa vulnérabilité.';

var_dump($evenements);
echo '<br>';
echo '<hr>';
echo '<br>';
$evenements->show();