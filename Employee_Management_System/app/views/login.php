<?php
echo $result;
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="style.css" />
    <title>Login Form Demo</title>
    <link rel="stylesheet" href="/Employee_Management_System/public/assests/css/loginPage.css">
</head>
  <body>
    <div class="login-wrapper">
      <form action="" class="form" action ="POST">
        <h2>Login</h2>
        <div class="input-group">
          <label for="loginEmail"></label>
          <input type="email" name="email" id="loginUser" required />
            
          </span>
        </div>
        <div class="input-group">
          <label for="loginPassword"></label>
          <input type="password" name="password" id="loginPassword" required/>
          
        </div>
        <input type="submit" value="Login" class="submit-btn" />
      </form>
    </div>
  </body>
</html>
