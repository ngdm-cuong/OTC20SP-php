
<div>
    <h2  style = "float: left;" class="text-success">View All Products</h2>
    <!-- <h5 style = "float: right;"><a href="view/login.php">Login</a></h5> -->
    <table class="table table-bordered">
        <thead>
            <tr>
            <th scope="col">Product Name</th>
            <th scope="col">Product Code</th>
            <th scope="col">List Price</th>
            <th scope="col">Available</th>
            <th scope="col">Option</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $products = getAllProducts();
            foreach ($products as $aProduct )
                {
                    if($aProduct[3] == 0)
                    {
                        echo (
                            "<tr>
                            <td>$aProduct[0]</td>
                            <td>$aProduct[1]</td>
                            <td>$$aProduct[2]</td>
                            <td>NO</td>
                            <td> <a href = '?action=DEL&id=$aProduct[4]'>Delete</a> | <a href = '?action=edit&id=$aProduct[4]'>Edit</a></td>
                            <tr>"
                        );
                    }
                    else if ($aProduct[3] == 1)
                    {
                        echo (
                            "<tr>
                            <td>$aProduct[0]</td>
                            <td>$aProduct[1]</td>
                            <td>$$aProduct[2]</td>
                            <td>YES</td>
                            <td> <a href = '?action=DEL&id=$aProduct[4]'>Delete</a> | <a href = '?action=edit&id=$aProduct[4]'>Edit</a></td>
                            <tr>"
                        );
                    }
                }
          
        ?>
        </tbody>
    </table>
    <!-- <a href="view/addAProduct.php"><h2>Add a product</h2></a>  -->
    <hr>
    <?php
        include "addAProduct.php"; 
    ?>
    <hr>
    <?php
        include "addCategory.php"; 
    ?>
</div>
<!-- 
echo (
                "<tr>
                <td>$aProduct[0]</td>
                <td>$aProduct[1]</td>
                <td>$$aProduct[2]</td>
                <td>$aProduct[3]</td>
                <td> <a href = '?action=DEL&id=$aProduct[4]'>Delete</a> | <a href = '?action=edit&id=$aProduct[4]'>Edit</a></td>
                <tr>"
            ); -->