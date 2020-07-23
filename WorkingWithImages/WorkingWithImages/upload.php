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
    //var_dump($_FILES);
    print_r($_FILES);
    //get the temporary name
    $tmp_name = $_FILES['file1']['tmp_name']; // file1 is an array, we get into that array , get to the tmp_name cursor or what ever
    //get the path where you will store the files
    foreach ($tmp_name as $key => $value)
    {
        echo ("\r\n NEWLINE \r\n");
        echo $value;
        
        $savePath = getcwd() .DIRECTORY_SEPARATOR . "images"; 
       // echo $savePath;
        // getcwd = Get current working directory
        // .Directory_seperator is the for the "/" or "\" (depends on the operating system)
    
        //add the correct file name to the path
        $img = $_FILES['file1']['name'][$key];
        echo $img;
        $imageName = $savePath . DIRECTORY_SEPARATOR . $img;
    
        //MOVE THE UPLOADED FILE TO THE NEW LOCATION
        $success = move_uploaded_file($value, $imageName);
    
        if($success)
        {
            echo"Moved successfully";
                echo"<img src='images/$img'>";
        }
    }


    ?>
    
</body>
</html>