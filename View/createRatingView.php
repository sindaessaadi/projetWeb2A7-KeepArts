<!-- createRatingView.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Rating</title>
</head>
<body>
    <h2>Create Rating</h2>
    <form action="createRating.php" method="post">
        Article ID: <input type="text" name="article_id" required><br>
        Rating: <input type="text" name="rating" required><br>
        <input type="submit" value="Create Rating">
    </form>
</body>
</html>
