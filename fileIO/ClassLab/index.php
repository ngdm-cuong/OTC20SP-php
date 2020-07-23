<?php
if(filter_input(INPUT_POST, "fname"))
{
    $name =(filter_input(INPUT_POST, "fname"));
    $product = (filter_input(INPUT_POST, "products"));
    $qty = (filter_input(INPUT_POST, "Qantity"));
    $textOut = "Name:".$name ."\n"."Product:".$product ."Quantity:".$qty ;
    file_put_contents($name.'.txt', $textOut); 
    include 'orderComplete.php';
}
else
{
    include 'orderForm.php';
}

?>