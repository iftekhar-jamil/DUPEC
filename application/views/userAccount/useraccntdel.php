<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Please Enter your password</h1>
    <form id="resetPassword" name="resetPassword" method="post" action="<?php echo base_url(); ?>user/deleteAccount"
          onsubmit='return validate()'>
    <input type="password" name = "password">
    <input type="submit" value="submit" class="button">
    </form>

</body>
</html>