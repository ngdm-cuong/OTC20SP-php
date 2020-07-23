<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>COOKIES EXAMPLE</title>
</head>
<body>
    <?php
        $name = 'userName';
        $value ='Cuong';
        $expire = strtotime("-1 year"); // -1 make cookie expires
        setcookie($name, $value, $expire);

    ?>
    <h1>This site uses Cookies to track you down and sel your stuff</h1>

</body>
</html>