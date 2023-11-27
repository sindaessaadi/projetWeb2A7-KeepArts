<?php
include '../Controller/articleC.php';
$articleC = new articleC();
$list = $articleC->listArticles();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Liste des articles</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Bootstrap CSS or other styles -->
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
        <!-- Add more navigation links as needed -->
    </nav>

    <main>
        <table>
            <tr>
                <th>id</th>
                <th>nom</th>
                <th>artiste</th>
                <th>type</th>
                <th>date</th>
                <th>Etat</th>
                <th>Actions</th>
                <th>Rating</th>


            </tr>
            <?php foreach ($list as $article) : ?>
                <tr>
                    <td><?= $article['id']; ?></td>
                    <td><?= $article['nom']; ?></td>
                    <td><?= $article['artiste']; ?></td>
                    <td><?= $article['type']; ?></td>
                    <td><?= $article['date']; ?></td>
                    <td><?= $article['status']; ?></td>
                    <td>
                        <a href="UpdateArticle.php?id=<?= $article['id'] ?>">Update</a>
                        <a href="DeleteArticle.php?id=<?= $article['id'] ?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </main>

    <footer>
        © 2023 All Rights Reserved By Fatma Ben Mlouka!
    </footer>

    <!-- Add your JavaScript scripts or include Bootstrap JS here -->

</body>

</html>
