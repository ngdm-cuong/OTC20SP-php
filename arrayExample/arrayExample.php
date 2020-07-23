<?php

// create an empty array
$array = array();
print_r($array);

//create an array
$array_name = array ("Kelce", "Mahomes");
//print_r($array_name);
//var_dump($array_name);

//referring to an element in the array
//echo($array_name['2']);
$array_name[] = "Hill";
//print_r($array_name);
$array_name [4]= "Head Coach";
//print_r($array_name);


//add elements to an array
for ($i=0; $i <10; $i++)
{
    $newAry[] = random_int(0,100);

}

// for ($i=0; $i < count($newAry); $i++)
// {
//     echo"$newAry[$i] \n";
// }

foreach($newAry as $value)
{
    echo $value."\n";
}

//associate array
$tax_rate = array("Hawaii" => 4.25, "Ca" => 8.25);
print_r($tax_rate);

foreach($tax_rate as $key => $values)
{
    echo ($key . " : " . $values. "\n");
}

echo $tax_rate['Hawaii'];
?>