<?php
include('dbconnect.php');


$result = mysqli_query($conn, "select pname from perfumes");
$resultid = mysqli_query($conn, "select perfume_id from perfumes");


if(isset($_POST['submitq'])){

    $puffname = $_POST['pufname'];
    $custID = $_POST['pufID'];
   
    $query = mysqli_query($conn, "update perfumes set pname='$puffname' where perfume_id ='$custID'");
    

    // if($check ==' '){
    //     echo "<script>alert('enter perfume selection')</script>";

    // } else{
    //     $query = mysqli_query($conn, "insert into customers (customer_name, choice, choicetwo, choicethird) values ('$customername', '$puff', '$puffsec', '$puffthird' )");
    // }
  
    if($query){
      echo "<script>alert('Perfume updated succesfully')</script>";
    }
  }
?>

<!DOCTYPE html>



<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Perfume</title>
  <link rel="stylesheet" href="style.css">
 </head>
 <body>



<form method="post" action=" " >
    <section class="container">
        <header>Edit Perfume</header>
       
        <div class="inputbox"> 
            <label for="iname">Edit Perfume Name:</label>
            <input type="text" name="pufname" id="iname" required placeholder="Edit Perfume name"/>
            
        </div>
        <div class="inputbox"> 
            <label for="iname">Edit Perfume Name:</label>
            <input type="text" name="pufID" id="iname" required placeholder="Perfume ID"/>
            
        </div>
      
        
        <button type="submit" name="submitq">Register</button>
    
    </section>
   
</form>

  

 </body>
</html>


