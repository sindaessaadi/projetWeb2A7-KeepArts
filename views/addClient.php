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
    isset($_POST["email"]) )
     {
    if (
        !empty($_POST['nom']) &&
        !empty($_POST["prenom"]) &&
        !empty($_POST["email"])
    ) {
        $client = new Client(
            null,
            $_POST['nom'],
            $_POST['prenom'],
            $_POST['email']);
        $clientC->addClient($client);
        header('Location:listClient.php');
    } else
        $error = "Missing information";
}


?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client </title>
    <script>
        function validateForm() {
            var nom = document.getElementById("nom").value;
            var prenom = document.getElementById("prenom").value;
            var email = document.getElementById("email").value;

            // Vérifie si les champs sont vides
            if (nom === "") {
                alert("Nom est requis");
                return false;
            }

            if (prenom === "") {
                alert("Prénom est requis");
                return false;
            }

            if (email === "") {
                alert("Email est requis");
                return false;
            }

            // Si tout est valide, retourne true pour permettre la soumission du formulaire
            return true;
        }
    </script>
    <link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.css"
  rel="stylesheet"
/>
</head>

<body style="background-color:#E0F7FA">
    <a href="listClient.php" class="btn  mt-3 ml-4 text-white" style="background-color: #58126A;">Back to list </a>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <form action="" method="POST" onsubmit="return validateForm();" style="margin-left:200px">
    <h1 class="text-primary"> Add Client</h1>
        <table>
            <tr>
                <td><label for="nom">Nom :</label></td>
                <td>
                    <input type="text" id="nom" name="nom" style="margin-left:20px; />
                    <span id="erreurNom style="color: red"></span>
                </td>
            </tr>
            <tr>
                <td><label for="prenom">Prénom :</label></td>
                <td>
                    <input type="text" id="prenom" name="prenom" style="margin-left:20px;margin-top:20px;"/>
                    <span id="erreurPrenom" style="color: red"></span>
                </td>
            </tr>
            <tr>
                <td><label for="email">Email :</label></td>
                <td>
                    <input type="text" id="email" name="email" style="margin-left:20px;margin-top:20px;"/>
                    <span id="erreurEmail" style="color: red"></span>
                </td>
            </tr>
            <td>
                <input type="submit" value="Save" class="btn  mt-3 ml-4 text-white" style="background-color: #9618F7;">
            </td>
            <td>
            <input type="reset" value="Reset" class="btn  mt-3 ml-4 text-white" style="background-color: #9618F7;">
            </td>
        </table>

    </form>
    <script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js"
></script>
</body>

</html>