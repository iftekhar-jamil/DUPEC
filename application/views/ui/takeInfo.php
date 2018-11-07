<div class="col-sm-8">
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="pen-title">
        <h1>Apply info</h1><span>Pen <i class='fa fa-paint-brush'></i> + <i class='fa fa-code'></i> by <a
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
        <div class="form">
            <h2>Match Details</h2>

            <form action="<?php echo base_url() . 'admin/apply'; ?>" method="post">
                <input type="text" placeholder="Organization name" name="organization"
                />
                <input type="text" placeholder="Email" name="email"
                       required/>
                <input type="text" placeholder="Purpose" name="purpose"
                       required/>

                <p><input class = "btn btn-success" type="submit" name="submit" value="Submit"/></p>
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


<!--<div class="col-sm-8">-->
<!---->
<!--    <form action="--><?php //echo base_url() . 'admin/apply'; ?><!--" method="post">-->
<!--        Organization name: <input type="text" name="organization"><br><br>-->
<!--        Email : <input type="email" name="email"><br><br>-->
<!--        Purpose: <input type="text" name="purpose"><br><br>-->
<!--        <input class="btn btn-box-tool" type="submit" name="submit" value="Submit">-->
<!--    </form>-->
<!--</div>-->
<!--</div>-->
<!--</body>-->
<!--</html>-->