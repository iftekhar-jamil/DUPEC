<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/login.css">
    <!--<link rel="stylesheet" type="text/css" href="../../../assets/mycss/adminLogin.css">-->

</head>
<body>
<div class="header">
    <h1>INVENTORY MANAGEMENT SYSTEM</h1>
</div>
<div class="loginBox">
    <img src="../../assets/image/user.png" class="user">
    <h2>Log In Here </h2>
    

    <?php echo form_open('login/loginHere')?>

        <input type="text" name="email" placeholder="Enter Email">

        <input type="password" name="pass" placeholder="Enter Password">
        <input type="submit" id="signInButton" value="Sign In">
    <!--<a href="login/loginHere">
            <button type="button" id="signInButton">Sign In</button>
        </a>
    -->
        <a href="Home/enterEmail">
            Forget Password?
        </a>
        <p><br>Not Registered Yet?</p>
        <a href="login/gotoRegister">
            <button type="button" id="signUpButton" >Sign Up</button>
        </a>
        

    </form>
</div>
</body>
</html>
-->