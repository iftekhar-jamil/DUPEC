<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <title>Simple Form</title>
    <style>
        #reset{
            color: white;
            width: 425px;
            background-color: #53151f;

        }
    </style>
</head>
<body>
<div id="mainDiv">
    <h1> Sign Up</h1>
    <?php echo form_open('register/register_here_operator')?>
        <input type="text" placeholder="Full Name" name="name">
        <input type="text" placeholder="user name" name="username">
        <input type="email" placeholder="Email" name="email">
        <input type="password" placeholder="Password" name="pass">
        
    <?php echo form_submit(array('type'=>'submit', 'id'=>'submit', 'value' => 'Register'))?>
<!--
        <input type="reset" name="Cancel" id="submit">
        <input type="submit" name="Submit" id="submit">-->


    </form>

</div>
</body>
</html>