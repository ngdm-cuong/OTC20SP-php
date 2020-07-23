<?php
    include "model/database.php";

    $id = filter_input(INPUT_GET, 'id');
    $postID= filter_input(INPUT_POST, 'id');
    $postName =filter_input(INPUT_POST, 'productName');
    $postPrice =filter_input(INPUT_POST, 'price');
    $action = filter_input(INPUT_GET, 'action');


    if($postID == !null)
    {
        addAProduct($postID,$postName,$postPrice );
    }
    if ($id == null)
    {
        include "view/display_products.php";
        if($action == 'edit' )
        {
            include "./view/edit.php";
        }
        else if ($action == 'del')
        {

        }
        else if ($action == 'update')
        {

        }
    }
    else 
    {
        include "view/display_product.php";
    }
    


?>