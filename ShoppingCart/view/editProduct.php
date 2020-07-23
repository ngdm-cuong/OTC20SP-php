<?php
       if (!isset($_SESSION['user'])){
        header("Location:../index.php");   
    } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Edit Product</title>
</head>
<body>
    <div class = "container">
        <h2 class ="d-flex justify-content-center text-success">Welcome <?php echo $_SESSION['user'] ?>!</h2>

        <h2 class="text-success">Edit Product ID #<?=$id?> </h2>
            <form action="" method = "POST">
                Category:       <select name ="categoryID" id="">
                                    <?php
                                        $id = filter_input(INPUT_GET, 'id');
                                        include "../model/database.php";
                                        $categories = getCategories(); 
                                        foreach ($categories as $aCategory)
                                            echo("<option value='$aCategory[0]'>$aCategory[1]</option>");                
                                    ?>
                                </select><br>
                <?php
                    $id = filter_input(INPUT_GET, 'id');
                    $productAry = getAProduct($id);    
                    echo ("Product Code:   <input type='text' name = 'productCode' value = '$productAry[2]'><br>");
                    echo ("Product Name:  <input type='text' name = 'productName' value = '$productAry[3]'><br>");
                    echo ("List Price:  <input type='text' name = 'listPrice'value = '$productAry[4]'><br>");                
                ?>
                <input type="submit" value = "Confirm Edit" name = "action">
            </form>
            <hr>
            <a href="index.php">Back to Orders</a>
    </div>
</body>
</html>



