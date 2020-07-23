<?php 
    //session_start();
    if (!isset($_SESSION['user'])){
        header("Location: ../index.php");   
    } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Order #<?=($id)?></title>
</head>
<body>
<div class = "container"> 
    <h5 style = "float: right;"><a href="index.php?lo=y">Logout</a></h5>
    <h2 class="bg-success">Order #<?= ($id)?><h2>
        <?php 
        $anOrder = getOneOrder($id);
        $aRow = $anOrder[0]; // take the first array of $anorder array
        echo (
            "<p><span class='text-success'>Order Date:</span> $aRow[1]</p>
            <p><span class='text-success'>Customer Name:</span> $aRow[2] $aRow[3]</p>
            <p class='text-success'>Address:</p>
            <P>$aRow[4]</p>
            <p>$aRow[5], $aRow[6] $aRow[7]</P>
            <h2 class='bg-success'>Order Details<h2>
            ");
/// this section works uses anOrder array alone
            // "<p><span class='text-success'>Order Date:</span>".$anOrder[0][1]."</p>".
            // "<p><span class='text-success'>Customer Name:</span>".$anOrder[0][2].$anOrder[0][3]."</p>".
            // "<p class='text-success'>Address:</p>".
            // "<p>".$anOrder[0][4]."</p>".
            // "<p>".$anOrder[0][5]. $anOrder[0][6]. $anOrder[0][7]."</p>".
            // "<h2 class='bg-success'>Order Details<h2>"
            // );
        ?>
        <table class="table table-bordered">
            <thead>
                <tr>
                <th scope="col">Product</th>
                <th scope="col">Qty</th>
                <th scope="col">List Price</th>
                <th scope="col">Subtotal</th>
                </tr>
            </thead>
            <tbody>
            <?php
                setlocale(LC_MONETARY,"en_US");
                $orders = getOneOrder($id);
                foreach ($orders as $anOrder)
                echo (
                    "<tr>
                    <td>$anOrder[8]</td>
                    <td>$anOrder[9]</td>
                    <td>$ $anOrder[10]</td>
                    <td>$ $anOrder[11]</td>
                    <tr>"
                )
            ?>
            </tbody>
        </table>

    <a href="index.php">Back to Orders</a>
    

   
</div>
    
</body>
</html>


