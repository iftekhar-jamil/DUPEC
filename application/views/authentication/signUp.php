<!DOCTYPE html>
<html lang="en">
<head>
    <title>duPEC</title>
    <meta charset="UTF-8">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>/assets/authentication/images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
          href="<?php echo base_url(); ?>/assets/authentication/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
          href="<?php echo base_url(); ?>/assets/authentication/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
          href="<?php echo base_url(); ?>/assets/authentication/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
          href="<?php echo base_url(); ?>/assets/authentication/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
          href="<?php echo base_url(); ?>/assets/authentication/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
          href="<?php echo base_url(); ?>/assets/authentication/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
          href="<?php echo base_url(); ?>/assets/authentication/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
          href="<?php echo base_url(); ?>/assets/authentication/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/authentication/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/authentication/css/main.css">
    <!--===============================================================================================-->
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <form class="login100-form validate-form" action="<?php echo base_url() . 'register/register_here'; ?>"
                  method="post">
                <!--					<span class="login100-form-title p-b-26">-->
                <!--						Welcome-->
                <!--					</span>-->
                <span class="login100-form-title p-b-48">
						<i class="">duPEC</i>
					</span>
                <span class="login100-form-title p-b-26">
						Sign Up
					</span>
                <div class="wrap-input100 ">
                    <p class="focus-input100"style="font-size: 1.3em">Name</p><br>
                    <input class="input100" type="text" name="name" value="<?php echo isset($name) ? $name : ''; ?>"
                           id="name" required>
                    <span class="focus-input100" data-placeholder=""></span>
                </div>
                <div class="wrap-input100 validate-input">
                    <p class="focus-input100"style="font-size: 1.3em">Date of Birth</p>
                    <br>
                    <br>
                    <input class="input100" type="date" name="dob" style="font-size: 1.3em" value="<?php echo isset($dob) ? $dob : ''; ?>"
                           id="dob" required>
                    <span class="focus-input100" data-placeholder=""></span>
                </div>

                <div class="wrap-input100 validate-input">
                    <p class="focus-input100"style="font-size: 1.3em">Favourite Team</p><br>
                    <input class="input100" type="text" name="fteam" value="<?php echo isset($fteam) ? $fteam : ''; ?>"
                           id="fteam">
                    <span class="focus-input100" data-placeholder=""></span>
                </div>
                <div class="wrap-input100 validate-input">
                    <p class="focus-input100"style="font-size: 1.3em">Favourite Player</p><br>
                    <input class="input100" type="text" name="fplayer"
                           value="<?php echo isset($fplayer) ? $fplayer : ''; ?>" id="fplayer">
                    <span class="focus-input100" data-placeholder=""></span>
                </div>

                <select class="input100" name="gender" style="font-size: 1.3em" 0 required>
                    <option value="" selected="selected"style="font-size: 1em">Gender</option>
                    <option value="Male"style="font-size: 1em">Male</option>
                    <option value="Female"style="font-size: 1em">Female</option>
                </select>
                <br>
                <div class="wrap-input100 validate-input">
                    <p class="focus-input100"style="font-size: 1.3em">Username</p><br>
                    <input class="input100" type="text" name="username"
                           value="<?php echo isset($username) ? $username : ''; ?>" id="username" required>
                    <span class="focus-input100" data-placeholder=""></span>
                    <?php echo form_error('username', '<p class="error">', '</p>'); ?>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Valid email is: a@b.c">
                    <p class="focus-input100"style="font-size: 1.3em">Email</p><br>
                    <input class="input100" type="email" name="email" value="<?php echo isset($email) ? $email : ''; ?>"
                           required>
                    <span class="focus-input100" data-placeholder=""></span>
                    <?php echo form_error('email', '<p class="error">', '</p>'); ?>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <p class="focus-input100"style="font-size: 1.3em">Password</p><br>

                    <span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
                    <input class="input100" type="password" name="pass">
                    <span class="focus-input100" data-placeholder=""></span>
                </div>
                <?php echo form_error('pass', '<p class="error">', '</p>'); ?>

                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <p class="focus-input100"style="font-size: 1.3em">Confirm password</p><br>
                    <span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
                    <input class="input100" type="password" name="confirmPassword" id="confirmPassword">
                    <span class="focus-input100" data-placeholder=""></span>
                </div>
                <?php echo form_error('confirmPassword', '<p class="error">', '</p>'); ?>


                <div class="container-login100-form-btn">
                    <div class="wrap-login100-form-btn">
                        <div class="login100-form-bgbtn"></div>
                        <button class="login100-form-btn">
                            Sign up
                        </button>
                    </div>
                </div>
                <br><br>

                <div class="text-center ">
						<span class="txt1">
							Already have an account
						</span>

                    <a class="txt2" href="<?php echo base_url() . 'login/loginHere'; ?>">
                        log in
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


