<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock Change Percentage</title>
    
</head>
<body>

<?php
    if (isset($_Get['current']))
    {
        include "stockCalculation.php";
    }
    else
        include "stockForm.php";  
?>
</body>
</html>