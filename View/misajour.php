<?php
include'../controller/UserC.php';
include'../model/User.php';
$pc=new UserC();
$p=new User($_POST['id'],$_POST['nom'], $_POST['prenom'], $_POST['address'], $_POST['role']);
$pc->updateUser($p);
header('Location:liste.php');
?>