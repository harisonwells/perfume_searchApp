
<?php
require_once('dbconnect.php');
require_once 'function/functions.php';
// $querytwo = "select * from customers";
$resulttwo = display();



// if(isset($_GET['delete'])) {
//     $page = filter_input(INPUT_GET, 'delete', FILTER_VALIDATE_INT, FILTER_NULL_ON_FAILURE);
//     $sql = "DELETE FROM customers WHERE customer_id = $page";
// }
?>


<!DOCTYPE html>



<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>List Customer</title>
  <link rel="stylesheet" href="style.css">
 </head>
 <body class="tab">
    <main class="table">
        <section class="tableheader">
            <h3><strong>List of customers and their perfume combinations</strong></h3>
        </section>
        <section class="tablebody">
            <table>
                <thead>
                    <tr>
                        <th>Customer ID</th>
                        <th>Customer Name</th>
                        <th>perfume</th>
                        <th>perfume</th>
                        <th>perfume</th>
                        
                    </tr>
                    
                </thead>
                <tr>
                        <?php
                        while($rowtwo = mysqli_fetch_assoc($resulttwo)){
                         ?> 
                         <td><?php echo $rowtwo['customer_id']?></td>  
                        <td><?php echo $rowtwo['customer_name']?></td>
                        <td><?php echo $rowtwo['choice']?></td>
                        <td><?php echo $rowtwo['choicetwo']?></td>
                        <td><?php echo $rowtwo['choicethird']?></td>
                        <td><a href="Edit_customer.php">Edit</a></td>
                        <td><a href="#" name="delete">Delete</a></td>
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