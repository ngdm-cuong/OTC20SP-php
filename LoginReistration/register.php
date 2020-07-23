
<?php
$match = false;
if(filter_input(INPUT_POST, "fname"))
{
    $name =(filter_input(INPUT_POST, "fname"));
    $textOut = $name;

    $file = fopen('usersName.txt', 'rb');
    //$names[] = '';
    // feof($file) -> returns true when the end of file is reached
    
    while (!feof($file)){
        $names[] =trim(fgets($file));
    }
    fclose($file);


        foreach ($names as $anUserName) 
        {
            if ($textOut ==  $anUserName)
            {
                echo "This username has been taken";
                echo "<br>";
                $match = true;
                include "regForm.php";
                break;
            }
            
        }
        if (!$match)
            {
                $addString = fopen('usersName.txt', 'a');//opens file in append mode  
                fwrite($addString, $textOut."\r\n");  
                fclose($addString);  
                //file_put_contents($name.'.txt', $textOut); 
                include 'registerCompleted.php';
            }
    

}
else
{
    include "regForm.php";
}

?>