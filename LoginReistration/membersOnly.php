<?php 
    if (!isset($_SESSION['user'])){
        header("Location: index.php");
        
    }
    $quotes = array();
    $quotes[] = "It's been a long day without you, my friend";
    $quotes[] = "And I'll tell you all about it when I see you again";
    $quotes[] = "We've come a long way from where we began";
    $quotes[] = "Oh I'll tell you all about it when I see you again";
    $quotes[] = "When I see you again";
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body >
<div  class= "container-fluid p-3 mb-2 bg-success text-white " >  
        
    <a href="index.php" class="text-white" >Home</a>
    <a href="index.php?lo=y" class="text-white">Log Out</a>
    
    <?php
        //include "menu.php";
    ?>
    <h1 class ="d-flex justify-content-center ">Members Only</h1>
    <h2 class ="d-flex justify-content-center ">Welcome <?php echo $_SESSION['user'] ?>!</h2>
    <h3 class ="d-flex justify-content-center ">Quotes:</h3>
       
  <?php 
        foreach ($quotes as $aQuote)
                echo ("<h4 class= \"container-fluid p-3 mb-2 bg-success text-white d-flex justify-content-center\"> $aQuote </h4>");
    ?>
   
    
</div>
</body>
</html>