<?php 
session_start();
$action = filter_input(INPUT_POST, 'action');

if(!$action)
{
    $action = filter_input(INPUT_GET, 'lo');
}

switch($action)
{

    case 'Login':
    $txtname = filter_input(INPUT_POST, 'userName');

    if ($txtname == "Cuong")
    {
        $_SESSION['user'] = "Cuong";
            include "membersOnly.php";
    }
    else
    {
        echo "No such user!";
        include "login.php";
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