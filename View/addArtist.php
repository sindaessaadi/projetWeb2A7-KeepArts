<?php

include '../Controller/ArtistC.php';

$error = "";

// create artiste
$Artist = null;

// create an instance of the controller
$ArtistC = new ArtistC();
if (
    isset($_POST["Prénom_artiste"]) &&
    isset($_POST["Nom_artiste"]) &&
    isset($_POST["Adresse_artiste"]) &&
    isset($_POST["Description"])
) {
    if (
        !empty($_POST['Prénom_artiste']) &&
        !empty($_POST["Nom_artiste"]) &&
        !empty($_POST["Adresse_artiste"]) &&
        !empty($_POST["Description"])
    ) {
        $Artist = new Artist(
            
            $_POST['Prénom_artiste'],
            $_POST['Nom_artiste'],
            $_POST['Addresse_artiste'],
            $_POST['Description']
        );
        $ArtistC->addArtist($Artist);
        header('Location:ListArtists.php');
    } else
        $error = "Missing information";
}


?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artist Display</title>
</head>

<body>
    <a href="ListArtists.php">Back to list </a>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <form action="" method="POST">
        <table border="1" align="center">

            <tr>
                <td>
                    <label for="Prénom_artiste">Prénom:
                    </label>
                </td>
                <td><input type="text" name="Prénom_artiste" id="Prénom_artiste" maxlength="10"></td>
            </tr>
            <tr>
                <td>
                    <label for="Nom_artiste">Nom:
                    </label>
                </td>
                <td><input type="text" name="Nom_artiste" id="Nom_artiste" maxlength="15"></td>
            </tr>
            <tr>
                <td>
                    <label for="Description">Description:
                    </label>
                </td>
                <td>
                    <input type="text" name="Description" id="Description" maxlength="50">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="Addresse_artiste">Addresse:
                    </label>
                </td>
                <td>
                    <input type="text" name="Addresse_artiste" id="Addresse_artiste">
                </td>
                
            </tr>
            <tr align="center">
                <td>
                    <input type="submit" value="Save">
                </td>
                <td>
                    <input type="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>