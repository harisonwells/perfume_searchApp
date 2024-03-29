<?php
include('dbconnect.php');


$result = mysqli_query($conn, "select pname from perfumes");
$resultsec = mysqli_query($conn, "select pname from perfumes");
$resultthird = mysqli_query($conn, "select pname from perfumes");

if(isset($_POST['submitq'])){

    $customername = $_POST['custname'];
    $puff = $_POST['perfum'];
    $puffsec = $_POST['perfumsec'];
    $puffthird = $_POST['perfumthird'];
    $check = ['$puff', '$puffsec', '$resultthird'];
    $query = mysqli_query($conn, "update perfumes set pname");
    

    // if($check ==' '){
    //     echo "<script>alert('enter perfume selection')</script>";

    // } else{
    //     $query = mysqli_query($conn, "insert into customers (customer_name, choice, choicetwo, choicethird) values ('$customername', '$puff', '$puffsec', '$puffthird' )");
    // }
  
    if($query){
      echo "<script>alert('customer updated')</script>";
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



<form action=" " method="post">
    <section class="container">
        <header>Update Customer</header>
       
        <div class="inputbox">
            <label for="cname">Customer Name:</label>
            <input type="text" name="custname" id="cname" required placeholder="Enter Customer Name"/>
        </div>
        <div class="inputbox">
            <label for="cid">Customer ID:</label>
            <input type="text" name="custid" id="cid" required placeholder="Enter Customer ID"/>
        </div>

        <div class="inputsec">
            <label for="perfum">update perfume</label>
            <select name="perfum" >
            <option ></option>
                    <?php
                    while($rows =$result->fetch_assoc())
                    {
                        $perfumdrop = $rows['pname'];
                        echo"<option value ='$perfumdrop'>$perfumdrop</option>";
                       
                    }
                    
                    
                    ?>
            </select>
        </div>

        <div class="inputsec">
            <label for="perfumsec">update second perfume</label>
            <select name="perfumsec">
            <option ></option>
                    <?php
                    while($rowsec =$resultsec->fetch_assoc())
                    {
                        $perfumdropsec = $rowsec['pname'];
                        echo"<option value ='$perfumdropsec'>$perfumdropsec</option>";
                       
                    }
                    
                    
                    ?>
            </select>
        </div>
        <div class="inputsec">
            <label for="perfumthird">update third perfume</label>
            <select name="perfumthird">
                <option></option>
                    <?php
                    while($rows =$resultthird->fetch_assoc())
                    {
                        $perfumdrop = $rows['pname'];
                        echo"<option value ='$perfumdrop'>$perfumdrop</option>";
                       
                       
                    }
                    
                    
                    ?>
            </select>
        </div>
      
        
        <button name="submitq" type="submit">Update</button>
    </section>
   
</form>

  

  <script src="main.js"></script>
 </body>
</html>