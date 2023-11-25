<?php

include '../Controller/ArtistC.php';

$error = "";

// create artist$artist
$artist = null;

// create an instance of the controller
$artistC = new artistC();
if (
    isset($_POST["nom"]) &&
    isset($_POST["date"]) &&
    isset($_POST["artiste"]) &&
) {
    if (
        !empty($_POST['nom']) &&
        !empty($_POST["date"]) &&
        !empty($_POST["artiste"]) &&
    ) {
        $artist = new artist(
           // $_POST['idartist$artist'],
            $_POST['nom'],
            $_POST['date'],
            $_POST['artiste'],
        );
        $articlesC->updateArtist($articles, $_POST["id"]);
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
    if (isset($_POST['id'])) {
        $artist = $articlesC->showartist($_POST['id']);

    ?>

        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="id">Id_artist:
                        </label>
                    </td>
                    <td><input type="text" name="Id" id="Id" value="<?php echo $artist['Id']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="nom">nom:
                        </label>
                    </td>
                    <td><input type="text" name="nom" id="nom" value="<?php echo $artist['nom']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="date">Nom:
                        </label>
                    </td>
                    <td><input type="text" name="date" id="date" value="<?php echo $artist['date']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                <td>
                        <label for="artiste">artiste:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="artiste" id="artiste" value="<?php echo $artist['artiste']; ?>">
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