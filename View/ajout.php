<?php
include'../Controller/UserC.php';
include'../Model/User.php';
$pc=new UserC();
$p=new User($_POST['id'],$_POST['nom'], $_POST['prenom'], $_POST['address'], $_POST['role']);
$pc->addUser($p);
header('Location:liste.php');
?>
