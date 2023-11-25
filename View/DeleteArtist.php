<?php
include '../Controller/ArtistC.php';
$artcles = new articles();
$articles->DeleteArtist($_GET["Id"]);
header('Location:ListArtists.php');