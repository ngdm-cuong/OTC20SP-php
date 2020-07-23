<?php 
session_start();
include "model/database.php";
$action = filter_input(INPUT_POST, 'action');
$userName = filter_input(INPUT_POST, 'userName');
$password = filter_input(INPUT_POST, 'password');

$categoryID = filter_input(INPUT_POST, 'categoryID');
$productCode = filter_input(INPUT_POST, 'productCode');
$productName = filter_input(INPUT_POST, 'productName');
$listPrice = filter_input(INPUT_POST, 'listPrice');
$category = filter_input(INPUT_POST, 'category');

if(!$action)
{
    $action = filter_input(INPUT_GET, 'action');
}
$id = filter_input(INPUT_GET, 'id');

if (isset($_SESSION['user']))
{
    /// This is where admin can access his special right
    //echo ("Session set");
    
    switch($action)
        {
            case 'y':
                echo ("session destroyed");
                session_destroy();
                header("Location:index.php");  
                //include "index.php";
        break;
            case 'Add The Product':
                
                if ($categoryID == null || $productCode == null || $productName == null|| $listPrice == null)
                {
                    include "view/display_Orders.php";
                    include "view/Adm_display_Products.php";
                    echo ("<h5 class='bg-success text-white'>Please fill out all the boxes!</h5>");
                }
                else
                {
                    addAProduct($categoryID, $productCode, $productName, $listPrice);
                    include "view/display_Orders.php";
                    include "view/Adm_display_Products.php";

                    echo ("<h5 class='bg-success text-white'>Successfully added!</h5>");
                }              
        break;
            case 'view':  
                //echo ("viewimg");
                include "view/display_oneOrder.php";
        break;
            case 'edit':
                include "view/editProduct.php";
        break;
            case 'Confirm Edit';
                if ($categoryID == null || $productCode == null || $productName == null|| $listPrice == null)
                {
                    header("Location:index.php?action=edit&id=$id");
                    echo ("<h5 class='bg-success text-white'>Please fill out all the boxes!</h5>"); // will not work because this load the whole index, which action now will be empty
                    
                }
                else
                {
                    editAProduct($id,$categoryID, $productCode, $productName, $listPrice);
                    include "view/display_Orders.php";
                    include "view/Adm_display_Products.php";
                    echo ("<h5 class='bg-success text-white'>Successfully edited!</h5>");
                } 

        break;
            case 'DEL';
                deactiveAProduct($id);
                header("Location:index.php");  
        break;
            case 'Add Category':
                if ($category == null)
                {
                    echo ("<h5 class='bg-success text-white'>Please fill out Category box!</h5>");
                    include "view/display_Orders.php";
                    include "view/Adm_display_Products.php";
                    echo ("<h5 class='bg-success text-white'>Please fill out Category box!</h5>");
                }
                else
                {
                    addCategory($category);
                    include "view/display_Orders.php";
                    include "view/Adm_display_Products.php";
                    echo ("<h5 class='bg-success text-white'> \"$category\" added to the Category table :)</h5>");
                } 
            break;
            default:
                //echo("default loged");
                include "view/display_Orders.php";
                include "view/Adm_display_Products.php";
                    
        }
}
else
{
   // echo "switch else";
    switch($action)
        {
            case 'Login':
                if ($userName == "")
                    {                       
                        header("Location: view/loginError.php?er=NoUser"); 
                    }
                else
                    {
                        //echo "verify";
                        if (verifyUser($userName,$password))
                        {
                            $_SESSION['user'] =  $userName;
                            $_SESION['password'] = $password;
                            $id = filter_input(INPUT_GET, 'id');
                            if($id != null)
                            {
                                include "view/display_oneOrder.php";
                            }
                            else
                            {
                                include "view/display_Orders.php";
                                include "view/Adm_display_Products.php";
                            }
                                
                        }
                        else
                        {
                            header("Location: view/loginError.php?er=WrongInfo"); 
                        }
                    }
                break;
            
            default:
                include "view/display_Products.php";
                include "view/login.php";
                break;
        }
    }
 

?>