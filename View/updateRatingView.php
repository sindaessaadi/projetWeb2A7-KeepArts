<!-- updateRatingView.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Rating</title>
</head>
<body>
    <h2>Update Rating</h2>
    <form action="updateRating.php" method="post">
        Rating ID: <input type="text" name="id" required><br>
        New Rating: <input type="text" name="rating" required><br>
        <input type="submit" value="Update Rating">
    </form>
</body>
</html>
