<?php

    require_once 'dbconnect.php';

    function display(){
        global $conn;
        $query = "select * from customers";
        $fresult = mysqli_query($conn, $query);
        return $fresult;


    }

     



?>