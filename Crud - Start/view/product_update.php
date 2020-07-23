<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Edit <?=$aryProduct[0]?></h1>
    <?php
   print_r($aryProduct);
    
    ?>
    <form action="" method="POST">
        <input type="hidden" name="id" value = "<?=$aryProduct[0]?>">
        <input type="text" name="item" value = "<?=$aryProduct[1]?>">
        <input type="text" name="price" value = "<?=$aryProduct[2]?>">
        <input type="submit" name = "action" value = "update">

    </form>
</body>
</html>