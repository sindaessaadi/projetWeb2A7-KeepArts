<?php
include "../controller/ClientC.php";


$c = new ClientC();
$tab = $c->listClient();

?>
<body style="background-color:#E0F7FA">
<center>
    <h1 style="color:blue;"> List of Clients</h1>
    <h2>
        <a href="addClient.php">Add Client</a>
    </h2>
</center>
<table border="1" align="center" width="70%">
    <tr style="background-color: #50D5B7;color:white">
        <th>Id Client </th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Email</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>


    <?php
    foreach ($tab as $client) {
    ?>




        <tr align="center">
            <td><?= $client['id']; ?></td>
            <td><?= $client['nom']; ?></td>
            <td><?= $client['prenom']; ?></td>
            <td><?= $client['email']; ?></td>
            <td align="center">
                <form method="POST" action="updateClient.php">
                    <input type="submit" name="update" value="Update" style="margin-top:4px;background-color: #9618F7;color:white">
                    <input type="hidden" value=<?PHP echo $client['id']; ?> name="idClient">
                </form>
            </td>
            <td>
            <button style="margin-top:4px;background-color: #9618F7;color:white"><a href="deleteClient.php?id=<?php echo $client['id']; ?>">Delete</a></button>
            </td>
        </tr>
    <?php
    }
    ?>
</table>