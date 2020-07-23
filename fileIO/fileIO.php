<?php

// get the working directory 
$path = getcwd();
//echo($path);

//get the directory listing
$items = scandir($path);

//print_r($items);
$file = array();
foreach($items as $item)
{
    $item_path = $path . DIRECTORY_SEPARATOR . $item;
    if (is_file( $item_path))
    {
        $file[] = $item;
    }    
    //echo($item . "\n");
}
//print_r($file);

// SIMPLE File IO - create the sampletext.txt file

$text = file_get_contents("sampletext.txt");
 echo($text);

$text2 = file('sampletext.txt');
// echo($text2);
// write a string to a file
$textOut ="This is line1 \n This is line2";
file_put_contents("messages.txt", $textOut);



//write an array to a file
$arrayNames = ['Stitch', 'Daisy Duck', 'Kuzco', 'Dori'];
$strNames = implode("\n",$arrayNames); // create a string for the output file
//echo($strNames);
//output the string to a text file
file_put_contents('usernames.txt', $strNames); 

// using fopen() (for larger text fiels )

/*
fopen($path, $mode) -> opens file with expecefied move_uploaded_file
rb - open file for reading
wb  - open file for writing
ab  - open file for writing and appends new data
xb - - open file for writing, but if file exists retuns false

*/

$file = fopen('usernames.txt', 'rb');
//$names[] = '';
// feof($file) -> returns true when the end of file is reached

while (!feof($file)){
    $names[] =trim(fgets($file));
}

fclose($file);
//print_r($names);