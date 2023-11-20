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
    isset($_POST["numcarte"]) )
     {
    if (
        !empty($_POST['dateexpiration']) &&
        !empty($_POST["cvv"]) &&
        !empty($_POST["numcarte"])
    ) {
        $ticket = new Ticket(
            null,
            $_POST['dateexpiration'],
            $_POST['cvv'],
            $_POST['numcarte']);
        $ticketC->addTicket($ticket);
        header('Location:listTicket.php');
    } else
        $error = "Missing information";
}


?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket </title>
    <script>
        function validateForm() {
            var dateExpiration = document.getElementById("dateexpiration").value;
            var cvv = document.getElementById("cvv").value;
            var numCarte = document.getElementById("numcarte").value;

            var erreurDateExpiration = document.getElementById("erreurDateexpiration");
            var erreurCvv = document.getElementById("erreurCvv");
            var erreurNumCarte = document.getElementById("erreurNumcarte");

            // Réinitialise les messages d'erreur
            erreurDateExpiration.innerHTML = "";
            erreurCvv.innerHTML = "";
            erreurNumCarte.innerHTML = "";

            var isValid = true;

            // Vérifie si les champs sont vides
            if (dateExpiration === "") {
                erreurDateExpiration.innerHTML = "Date d'expiration est requise";
                isValid = false;
            }

            if (cvv === "") {
                erreurCvv.innerHTML = "CVV est requis";
                isValid = false;
            }

            if (numCarte === "") {
                erreurNumCarte.innerHTML = "Numéro de carte est requis";
                isValid = false;
            }

            return isValid;
        }
    </script>
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
    <a href="listTicket.php" class="btn  mt-3 ml-4 text-white" style="background-color: #58126A;">
      
    Back to list </a>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>
        
    <form action="" method="POST"onsubmit="return validateForm();" style="margin-left:200px">
    <h1 class="text-primary"> Payer ticket</h1>
        <table>
            <tr>
                <td><label for="dateexpiration">Date expiration :</label></td>
                <td>
                    <input type="date" id="dateexpiration" name="dateexpiration" style="margin-left:20px; "/>
                    <span id="erreurDateexpiration" style="color: red"></span>
                </td>
            </tr>
            <tr>
                <td><label for="cvv" style="margin-top:20px;">CVV :</label></td>
                <td>
                    <input type="text" id="cvv" name="cvv" style="margin-left:20px;margin-top:20px;" />
                    <span id="erreurCvv" style="color: red" ></span>
                </td>
            </tr>
            <tr>
                <td><label for="numcarte" style="margin-top:20px;">Numero carte :</label></td>
                <td>
                    <input type="text" id="numcarte" name="numcarte" style="margin-left:20px;margin-top:20px;"/>
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
    <!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js"
></script>
</body>

</html>