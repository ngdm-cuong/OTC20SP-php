
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Session Practice</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<!-- <body class= "container-fluid p-3 mb-2 bg-success text-white "> -->
<body>
    <div >  
        <h2 class ="d-flex justify-content-center text-success ">Login</h2>
        <div class="row justify-content-md-center">
            <div class = "col-md-auto">
                <form action="" method="post" class ="justify-content-center ">
                    User Name: <input type="text" name="userName">
                    <br>
                    <!-- Password field -->
                    Password: <input type="password" value="Bazzzinga!" name="password" id="myInput" style="margin-left: 12px;">
                    <br><br>
                    <input type="checkbox" onclick="myFunction()">Show Password
                    <input type="submit" value= "Login" name="action">
                </form>
            </div>      
        </div>
        <br>
        <div class ="d-flex justify-content-center ">
            <p>Need an account? <a href="register.php" class="text-white">Sign Up</a> </p> 
        </div>
        
    </div>
    
</body>
<script>
    function myFunction() {
    var x = document.getElementById("myInput");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
    }
</script>
    
</html>