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
 .upbtn {
  padding: 14px 20px;
  
  background-color: #9618F7;
} 

/* Float cancel and signup buttons and add an equal width */
 .upbtn {
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
    <form action="misajour.php" method="POST">

    
    <input type="number" name="id" placeholder="Entrer Id ">
        
        <input type="text" name="nom" placeholder="entrer nom">
        <input type="text" name="prenom" placeholder="entrer prenom">
        <input type="text" name="address" placeholder="entrer adress">
        <input type="text" name="role" placeholder="entrer Role">
        <input type="submit" value="update" class="upbtn">
        <a href="liste.php">Back To List </a>
       
    </form>
</body>
</html>