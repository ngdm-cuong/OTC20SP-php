<?php 
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
    <title>View All Orders</title>
</head>
<body>
<div class = "container">
    <h2 class ="d-flex justify-content-center text-success">Welcome <?php echo $_SESSION['user'] ?>!</h2>
    <h2 class="text-success">View All Orders<h2>
    <h5 class ="d-flex justify-content-center" style = "float: right;"><a href="index.php?action=y">Logout</a></h5>

    <table class="table table-bordered">
        <thead>
            <tr>
            <th scope="col">Order Date</th>
            <th scope="col">Order ID</th>
            <th scope="col">Customer Name</th>
            <th scope="col">Details</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $orders = getOrders();
        foreach ($orders as $anOrder )
        echo (
            "<tr>
            <td>$anOrder[0]</td>
            <td>$anOrder[1]</td>
            <td>$anOrder[2], $anOrder[3]</td>
            <td><a href = 'index.php?action=view&id=$anOrder[1]'>View details</a></td>
            <tr>"
        )
        ?>


        </tbody>
    </table>
    <hr height: 100px; color="green">
</body>
</html>


<!-- <td><a href = '?action=view&id=$anOrder[1]'>View details</a></td> -->