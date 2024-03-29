<?php
include('dbconnect.php');

if(isset($_POST['submit'])){

  $name = $_POST['pname'];

  $query = mysqli_query($conn, "insert into perfumes (pname) values ('$name')");

  if($query){
    echo "<script>alert('perfume registered')</script>";
  }
}
?>


<!DOCTYPE html>



<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perfume</title>
  <link rel="stylesheet" href="style.css">
 </head>
 <body>



<form action=" " method="POST" >
    <section class="container">
        <header>Rejister Perfume</header>
       
        <div class="inputbox"> 
            <label for="iname">Perfume Name:</label>
            <input type="text" name="pname" id="iname" required placeholder="Perfume name"/>
        </div>
      
        
        <button type="submit" name="submit">Register</button>
    
    </section>
   
</form>

  

 </body>
</html>