<div class="col-sm-8">
    <div class="pen-title">
        <h1>Fixture</h1><span>Pen <i class='fa fa-paint-brush'></i> + <i class='fa fa-code'></i> by <a
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
            <h2>Match Time Details</h2>

            <form action="<?php echo $action; ?>" method="post">
                Game type: <input type="text" placeholder="sportname" name="sportname" value="<?php echo isset($fixture[0]['sportname'])? $fixture[0]['sportname'] : ''; ?>" required/>
                Team1: <input type="text" placeholder="Team name" name="team1" value="<?php echo isset($fixture[0]['team1']) ? $fixture[0]['team1'] : ''; ?>" required/>
                Team2: <input type="text" placeholder="Team name" name="team2" value="<?php echo isset($fixture[0]['team2']) ? $fixture[0]['team2'] : ''; ?>" required/>
                Date: <input type="date" placeholder="Date" name="date" value="<?php echo isset($fixture[0]['date']) ? $fixture[0]['date'] : ''; ?>" required/>
                Time: <input type="time" placeholder="Time" name="time" value="<?php echo isset($fixture[0]['time']) ? $fixture[0]['time'] : ''; ?>" required/>
                <input type="hidden" name="id" value="<?php echo isset($fixture[0]['id']) ? $fixture[0]['id'] : ''; ?>"/>

                <p><input class="btn btn-success" type="submit" name="submit" value="<?php echo $button; ?>"/></p>
            </form>
        </div>
    </div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='https://codepen.io/andytran/pen/vLmRVp.js'></script>


    <script src="<?php echo base_url(); ?>assets/form/js/index.js"></script>
</div>
</div>
</body>
</html>