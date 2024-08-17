<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>userlogin</title>
<link rel="stylesheet" href="usercss/style userlogin.css">
</head>
<body>

<div class="container">
    <div class="column left-column">
                        <!-- company logo and tittle -->
        <div class="logo">
            <img src="userimages/kuala-logo.png" alt="Logo" width="150">
        </div><br>
        <div class="text">  
            <p>Welcome to</p>
            <h2>Kuala Tech<br>Limited Company</h2>
        </div>
    </div>
    <div class="column">
        <div class="login-form">    <!-- user login form -->
            <h1>User Login</h1><br><br>
            <form action="LOGIN.php" method="post">
                <label type="email">Email ID</label><br><br>
                <input type="email" id="email" name="email" placeholder="Enter Email ID" required>
                <br><br><br>
                <label type="password">Password</label><br><br>
                <input type="password" id="password" name="password" placeholder="Enter Password" required>
                    <p><a href="forgetpwd.php" id="userforgot">Forgot password ?</a></p>
                <br>
                <input type="submit" value="Login"><br><br><br>

                        <!-- USER REGISTRATION -->
                <p> Don't have an account ?<a href="register.php" id="userreg"> Register</a></p>
            </form>
        </div>
    </div>
</div>
     <!-- THE FOOTER PART -->
     <p class="down">@2024 Kuala Tech Limited Company.All rights reserved</p> 
</body>
</html>
