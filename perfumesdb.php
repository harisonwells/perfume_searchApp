
<?php
require_once('dbconnect.php');
require_once 'function/functions.php';
// $querytwo = "select * from perfumes";
$resulttwo = listpefumes();
?>


<!DOCTYPE html>



<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>update Customer</title>
  <link rel="stylesheet" href="style.css">
 </head>
 <body class="tab">
    <main class="table">
        <section class="tableheader">
            <h3><strong>List of perfumes</strong></h3>
        </section>
        <section class="tablebody">
            <table>
                <thead>
                    <tr>
                        
                        <th>Perfume ID</th>
                        <th>perfume Name</th>
                       
                        
                    </tr>
                    
                </thead>
                <tr>
                        <?php
                        while($rowtwo = mysqli_fetch_assoc($resulttwo)){
                         ?> 
                         <td><?php echo $rowtwo['perfume_id']?></td>  
                        <td><?php echo $rowtwo['pname']?></td>
                        
                        <td><a href="Edit_perfum.php">Edit</a></td>
                        <td><a href="#">Delete</a></td>
                    </tr>
                        <?php
                            }
                        ?>
                <tbody>

                </tbody>
            </table>

        </section>

       
    </main>

 </body>
</html>