<?php
include '../Controller/articleC.php';

$error = "erreur";

// create article

$article = null;

// create an instance of the controller
$articleC = new articleC();

if (
    isset($_POST["nom"]) &&
    isset($_POST["artiste"]) &&
    isset($_POST["type"]) &&
    isset($_POST["date"]) &&
    isset($_POST["status"])
) {
    if (!empty($_POST["nom"]) && !empty($_POST["artiste"]) && !empty($_POST["type"]) && !empty($_POST["date"]) && !empty($_POST["status"])) {
        $article = new Article(0, $_POST['nom'], $_POST['artiste'], $_POST['type'], $_POST['date'], $_POST['status']);
        $articleC->addArticles($article);
        header('Location:ListArticle.php');
    } else
        $error = "Missing information";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles Display</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
          rel="stylesheet">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-woox-travel.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

    <!-- Add your custom styles here -->
    <style>
        /* Add your custom styles here */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        nav {
            background-color: #444;
            padding: 10px;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 15px;
        }

        main {
            padding: 20px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>

    <header>
        <h1>List of Articles</h1>
    </header>

    <nav>
        <a href="addArticle.php">Ajouter un article</a>
        
    </nav>

    <main>
    <a href="ListArticle.php">Back to list </a>
    <h2>Add Article</h2>
    <hr>
    <form action="" method="POST">
        <table border="1" align="center">
            <tr>
                <td>
                    <label for="nom">Nom de l'article:</label>
                </td>
                <td><input type="text" name="nom" id="nom" maxlength="10"></td>
            </tr>
            <tr>
                <td>
                    <label for="artiste">ID de l'artiste:</label>
                </td>
                <td><input type="text" name="artiste" id="artiste" maxlength="15"></td>
            </tr>
            <tr>
                <td>
                    <label for="type">Type:</label>
                </td>
                <td>
                    <input type="text" name="type" id="type" maxlength="50">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="date">Date de mise en ligne:</label>
                </td>
                <td>
                    <input type="date" name="date" id="date">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="status">Statut de l'article:</label>
                </td>
                <td>
                    <input type="checkbox" name="status" id="status">
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <button class="btn btn-primary" type="submit">Ajouter</button>
                    <a href="/admin/articles">
                        <button class="btn btn-danger" type="reset">Annuler</button>
                    </a>
                </td>
            </tr>
        </table>
    </form>
</main>


    <footer>
        © 2023 All Rights Reserved By Fatma Ben Mlouka!
    </footer>

    <!-- Add your JavaScript scripts or include Bootstrap JS here -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/popper.min.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

    <script src="../assets/Template/js/script.js"></script>
    <!--<script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script> -->
    <!-- END OF JQUERY JS -->
</body>

</html>
