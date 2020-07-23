<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method ="POST">
        Name: 
        <input type="text" name ="fname"><br>
        <select name="products" id="" >
            <?php
            $text = file_get_contents('products.txt');
            $products = explode("\n",$text);
            foreach ($products as $aProduct)
            {
                ?> <option value="<?php echo $aProduct?>"><?php echo $aProduct?></option>
            <?php } ?>
            
            
        </select><br>
        Quantity: 
        <select name="Qantity" id="">
            <?php 
            for ($i=1; $i<21; $i++)
            {
                echo("<option value='"  .$i."'>" .$i."</option>");
            }
            
            ?>
            
        </select><br>
        <input type="submit" value="Submit">
        

    </form>
</body>
</html>