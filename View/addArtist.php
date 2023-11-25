<?php

include '../Controller/ArtistC.php';

$error = "";

// create artiste
$Artist = null;

// create an instance of the controller
$ArtistC = new ArtistC();
if (
    isset($_POST["nom"]) &&
    isset($_POST["date"]) &&
    isset($_POST["artiste"]) 
) {
    if (
        !empty($_POST['nom']) &&
        !empty($_POST["date"]) &&
        !empty($_POST["artiste"]) &&
    ) {
        $Artist = new Artist(
            
            $_POST['nom'],
            $_POST['date'],
            $_POST['artiste'],
        );
        $ArtistC->addArtist($articles);
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
                    <label for="nom">Prénom:
                    </label>
                </td>
                <td><input type="text" name="nom" id="nom" maxlength="10"></td>
            </tr>
            <tr>
                <td>
                    <label for="date">Nom:
                    </label>
                </td>
                <td><input type="text" name="date" id="date" maxlength="15"></td>
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