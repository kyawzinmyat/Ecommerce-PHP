<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"></link>
    <title>Log In</title>
</head>
<body>
<style>
    <?php include 'CSS/login.css'; ?>
</style>    

    <div class="container">
        <input type="checkbox" style="display:none" id="flip">
        <div class="cover">
            <img class="front" src="img/Mobile login-cuate.png">
            <img class="back" src="img/Fingerprint-cuate.png">
        </div>
        <form class="forms" action="#">
            <div class="form-container">
                <div class="login-form">
                    <div class="title">
                        Log In
                    </div>
                    <div class="input-boxes">
                        <div class="input-box">
                            <i class="fa fa-envelope"></i>
                            <input type="text" placeholder="Email" required>
                        </div>    
                        <div class="input-box">
                            <i class="fa fa-lock"></i>
                            <input type="password" placeholder="Password" required>
                        </div>     
                        <div class="text">
                            <a>Forgot Password</a>
                        </div>
                        <div class="button input-box">
                            <input type="submit">
                        </div>      
                        <div class="text">
                            Don't have an account? <label for="flip">Sign Up</label>
                        </div>             
                    </div>
                </div>


                <div class="signup-form">
                    <div class="title">
                        Sign Up
                    </div>
                    <div class="input-boxes">
                        <div class="input-box">
                            <i class="fa fa-envelope"></i>
                            <input type="text" placeholder="Email" required>
                        </div>    
                        <div class="input-box">
                        <i class="fa fa-lock"></i>
                            <input type="text" placeholder="Password" required>
                        </div>    
                        <div class="input-box">
                            <i class="fas fa-lock"></i>
                            <input type="password" placeholder="Confirm Password" required>
                        </div>     

                        <div class="button input-box">
                            <input type="submit">
                        </div>        
                        <div class="text">
                            Already have an account?  <label for="flip">Log In</label>
                        </div>           
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>