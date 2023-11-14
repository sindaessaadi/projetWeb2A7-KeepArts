<?php

include '../Controller/ArtistC.php';

$error = "";

// create artist$artist
$artist = null;

// create an instance of the controller
$artistC = new artistC();
if (
    isset($_POST["Prénom_artiste"]) &&
    isset($_POST["Nom_artiste"]) &&
    isset($_POST["Description"]) &&
    isset($_POST["Adresse_artiste"])
) {
    if (
        !empty($_POST['Prénom_artiste']) &&
        !empty($_POST["Nom_artiste"]) &&
        !empty($_POST["Description"]) &&
        !empty($_POST["Adresse_artiste"])
    ) {
        $artist = new artist(
           // $_POST['idartist$artist'],
            $_POST['Prénom_artiste'],
            $_POST['Nom_artiste'],
            $_POST['Description'],
            $_POST['Adresse_artiste']
        );
        $artistC->updateArtist($artist, $_POST["Id"]);
        header('Location:ListArtists.php');
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

<body>
    <button><a href="ListArtists.php">Back to list</a></button>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <?php
    if (isset($_POST['Id'])) {
        $artist = $artistC->showartist($_POST['Id']);

    ?>

        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="Id">Id_artist:
                        </label>
                    </td>
                    <td><input type="text" name="Id" id="Id" value="<?php echo $artist['Id']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="Prénom_artiste">Prenom:
                        </label>
                    </td>
                    <td><input type="text" name="Prénom_artiste" id="Prénom_artiste" value="<?php echo $artist['Prénom_artiste']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="Nom_artiste">Nom:
                        </label>
                    </td>
                    <td><input type="text" name="Nom_artiste" id="Nom_artiste" value="<?php echo $artist['Nom_artiste']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                <td>
                        <label for="Description">Description:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="Description" id="Description" value="<?php echo $artist['Description']; ?>">
                    </td>
                   
                </tr>
                <tr>
                <td>
                        <label for="Adresse_artiste">Address:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="Adresse_artiste" value="<?php echo $artist['Adresse_artiste']; ?>" id="Adresse_artiste">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Update">
                    </td>
                    <td>
                        <input type="reset" value="Reset">
                    </td>
                </tr>
            </table>
        </form>
    <?php
    }
    ?>
</body>

</html>