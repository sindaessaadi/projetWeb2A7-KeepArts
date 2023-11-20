<?php

include '../Controller/TicketC.php';
include '../model/Ticket.php';
$error = "";

// create Ticket
$ticket = null;
// create an instance of the controller
$ticketC = new TicketC();


if (
    isset($_POST["dateexpiration"]) &&
    isset($_POST["cvv"]) &&
    isset($_POST["numcarte"])) 
    {
    if (
        !empty($_POST['dateexpiration']) &&
        !empty($_POST["cvv"]) &&
        !empty($_POST["numcarte"]) 
    ) {
        foreach ($_POST as $key => $value) {
            echo "Key: $key, Value: $value<br>";
        }
        $ticket = new Ticket(
            null,
            $_POST['dateexpiration'],
            $_POST['cvv'],
            $_POST['numcarte']
        );
        var_dump($ticket);
        
        $ticketC->updateTicket($ticket, $_POST['idTicket']);

        header('Location:listTicket.php');
    } else
        $error = "Missing information";
}



?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
    <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.css"
  rel="stylesheet"
/>
</head>

<body style="background-color:#E0F7FA">
    <button style="background-color: #58126A;" class="btn  mt-3 ml-4"><a href="listTicket.php" class=" text-white" >Back to list</a></button>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <?php
    if (isset($_POST['idTicket'])) {
        $ticket = $ticketC->showTicket($_POST['idTicket']);
        
    ?>

        <form action="" method="POST" style="margin-left:200px">
        <h1 class="text-primary"> Modifier ticket</h1>

            <table>
            <tr>
                    <td><label for="dateexpiration">Id Ticket :</label></td>
                    <td>
                        <input type="text" id="idTicket" name="idTicket" value="<?php echo $_POST['idTicket'] ?>" readonly style="margin-left:20px; "/>
                        <span id="erreurDateexpiration" style="color: red"></span>
                    </td>
                </tr>
                <tr>
                    <td><label for="dateexpiration" style="margin-top:20px;">Date expiration :</label></td>
                    <td>
                        <input type="text" id="dateexpiration" name="dateexpiration" value="<?php echo $ticket['dateexpiration'] ?>" style="margin-left:20px;margin-top:20px;" />
                        <span id="erreurDateexpiration" style="color: red"></span>
                    </td>
                </tr>
                <tr>
                    <td><label for="cvv" style="margin-top:20px;">Cvv :</label></td>
                    <td>
                        <input type="text" id="cvv" name="cvv" value="<?php echo $ticket['cvv'] ?>" style="margin-left:20px;margin-top:20px;"/>
                        <span id="erreurCvv" style="color: red"></span>
                    </td>
                </tr>
                <tr>
                    <td><label for="numcarte" style="margin-top:20px;">Numero carte :</label></td>
                    <td>
                        <input type="text" id="numcarte" name="numcarte" value="<?php echo $ticket['numcarte'] ?>" style="margin-left:20px;margin-top:20px;"/>
                        <span id="erreurNumcarte" style="color: red"></span>
                    </td>
                </tr>
               
                <td>
                    <input type="submit" value="Save" class="btn  mt-3 ml-4 text-white" style="background-color: #9618F7;">
                </td>
                <td>
                    <input type="reset" value="Reset" class="btn  mt-3 ml-4 text-white" style="background-color: #9618F7;">
                </td>
            </table>

        </form>
    <?php
    }
    ?>
    <!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js"
></script>
</body>

</html>