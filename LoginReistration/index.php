<?php
session_start();
$action = filter_input(INPUT_POST, 'action');
if(!$action)
{
    $action = filter_input(INPUT_GET, 'lo');
}
$match = false;
switch($action)
    {
        case 'Login':
            $txtname = filter_input(INPUT_POST, 'userName');

            $file = fopen('usersName.txt', 'rb');
            //$names[] = '';
            // feof($file) -> returns true when the end of file is reached
            
            while (!feof($file)){
                $names[] =trim(fgets($file));
            }

            fclose($file);
            if ($txtname == "")
            {
                echo "Please enter username!";
                include "login.php";
            }
            else 
            {
                foreach ($names as $anUserName) 
                {
                    if ($txtname ==  $anUserName)
                    {

                        $_SESSION['user'] =  $anUserName;
                            include "membersOnly.php";
                        $match = true;
                        break;
                    }
                }
                if (!$match)
                {
                    echo "No such user!";
                    include "login.php";
                }
            }


            break;
        
        case 'y':
            echo ("session destroyed");
            session_destroy();
            include "login.php";
            break;

        default:
            include "login.php";
    }
?>