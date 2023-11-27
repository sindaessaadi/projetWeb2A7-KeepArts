<!-- displayRatingView.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Ratings</title>
    <!-- Bootstrap CSS or other styles -->
    <style>
        /* Add your custom styles here */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        h2 {
            text-align: center;
        }

        form {
            width: 50%;
            margin: 20px auto;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px 12px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        input[type="submit"] {
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
    <h2>Display Ratings</h2>

    <form action="displayRating.php" method="post">
        Article ID: <input type="text" name="article_id" required><br>
        Rating: <input type="text" name="rating" required><br>
        Comment:<input type="text" name="msg" required><br>
        <input type="submit" value="Rate">
    </form>
</body>

</html>
