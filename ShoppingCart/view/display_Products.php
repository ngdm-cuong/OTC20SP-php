<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
        $("button").click(function(){
            $("p").slideToggle();
        });
        });
    </script>
    <title>Document</title>
</head>
<body>
<div class = "container">
    <h2  style = "float: left;" class="text-success">View All Products</h2>
    <!-- <h5 style = "float: right;"><a href="view/login.php">Login</a></h5> -->
    <table class="table table-bordered">
        <thead>
            <tr>
            <th scope="col">Product Name</th>
            <th scope="col">Product Code</th>
            <th scope="col">List Price</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $products = getActiveProducts();
            foreach ($products as $aProduct )
            echo (
                "<tr>
                <td>$aProduct[0]</td>
                <td>$aProduct[1]</td>
                <td>$$aProduct[2]</td>
                <tr>"
            );
        ?>
        </tbody>
    </table>
    <hr>
</div>
</body>
</html>