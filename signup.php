<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="login.css">
    </head>
    <body>    
    <div class="container">
            <h1 class = "header">SIGN UP</h1>
            <form action = "register.php" method = "POST">
            <div>
                <div class="form-control">
                    <label for="email">Email id</label>
                    <input type="email" id="email" name = "email" placeholder="Enter your email" required >
                </div>
                <div class="form-control">
                    <label for="password">Password</label>
                    <input type="password" id="password" name = "password" placeholder = "Enter your password" required>
                </div>
                
                <div class="form-control">
                    <input type="submit" value = "Register">
                </div>
                <div class="form-control">
                <label>Choose an exam</label>
                 <div class = "options"><label class = "radio-btn"><input type = "radio" name = "exam" value = "1" required>Jee advanced</label></div>
                 <div class = "options"><label class = "radio-btn"><input type = "radio" name = "exam" value = "2">Jee main</label></div>
                 <div class = "options"><label class = "radio-btn"><input type = "radio" name = "exam" value = "3">BITSAT</label></div>
                 <div class = "options"><label class = "radio-btn"><input type = "radio" name = "exam" value = "4">VITEEE</label></div>
                 <div class = "options"><label class = "radio-btn"><input type = "radio" name = "exam" value = "5">SRMJEE</label></div>
                 <div class = "options"><label class = "radio-btn"><input type = "radio" name = "exam" value = "6">WBJEE</label></div>
                 <div class = "options"><label class = "radio-btn"><input type = "radio" name = "exam" value = "7">NEET</label></div>
                 <div class = "options"><label class = "radio-btn"><input type = "radio" name = "exam" value = "8">AIIMS</label></div>
                 <div class = "options"><label class = "radio-btn"><input type = "radio" name = "exam" value = "9">JIPMER</label></div>
                 <div class = "options"><label class = "radio-btn"><input type = "radio" name = "exam" value = "10">NEET PG</label></div>
                 <div class = "options"><label class = "radio-btn"><input type = "radio" name = "exam" value = "11">AIIMS PG</label></div>
                 <div class = "options"><label class = "radio-btn"><input type = "radio" name = "exam" value = "12">JIPMER PG</label></div>
                 <div class = "options"><label class = "radio-btn"><input type = "radio" name = "exam" value = "13">KCET</label></div>
                 <div class = "options"><label class = "radio-btn"><input type = "radio" name = "exam" value = "14">AP/TS EAMCET</label></div>
                 <div class = "options"><label class = "radio-btn"><input type = "radio" name = "exam" value = "15">NEET MDS</label></div>
                </div>
                <div class="form-control">
                    <a href = "login.php"> Already registered ? Log in </a>
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
            </div>
            
    </div>
    </body>
</html>