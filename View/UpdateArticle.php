<?php
include '../Controller/articleC.php';

$articleC = new articleC();
$error = "";

if (
    isset($_POST["id"]) &&
    isset($_POST["nom"]) &&
    isset($_POST["artiste"]) &&
    isset($_POST["type"]) &&
    isset($_POST["date"]) &&
    isset($_POST["status"])
) {
    if (
        !empty($_POST["id"]) &&
        !empty($_POST["nom"]) &&
        !empty($_POST["artiste"]) &&
        !empty($_POST["type"]) &&
        !empty($_POST["date"]) &&
        !empty($_POST["status"])
    ) {
        $article = new Article(
            $_POST['id'],
            $_POST['nom'],
            $_POST['artiste'],
            $_POST['type'],
            $_POST['date'],
            $_POST['status']
        );
        $articleC->updateArticle($article, $_POST['id']);
        header('Location:ListArticle.php');
    } else {
        $error = "Missing information";
    }
}

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $article = $articleC->showArticle($id);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
    <!-- Bootstrap CSS or other styles -->
    <style>
        /* Add your custom styles here */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }

        #error {
            color: red;
        }

        table {
            border-collapse: collapse;
            width: 50%;
            margin-top: 20px;
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

        input[type="text"] {
            width: 100%;
            padding: 8px 12px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        input[type="submit"],
        input[type="reset"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <button><a href="ListArticle.php">Back to list</a></button>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <form action="" method="POST">
        <table>
            <tr>
                <td>
                    <label for="id">Id:</label>
                </td>
                <td><input type="text" name="id" id="id" maxlength="10" value="<?php echo $article['id']; ?>" readonly></td>
            </tr>
            <tr>
                <td>
                    <label for="nom">Nom de l'article:</label>
                </td>
                <td><input type="text" name="nom" id="nom" maxlength="10" value="<?php echo $article['nom']; ?>"></td>
            </tr>

            <tr>
                <td>
                    <label for="artiste">ID de l'artiste:</label>
                </td>
                <td><input type="text" name="artiste" id="artiste" maxlength="15" value="<?php echo $article['artiste']; ?>"></td>
            </tr>
            <tr>
                <td>
                    <label for="type">Type:</label>
                </td>
                <td><input type="text" name="type" id="type" maxlength="15" value="<?php echo $article['type']; ?>"></td>
            </tr>

            <tr>
                <td>
                    <label for="date">Date:</label>
                </td>
                <td><input type="text" name="date" id="date" maxlength="15" value="<?php echo $article['date']; ?>"></td>
            </tr>
            <tr>
                <td>
                    <label for="status">Status:</label>
                </td>
                <td><input type="text" name="status" id="status" maxlength="15" value="<?php echo $article['status']; ?>"></td>
            </tr>

            <tr>
                <td>
                    <input type="submit" value="Update">
                </td>
                <td>
                    <input type="reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>
<?php
}
?>
