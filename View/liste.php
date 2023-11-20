<?php
include '../Controller/UserC.php';

$pc = new UserC();

$liste = $pc->listeUser();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>

<body>
<h1>Liste Users</h1>

<style>
  body{
  
  
  background: #A3C9E2;
}
h1 {
  float: left;
  font-size: 40px;
  margin-left: 630px;
  color: black;
}
table {
width: 70%;
  font-family: arial, sans-serif;
  border: 3px solid #4B086D;
  margin-left: 200px;
  width: 70%;
  background-color:#5FFAE0 ;
}

td,th{
  border: 3px solid #4B086D;
  text-align: center;
  padding: 8px;
  
}

tr:nth-child(even) {
  background-color: #5FFAE0;
}
tr:nth-child(odd) {
  background-color: #FFFFFF;
}
.addbtn {
  float: left;
  width: 20%;
  margin-bottom: 18px;
  margin-left: 940px;
  color: white;
}
.addbtn{
  padding: 14px 20px;
  background-color: #9618F7;
} 
.upbtn {
  
  width: 100%;
  color: white;
}
 .upbtn{
    padding: 14px 14px;
  background-color: #9618F7;
}
.delebtn {
  
  width: 100%;
  color: white;
}
 .delebtn{
    padding: 14px 14px;
  background-color: #9618F7;
}

</style>

<body>
    

                <form method="POST" action="add.php">
                    <input type="submit" name="add" value="Add" class="addbtn">
                </form>
           

    <table border="2">
        <tr> </tr>
        <td> ID </td>
        <td> Nom </td>
        <td> Prenom </td>
        <td> Adress </td>
        <td> Role </td>
        

        
        <?php
        foreach ($liste as $p) {
        ?>
            <tr>  <td>
            <?= $p['Id']; ?>  </td>
            <td>  <?= $p['Nom']; ?> </td>
            <td><?php echo ($p['Prenom']); ?></td>
            <td> <?= $p['Address']; ?> </td>
            <td> <?= $p['Role']; ?> </td>
            
            <td align="center">

                <form method="POST" action="update.php">
                    <input type="submit" name="update" value="Update" class="upbtn">
                    <input type="hidden" value=<?PHP echo $p['Id']; ?> name="Id">
                </form>
            </td>
            <td align="center">
                <form method="POST" action="delete.php">
                    <input type="submit" name="delete" value="Delete" class="delebtn">
                    <input type="hidden" value=<?PHP echo $p['Id']; ?> name="Id">
                </form>
            </td>
            


        </tr>
        <?php } ?>
    </ul>

    


</body>

</html>