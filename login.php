<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="login.css">
    </head>
    <body>    
    <div class="container">
            <h1 class = "header">LOGIN</h1>
            <form action = "validation.php" method = "POST">
            <div>
                <div class="form-control">
                    <label for="email">Email id</label>
                    <input type="text" id="email" name = "email" placeholder="Enter your email" required>
                </div>
                <div class="form-control">
                    <label for="password">Password</label>
                    <input type="password" id="password" name = "password" placeholder = "Enter your password" required>
                </div>
                <div class="form-control">
                    <input type="submit" value = "Log in">
                </div></form>
                <form action = "signup.php" method = "POST">
                    <div class="form-control">
                        <input type="submit" value = "Sign up">
                    </div>
                </form>
            </div><form action="index.php" style="display:flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;margin-bottom:5rem;">
                <input style="width:200px;" type="submit" value="Back To Home Page">
                </form>
    </div>
    </body>
</html>