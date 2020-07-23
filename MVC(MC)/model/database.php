<?php
  $username = 'class';
  $password = 'cis239';
  $host = 'localhost';
  $db_name = "products";
  try{
    $db = new mysqli($host, $username, $password, $db_name);
    //echo ("OKKKKKK!!!");

    }catch(Exception $e)
    {
        exit($e->getMessage());
        //"->" the arrow is to access method of a class or an object (ie: like e.getmessage in c#) 
    }

    function getProducts()
    {
        global $db;
        $sql = "SELECT * FROM product";
    
    // echo ($sql); // USE THIS FOR ERROR TESTING 
    $query = mysqli_query($db,$sql);
    $rs = mysqli_fetch_all($query); // send back a record, put them in array 
    //print_r($rs);
        return ($rs);
    }

    function getAProduct($id)
    {
        global $db;
        $sql = "SELECT * FROM `product` WHERE `id` = '$id'";
        //echo($sql);
        $query = mysqli_query($db, $sql);
        $rs = mysqli_fetch_array($query);

        return($rs);

    }
    function addAProduct($id, $name, $price)
    {
        global $db;
        $sql = "INSERT INTO `product` (`id`, `name`, `price`) VALUES ('$id', '$name', '$price');";
        //echo $sql;
        $query = mysqli_query($db, $sql);
    }


?>