<div class="col-sm-8">
    <div class="pen-title">
        <h1>Account info</h1><span>Pen <i class='fa fa-paint-brush'></i> + <i class='fa fa-code'></i> by <a
                    href='#'><b>du</b> PEC</a></span>
    </div>
    <!-- Form Module-->
    <div class="module form-module">
        <div class="form">
            <h2>Account info</h2>
            <form>
                <input type="text" placeholder="Username"/>
                <input type="password" placeholder="Password"/>
                <button>Edit</button>
            </form>
        </div>
        <div class="form">
            <h2>Edit Account</h2>

            <form action="<?php echo base_url()."user/editProfile"; ?>" method="post">
                <p>Username</p>
                <input type="text" placeholder="Username" name="1"
                       value="<?php echo $arr[0]['username']; ?>" required/>
                <p>Name</p>
                <input type="text" placeholder="Name" name="2"
                       value="<?php echo $arr[0]['name']; ?>" required/>
                <p>Usertype</p>
                <input type="text" placeholder="Usertype" name="3"
                       value="<?php echo $arr[0]['user_type']; ?>" required/>
<!--                <input type="text" list="gender" placeholder="Gender" name="4"-->
<!--                       value="--><?php //echo $arr[0]['gender']; ?><!--" required/>-->
<!--                <datalist id="gender">-->
<!--                    <option value="Male">-->
<!--                    <option value="Female">-->
<!--                </datalist>-->
<!--                <input type="text" name="5" placeholder="Favourite player" value="--><?php //echo $arr[0]['fplayer']; ?><!--"/>-->
<!--                <input type="text" name="6" placeholder="Favourite team"value="--><?php //echo $arr[0]['fteam']; ?><!--"/>-->
<!--                <input type="date" name="8" value="--><?php //echo $arr[0]['dob']; ?><!--"/>-->
                <input type="hidden" name="4" value="<?php echo $arr[0]['user_id']; ?>"/>

                <p><input type="submit" class="btn btn-success" name="submit" value="Submit"/></p>
            </form>
        </div>
        <!--        <div class="cta"><a href="http://andytran.me">Forgot your password?</a></div>-->
    </div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='https://codepen.io/andytran/pen/vLmRVp.js'></script>

    <script src="<?php echo base_url(); ?>assets/form/js/index.js"></script>
</div>
</div>
</body>
</html>




<!--<!doctype html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport"-->
<!--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">-->
<!--    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
<!--    <title>Document</title>-->
<!--</head>-->
<!--<body>-->
<!---->
<!--<form action="--><?php //echo base_url()."user/editUser"; ?><!--" method="post">-->
<!--    Username: <input required name  = "1" type="text" value=--><?php //echo $arr[0]['username']; ?><!-- > <br><br>-->
<!--        Name: <input required name  = "2" type="text" value=--><?php //echo $arr[0]['name']; ?><!-- > <br><br>-->
<!--    Usertype: <input required name  = "3" type="text" value=--><?php //echo $arr[0]['user_type']; ?><!-- > <br><br>-->
<!--    <input required name  = "4" type="hidden" value=--><?php //echo $arr[0]['user_id']; ?><!-- > <br><br>-->
<!--    <input type="submit" class="btn btn-success">-->
<!---->
<!--</form>-->
<!--</body>-->
<!--</html>-->
