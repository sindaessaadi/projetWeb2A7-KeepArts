<?php
include'../controller/UserC.php';
include'../model/User.php';
$pc=new UserC();
$pc->deleteUser($_POST['id']);
header('Location:liste.php');
?>