<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="supp.php" method="POST">
    <input type="number" name="id" placeholder="entrer Id ">
        <input type="submit" value="delete" >
    </form>
</body>
</html> -->




<html>
<style>
body {
  
  font-family: Arial, Helvetica, sans-serif;
  background-color:#A3C9E2 ;
}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text] {
  width: 70%;
  padding: 15px;
  
  margin-top: 60px;
  display: inline-block;
  border-collapse: collapse;
  background: #f1f1f1;
  margin-left: 200px;
  
  
}

input[type=text]:focus {
  background-color: #ddd;
  outline: none;
}

input[type=number] {
  width: 70%;
  padding: 15px;
  border-collapse: collapse;
  margin-top: 60px;
  display: inline-block;
  
  background: #f1f1f1;
  margin-left: 200px;
}

input[type=number]:focus {
  background-color: #ddd;
  outline: none;
}



/* Set a style for all buttons */


button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
 .delbtn {
  padding: 14px 20px;
  background-color: #9618F7;
} 

/* Float cancel and signup buttons and add an equal width */
 .delbtn {
  float: left;
  width: 20%;
  margin-left: 550px;
  margin-top: 50px;
  color: white;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .savebtn, .resetbtn {
     width: 100%;
  }
}
</style>
<body>
    <form action="supp.php" method="POST">
    
    <input type="number" name="id" placeholder="entrer Id ">
        <input type="submit" value="Delete" class="delbtn" >
        <a href="liste.php">Back To List </a>
       
    </form>
</body>
</html>
