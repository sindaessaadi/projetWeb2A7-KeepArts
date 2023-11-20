<?php
include "../controller/TicketC.php";


$c = new TicketC();
$tab = $c->listTicket();

?>
<body style="background-color:#E0F7FA">
<center>
    <h1 style="color:blue;">List of Ticket</h1>
    <h2>
        <a href="addTicket.php">Add Ticket</a>
    </h2>
</center>
<table border="1" align="center" width="70%">
    <tr align="center" style="background-color: #50D5B7;color:white">
        <th>Id Ticket</th>
        <th>Date expiration</th>
        <th>Cvv</th>
        <th>Num carte</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>


    <?php
    foreach ($tab as $ticket) {
    ?>




        <tr align="center">
            <td><?= $ticket['id']; ?></td>
            <td><?= $ticket['dateexpiration']; ?></td>
            <td><?= $ticket['cvv']; ?></td>
            <td><?= $ticket['numcarte']; ?></td>
            <td align="center">
                <form method="POST" action="updateTicket.php" >
                    <input type="submit" name="update" value="Update"style="margin-top:4px;background-color: #9618F7;color:white">
                    <input type="hidden" value=<?PHP echo $ticket['id']; ?> name="idTicket">
                </form>
            </td>
            <td>
                <button style="margin-top:4px;background-color: #9618F7;color:white"><a href="deleteTicket.php?id=<?php echo $ticket['id']; ?>" style="color:white">Delete</a></button>
            </td>
        </tr>
    <?php
    }
    ?>
</table>