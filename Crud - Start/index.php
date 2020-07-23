        <?php

    include "./model/database.php";

    $action = filter_input(INPUT_POST, 'action');
    if(!$action)
    {
        $action = filter_input(INPUT_GET, 'action');
    }


    if ($action == 'DEL')
    {
        $id = filter_input(INPUT_GET, 'id');
        delteProduct($id);
        include "./view/products.php";
    }
    else if ($action == 'edit')
    {
        $id = filter_input(INPUT_GET, 'id');
        $aryProduct = getAProduct($id);
        include "./view/product_update.php";
    }
    else if ($action == 'update')
    {
        //echo("asdasd");
        updateProduct();
        include "./view/products.php";
    }
    else{
        include "./view/products.php";
    }

