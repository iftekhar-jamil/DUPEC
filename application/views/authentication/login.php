<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login V2</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>/assets/authentication/images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/authentication/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/authentication/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/authentication/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/authentication/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/authentication/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/authentication/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/authentication/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/authentication/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/authentication/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/authentication/css/main.css">
    <!--===============================================================================================-->
    <style>
        .error{
            color: red;
        }
    </style>
</head>
<body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form class="login100-form validate-form" action="<?php echo base_url() . 'login/loginHere'; ?>" method="post">
<!--					<span class="login100-form-title p-b-26">-->
<!--						Welcome-->
<!--					</span>-->
                <span class="login100-form-title p-b-48">
						<i class="">duPEC</i>
					</span>
                <span class="login100-form-title p-b-26">
						Log in
					</span>

                <p style="display: <?php echo $visibility?>;color: red">Incorrect email or password </p><br>

                <div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
                    <p class="focus-input100" style="font-size: 1.3em">Email</p><br>
                    <input class="input100" type="email" name="email"  value="<?php echo isset($email) ? $email: '';?>" required>
                    <span class="focus-input100" data-placeholder=""></span>
                    <?php echo form_error('email', '<p class="error">', '</p>'); ?>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <p class="focus-input100" style="font-size: 1.3em">Password</p><br>
                    <span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
                    <input class="input100" type="password" name="pass">
                    <span class="focus-input100"  data-placeholder="" style="font-size: 13em"></span>
                    <?php echo form_error('pass', '<p class="error">', '</p>'); ?>
                </div>

                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button class="login100-form-btn">
                            Login
                        </button>
                    </div>
                </div>
                <br>
                <div class="text-center ">
						<span class="txt1">
							Continue as guest ?
						</span>

                    <a class="txt2" href="<?php echo base_url(); ?>login/gotoGuest">
                        Yes
                    </a>
                </div>
                <br><br>
                <div class="text-center ">
                    <a class="txt2" href="<?php echo site_url('Home/enterEmail'); ?>">
                        Forget password?
                    </a>
                </div>

                <div class="text-center ">
						<span class="txt1">
							Don’t have an account?
						</span>

                    <a class="txt2" href="<?php echo base_url(); ?>register">
                        Sign Up
                    </a>
                </div>

            </form>
        </div>
    </div>
</div>


<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="<?php echo base_url(); ?>/assets/authentication/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url(); ?>/assets/authentication/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url(); ?>/assets/authentication/vendor/bootstrap/js/popper.js"></script>
<script src="<?php echo base_url(); ?>/assets/authentication/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url(); ?>/assets/authentication/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url(); ?>/assets/authentication/vendor/daterangepicker/moment.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/authentication/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url(); ?>/assets/authentication/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="<?php echo base_url(); ?>/assets/authentication/js/main.js"></script>

</body>
</html>







