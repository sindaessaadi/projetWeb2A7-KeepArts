<?php
include '../Controller/articleC.php';
$articleC = new articleC();
$list = $articleC->listArticles();
?>
<html>
    
<head>
    <title>Liste des articles</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no
    " />
    <!-- Bootstrap CSS -->
</head>

<body>


    <center>
        <h1>List of Articles</h1>
        <h2>
            <a href="addArticle.php">Ajouter un article</a>
        </h2>
    </center>
    <table border="1" align="center" width="70%">
        <tr>
            <th>id </th>
            <th>nom</th>
            <th>artiste</th>
            <th>type</th>
            <th>date</th>
            <th>Etat</th>
            <th>Mettre à jour</th>
            <th>Supprimer</th>
        </tr>
        <?php
        foreach ($list as $article) {
        ?>
            <tr>
                <td><?= $article['id']; ?></td>
                <td><?= $article['nom']; ?></td>
                <td><?= $article['artiste']; ?></td>
                <td><?= $article['type']; ?></td>
                <td><?= $article['date']; ?></td>
                <td><?= $article['status']; ?></td>
                <td>                         
                <td align="center">
                    <form method="POST" action="UpdateArticle.php">
                        <input type="hidden" value="<?=$article['id']?>" name="id">
                        <button class="btn btn-primary" type="submit">Modifier</button>
                        </form>
                        </td>
                        <td>
                            <form method="POST" action="DeleteArticle.php">
                                <input type="hidden" value="<?=$article['id']?>" name="id">
                                <button class="btn btn-danger" type="submit">supprimer</button>
                                </form>
                                </td>
                                </tr>
                                <?php }?>
                                </table>
                                </div>
                                </section>
                                <!-- /wrapper -->
                                </section>
                                <!--main content end-->
                                <!--footer start-->
                                <footer class="site-footer">
                                    <div class="text-center center-padding">
                                        © 2023 All Rights Reserved By Fatma Ben Mlouka!
                                    </div>
                                    </footer>
                                    <!--footer end-->
                                    </body>
                                    </html>
                                    


                            