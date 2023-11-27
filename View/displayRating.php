<!-- displayRating.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Rating</title>
    <!-- Bootstrap CSS or other styles -->
    <style>
        /* Add your custom styles here */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 400px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            font-size: 14px;
            margin-bottom: 6px;
            color: #333;
        }

        input[type="text"] {
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>You just rated this article</h2>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $articleId = $_POST["article_id"];
            $rating = $_POST["rating"];

            if (!empty($articleId) && !empty($rating)) {
                echo "<h3>Article ID: $articleId</h3>";
                echo "<h3>Rating: $rating</h3>";

                // Add your database logic here to store the ratings
                // For example, you can use PDO or MySQLi to interact with your database
                // Inserting into the database would typically go here
            } else {
                echo "<p style='color: red;'>Error: Missing information</p>";
            }
        } else {
            echo "<p style='color: red;'>Error: Invalid request</p>";
        }
        ?>
    </div>
</body>

</html>
