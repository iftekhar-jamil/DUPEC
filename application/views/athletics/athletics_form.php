<div class="col-sm-8">
    <div class="pen-title">
        <h1 style="font-weight: bold">Athletics Match Result</h1><span>Pen <i class='fa fa-paint-brush'></i> + <i class='fa fa-code'></i> by <a
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

            <form action="<?php echo $action; ?>" method="post">
                Hall name: <input type="text" placeholder="Hall name" name="hall_name"
                       value="<?php echo isset($athleticsmatch[0]['hall_name']) ? $athleticsmatch[0]['hall_name'] : ''; ?>" required/>
                Sport name: <input type="text" placeholder="Sport name" name="sportname"
                       value="<?php echo isset($athleticsmatch[0]['sportname']) ? $athleticsmatch[0]['sportname'] : ''; ?>" required/>
                Rank 1: <input type="text" placeholder="Rank 1" name="rank1"
                       value="<?php echo isset($athleticsmatch[0]['rank1']) ? $athleticsmatch[0]['rank1'] : ''; ?>" required/>
                Rank 2:<input type="text" placeholder="Rank 2" name="rank2"
                       value="<?php echo isset($athleticsmatch[0]['rank2']) ? $athleticsmatch[0]['rank2'] : ''; ?>" required/>
                Rank 3:<input type="text" placeholder="Rank 3" name="rank3"
                       value="<?php echo isset($athleticsmatch[0]['rank3']) ? $athleticsmatch[0]['rank3'] : ''; ?>" required/>
                <input type="hidden" name="id" value="<?php echo isset($athleticsmatch[0]['id']) ? $athleticsmatch [0]['id'] : ''; ?>"/>

                <p><input class="btn btn-success" type="submit" name="submit" value="<?php echo $button; ?>"/></p>
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