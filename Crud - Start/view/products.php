<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>

</head>
<body>

    <h1>All Products</h1>
    <?php
        $aryProducts = getAll();

        foreach ($aryProducts as $product)
        {
            print_r ($product);
            echo ("$product[0] $product[1] $product[2]<a href = '.?action=DEL&id=$product[0]'>DEL</a> |
            <a href = '.?action=edit&id=$product[0]'>Edit</a></br>");
        }   

    ?>
    <br>
    <a href=""></a>
</body>
</html>