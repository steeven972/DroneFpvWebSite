<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../assets/css/login-style.css">
        <title>Login</title>
    </head>
    <body>
        <main>
            <div class="container">
                <div class="content">
                    <h1>Login</h1>
                    <div class="inputField">
                        <form action="register.php" method="POST" id="loginForm"> 
                            <input name="email" class="input email" type="email" id="email" placeholder="E-mail" required autocomplete="email"><br>
                            <input name="password" class="input password" type="password" id="password" placeholder="password" required>
                            <div class="bottomLogin">
                                <label class="remember" for="remember-me"><input type="checkbox" id="remember-me-check">Remember me</label>
                                <p class="forgot"><a href="#">Forgot password ?</a></p>
                            </div>
                            <button class="Submit" type="submit" >Submit</button>
                        </form> 
                    </div>
                    
                </div>
                
                
            </div>
       

        </main>
        <!---<script src="../assets/js/index.js"></script>--->
    </body>
</html>