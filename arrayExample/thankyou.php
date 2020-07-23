<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
    foreach ($_POST as $key => $value)
    {
        if (is_array($value))
        {
            foreach($value as $tasks => $task)
            {
                echo ("$tasks: $task");
            }
        }
        else
        {
            echo ($key . ":" . $value . "<br>");
        }


    }
    ?>
</body>
</html>