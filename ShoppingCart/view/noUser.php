<!-- Adjust the Action to where it sends data to the index page to verify-->
<div >  
        <h2 class ="d-flex justify-content-center text-success ">Login</h2>
        <div class="row justify-content-md-center">
            <div class = "col-md-auto">
                <form action="../index.php" method="post" class ="justify-content-center ">
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
