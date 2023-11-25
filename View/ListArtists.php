<?php
include '../Controller/ArtistC.php';
$ArtistC = new ArtistC();
$list = $ArtistC->listArtists();
?>
<html>

<head></head>

<body>

    <center>
        <h1>List of Artists</h1>
        <h2>
            <a href="addArtist.php">Add artist</a>
        </h2>
    </center>
    <table border="1" align="center" width="70%">
        <tr>
            <th>Id </th>
            <th>nom</th>
            <th>date</th>
            <th>artiste</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        <?php
        foreach ($list as $articles) {
        ?>
            <tr>
                <td><?= $artist['id']; ?></td>
                <td><?= $artist['nom']; ?></td>
                <td><?= $artist['date']; ?></td>
                <td><?= $artist['artiste']; ?></td>
               
                <td align="center">
                    <form method="POST" action="UpdateArtist.php">
                        <input type="submit" name="update" value="Update">
                        <input type="hidden" value=<?PHP echo $articles['id']; ?> name="id">
                    </form>
                </td>
                <td>
                    <a href="DeleteArtist.php?Id=<?php echo $articles['id']; ?>">Delete</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>