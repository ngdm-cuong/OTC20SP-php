<?php
       if (!isset($_SESSION['user'])){
        header("Location:../index.php");   
    } 
?>
<!-- <a href="../index.php">Home</a> -->
<button type="button" class="btn btn-success" onclick="myFunction('ProDiv')">Add a Product</button>
<br>
<div id="ProDiv" style="display: none;">
<form action="" method = "POST">
    Category:       <select name ="categoryID" id="">
                        <?php
                            include "../model/database.php";
                            $categories = getCategories(); 
                            foreach ($categories as $aCategory)
                                echo("<option value='$aCategory[0]'>$aCategory[1]</option>");
                        ?>
                    </select><br>
    Product Code:   <input type="text" name = "productCode"><br>
    Product Name:  <input type="text" name = "productName"><br>
    List Price:  <input type="text" name = "listPrice"><br>
    <input type="submit" value = "Add The Product" name = "action">
</form>
</div>



<script>
function myFunction($divId) {
  var x = document.getElementById($divId);
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>