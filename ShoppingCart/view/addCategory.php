<?php
       if (!isset($_SESSION['user'])){
        header("Location:../index.php");   
    } 
?>
<!-- <a href="../index.php">Home</a> -->
<button type="button" class="btn btn-success"  onclick="myFunction('CatDiv')">Add Category</button>
<br>
<br>
<div id="CatDiv" style="display: none;">
<form action="" method = "POST" id="CatDIV">
    Category:  <input type="text" name = "category"><br>
    <input type="submit" value = "Add Category" name = "action">
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