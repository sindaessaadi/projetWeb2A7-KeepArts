<?php
include '../Controller/articleC.php';
$article = new articleC();
$article->DeleteArticle($_GET["id"]);
header('Location:ListArticle.php');