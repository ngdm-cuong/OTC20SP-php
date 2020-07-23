<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Display All Products in my Database</h1>
    <?php
        $myProducts = getProducts();
        //print_r($myProducts);
        foreach($myProducts as $product)
        {
            //print_r($product);
            echo("<a href='?id=$product[0]'>$product[0]</a> $product[1] $product[2]
            <a href = '.?action=DEL&id=$product[0]'>Delete</a> |
            <a href = '.?action=edit&id=$product[0]'>Edit</a>
            <br>");
        }

    ?>
     <a href="view/addAProduct.php">Add a Product</a> 

</body>

</html>