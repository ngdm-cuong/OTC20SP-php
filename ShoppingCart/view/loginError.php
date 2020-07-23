<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Empty username</title>
</head>
<body>
<div class = "">

    <?php
        $error = filter_input(INPUT_GET, 'er');
        if ($error == "NoUser" )
        {
            echo ("<p class ='text-danger'>*Please enter both User Name and Password<p>");
            include "noUser.php";
        }
        else
        {
            echo ("<p class ='text-danger'>*Wrong User Name or Password<p>");
            include "noUser.php";
        }
    
    ?>
    
    <p style = "float: Left;"><a href="../index.php">Back</a></p>
   
</div>
</body>

</html>