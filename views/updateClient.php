<?php

include '../Controller/ClientC.php';
include '../model/Client.php';
$error = "";

// create client
$client = null;
// create an instance of the controller
$clientC = new ClientC();


if (
    isset($_POST["nom"]) &&
    isset($_POST["prenom"]) &&
    isset($_POST["email"])) 
    {
    if (
        !empty($_POST['nom']) &&
        !empty($_POST["prenom"]) &&
        !empty($_POST["email"]) 
    ) {
        foreach ($_POST as $key => $value) {
            echo "Key: $key, Value: $value<br>";
        }
        $client = new Client(
            null,
            $_POST['nom'],
            $_POST['prenom'],
            $_POST['email']
        );
        var_dump($client);
        
        $clientC->updateClient($client, $_POST['idClient']);

        header('Location:listClient.php');
    } else
        $error = "Missing information";
}



?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
</head>

<body style="background-color:#E0F7FA">
    <button style="background-color: #58126A;" class="btn  mt-3 ml-4"><a href="listTicket.php" class=" text-white" >Back to list</a></button>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <?php
    if (isset($_POST['idClient'])) {
        $client = $clientC->showClient($_POST['idClient']);
        
    ?>

<form action="" method="POST" style="margin-left:200px">
        <h1 class="text-primary"> Modifier Client</h1>
    <table>
        <tr>
            <td><label for="nom">Nom :</label></td>
            <td>
                <input type="text" id="nom" name="nom" value="<?php echo $client['nom'] ?>" style="margin-left:20px;" />
                <span id="erreurNom" style="color: red"></span>
            </td>
        </tr>
        <tr>
            <td><label for="prenom">Prénom :</label></td>
            <td>
                <input type="text" id="prenom" name="prenom" value="<?php echo $client['prenom'] ?>" style="margin-left:20px;margin-top:20px;" />
                <span id="erreurPrenom" style="color: red"></span>
            </td>
        </tr>
        <tr>
            <td><label for="email">Email :</label></td>
            <td>
                <input type="text" id="email" name="email" value="<?php echo $client['email'] ?>" style="margin-left:20px;margin-top:20px;" />
                <span id="erreurEmail" style="color: red"></span>
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="Save" class="btn mt-3 ml-4 text-white" style="background-color: #9618F7;">
            </td>
            <td>
                <input type="reset" value="Reset" class="btn mt-3 ml-4 text-white" style="background-color: #9618F7;">
            </td>
        </tr>
    </table>
</form>

    <?php
    }
    ?>
</body>

</html>