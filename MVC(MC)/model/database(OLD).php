<?php
    getProducts();

    function getProducts()
    {
        $file = fopen('assets/products.csv', 'rb');
        $products = array();
        while (!feof($file))
        {
            $product = fgetcsv($file);
            $products[] = $product;
        }

        print_r($products);
        return $products;
        fclose($file);
    }

    function getAProduct($id)
    {
        
        $aryProducts = getProducts();
        //print_r($aryProducts);
        foreach($aryProducts as $aProduct)
        {
            if ($aProduct[0] == $id){
                //echo "found a match";
                //print_r($aProduct);
                return $aProduct;

            }
        }
    }

?>