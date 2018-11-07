<div class="col-sm-8">
    <br>
    <br>
    <div class="pen-title">
        <h1>Swimmingpool Form</h1><span>Pen <i class='fa fa-paint-brush'></i> + <i class='fa fa-code'></i> by <a
                    href='http://andytran.me'><b>du</b> PEC</a></span>
    </div>
    <!-- Form Module-->
    <div class="module form-module">
        <!--
                    <div class="toggle"><i class="fa fa-times fa-pencil"></i>
                        <div class="tooltip">Click Me</div>
                    </div>
        -->

        <div class="form">
            <h2>Login to your account</h2>
            <form>
                <input type="text" placeholder="Username"/>
                <input type="password" placeholder="Password"/>
                <button>Login</button>
            </form>
        </div>
        <div class="form form-group">
            <h2>Swimmingpool Form</h2>

            <form action="<?php echo $action; ?>" method="post">
                <input type="text" placeholder="Name" name="name"
                                 value="<?php echo isset($swimmingpool[0]['name']) ? $swimmingpool[0]['name'] : ''; ?>"
                                 required/>
                <input type="text" placeholder="Email" name="email"
                                  value="<?php echo isset($swimmingpool[0]['email']) ? $swimmingpool[0]['email'] : ''; ?>"
                                  required/></p>

                <select class="form-control" name="type" value = "Type" required>
                                    <option>Student</option>
                                    <option>Non-Student</option>
                                    <option>Elite class</option>
                                </select><br>


                <select class="form-control" name="gender" value = "Gender" required>
                    <option>Male</option>
                    <option>Female</option>

                </select><br>

                <input type="hidden" name="id"
                       value="<?php echo isset($swimmingpool[0]['id']) ? $swimmingpool[0]['id'] : ''; ?>"/>
                <input type="hidden" name="id" value="swimmingpool"/>
                <p><input class = "btn btn-primary" type="submit" name="submit" value="<?php echo $button; ?>"/></p>

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




