<?php

include '../Controller/articleC.php';

$error = "erreur";

// create article

$article = null;

// create an instance of the controller
$articleC = new articleC();
if (
    isset($_POST["nom"]) &&
    isset($_POST["artiste"])&&
    isset($_POST["type"])&&
    isset($_POST["date"])&&
    isset($_POST["status"]
    )
    ) 
    if (
        !empty($_POST['nom']) &&
        !empty($_POST['artiste']) &&
        !empty($_POST['type']) &&
        !empty($_POST['date']) &&
        !empty($_POST['status']
        )) {
            $article = new Article(null, $_POST['nom'],$_POST['artiste'],$_POST['type'],$_POST['
            date'],$_POST['status']);
            // call the add method from the controller to save data in database
            $resultat=$ArticleC->add($article);
            header("location: ../View/ListArticle.php");
            } else{
                echo "Veuillez remplir tous les champs";
                }             
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles Display</title>
</head>

<body>
    <a href="ListArticle.php">Back to list </a>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <form action="" method="POST">
        <table border="1" align="center">

            <tr>
                <td>
                    <label for="nom">Nom de l'article:
                    </label>
                </td>
                <td><input type="text" name="nom" id="nom" maxlength="10"></td>
            </tr>
            <tr>
                <td>
                    <label for="artiste">Nom de l'artiste:
                    </label>
                </td>
                <td><input type="text" name="artiste" id="artiste" maxlength="15"></td>
            </tr>
            <tr>
                <td>
                    <label for="type">Type:
                    </label>
                </td>
                <td>
                    <input type="text" name="type" id="type" maxlength="50">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="date">Date de mise en ligne:
                    </label>
                </td>
                <td>
                    <input type="date" name="date" id="date">
                </td>
                </tr>
                <tr>
                <td>
                    <label for="status">Statut de l'article:
                    </label>
                </td>
                <td>
                    <input type="checkbox" name="status" id="status">
                </td>
                </tr>
                <tr>
                    <td>
                        <button class="btn btn-primary" type="submit">Ajouter</button>
                        </td>
                        <td>
                            <a href="/admin/articles"><button class="btn btn-danger" type="reset">Annuler</button></a>

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