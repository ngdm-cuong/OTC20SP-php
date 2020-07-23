<?php
    function changeCalculate($last, $current)
    {
        $change = (($last - $current)/ $current)*100;
        $change_f = number_format($change,2). '%';
        echo htmlspecialchars($change_f);
    }

?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>  

        <h2>Last value: <?php echo $_GET['last']?></h2>
        <h2>Current value: <?php echo $_GET['current']?></h2>
        <h2>Change: <?php changeCalculate($_GET['last'],$_GET['current'] ) ?></h2>
</body>
</html>
