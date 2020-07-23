<?php
  $username = 'class';
  $password = 'cis239';
  $host = 'localhost';
  $db_name = "guitar_shop";
  try{
    $db = new mysqli($host, $username, $password, $db_name);
    //echo ("OKKKKKK!!!");

    }catch(Exception $e)
    {
        exit($e->getMessage());
        //"->" the arrow is to access method of a class or an object (ie: like e.getmessage in c#) 
    }


    function getOrders()    
    {
        global $db;
        $sql = "SELECT DATE_FORMAT(orderDate, '%m-%d-%y'), OrderID, lastName, FirstName FROM Orders JOIN customers ON orders.custID = customers.custID ORDER BY orderDate ASC";
        //echo($sql);
        $query = mysqli_query($db, $sql);
        $rs = mysqli_fetch_all($query);
        //print_r($rs);
        return($rs);

    }
    
    function getOneOrder($id)
    {
        global $db;
            $sql = "SELECT orders.orderID, DATE_FORMAT(orderDate, '%m-%d-%y'), firstName, lastName, address, city, state, zip, productName, qty AS Quantity, FORMAT(listPrice, 2) ,FORMAT(listprice*qty, 2)  AS Subtotal FROM orders
                    JOIN customers on orders.custID = customers.custID 
                    JOIN orderitems ON orders.orderID = orderitems.orderID
                    JOIN products ON orderitems.productID = products.productID
                WHERE orders.orderID = '$id'"
                ;
        //echo $sql;
        $query = mysqli_query($db, $sql);
        $rs = mysqli_fetch_all($query);
        //print_r($rs);
        return ($rs);
    }

    function getActiveProducts()
    {
      global $db;
      $sql="SELECT  productName, productCode, FORMAT(listPrice, 2) FROM products WHERE active = 1 ";
      $query = mysqli_query($db, $sql);
      $rs = mysqli_fetch_all($query);
      return ($rs);
    }
    function getAllProducts()
    {
      global $db;
      $sql="SELECT  productName, productCode, FORMAT(listPrice, 2), active, productID FROM products";
      $query = mysqli_query($db, $sql);
      $rs = mysqli_fetch_all($query);
      //print_r($rs);
      return ($rs);
    }
    function verifyUser($userName,$password)
    {
      global $db;
      $confirm = false;
      $sql="SELECT userName,userPWord FROM `users` WHERE userName = '$userName' AND userPword = '$password'";
      $query = mysqli_query($db, $sql);
      $rs = mysqli_fetch_all($query);
      if(count($rs) == 1)
        $confirm = true;
      else
        $confirm = false;

      return ($confirm);
    }

    function addAProduct($categoryID, $productCode, $productName, $listPrice)
    {
        global $db;
        $sql = "INSERT INTO `products` (`categoryID`, `productCode`, `productName`, `listPrice`, `active`) VALUES ('$categoryID,', '$productCode', '$productName', '$listPrice', '1')";
        if ($categoryID == null || $productCode == null || $productName == null|| $listPrice == null)
        {
            echo ("<h5 class='bg-success text-white'>Please fill out all the boxes to Add The Product!</h5>");
        }
        else
        {
          $query = mysqli_query($db, $sql);
          $query = mysqli_query($db, $sql);
          echo ("<h5 class='bg-success text-white'>Successfully added!</h5>");
        } 

        //echo $sql;

    }
    function getCategories()
    {
      global $db;
      $sql = "SELECT * FROM `categories`";
      $query = mysqli_query($db, $sql);
      $rs = mysqli_fetch_all($query);
      //print_r($rs);
      return ($rs);
    }
    function getAProduct($id)
    {
      global $db;
      $sql = "SELECT * FROM products WHERE products.productID = $id";
      $query = mysqli_query($db, $sql);
      $rs = mysqli_fetch_array($query);
      //print_r($rs);
      return ($rs);
    }
    function editAProduct($id,$categoryID, $productCode, $productName, $listPrice)
    {
      global $db;
      $sql = "UPDATE products SET categoryID = '$categoryID', productCode='$productCode', productName='$productName', listPrice='$listPrice'  WHERE `products`.`productID` = $id;";

      if ($categoryID == null || $productCode == null || $productName == null|| $listPrice == null)
      {
          echo ("<h5 class='bg-success text-white'>Please fill out all the boxes!</h5>");
      }
      else
      {
        $query = mysqli_query($db, $sql);
        echo ("<h5 class='bg-success text-white'>Successfully edited!</h5>");
      } 


    }
    function addCategory($category)
    {
      global $db;
      $sql = "INSERT INTO `categories` (`categoryName`) VALUES ('$category')";

      if($category == null ){
        echo ("<h5 class='bg-success text-white'>Please fill out Category box!</h5>");
      }
      else{
        $query = mysqli_query($db, $sql);
        //echo($sql);
        echo ("<h5 class='bg-success text-white'> \"$category\" added to the Category table :) </h5>");
      }
  
      
    }

    function deactiveAProduct($id)
    {
      global $db;
      $sql = "UPDATE `products` SET `active` = '0' WHERE `products`.`productID` = $id;";
      $query = mysqli_query($db, $sql);
    }
?>