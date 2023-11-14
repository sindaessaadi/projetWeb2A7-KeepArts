<?php
include '../Controller/ArtistC.php';
$artist = new ArtistC();
$artist->DeleteArtist($_GET["Id"]);
header('Location:ListArtists.php');