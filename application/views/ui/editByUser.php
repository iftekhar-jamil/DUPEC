<div class="col-sm-8">
    <div class="pen-title">
        <h1>Account info</h1><span>Pen <i class='fa fa-paint-brush'></i> + <i class='fa fa-code'></i> by <a
                    href='http://andytran.me'><b>du</b> PEC</a></span>
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
                <p>Gender</p>
                <input type="text" list="gender" placeholder="Gender" name="4"
                       value="<?php echo $arr[0]['gender']; ?>" required/>
                <datalist id="gender">
                    <option value="Male">
                    <option value="Female">
                </datalist>
                <p>Favourite player</p>
                <input type="text" name="5" placeholder="Favourite player" value="<?php echo $arr[0]['fplayer']; ?>"/>
                <p>Favourite team</p>
                <input type="text" name="6" placeholder="Favourite team"value="<?php echo $arr[0]['fteam']; ?>"/>
                <p>Date</p>
                <input type="date" name="8" value="<?php echo $arr[0]['dob']; ?>"/>
                <input type="hidden" name="3" value="<?php echo $arr[0]['user_id']; ?>"/>

                <p><input type="submit" name="submit" value="Submit"/></p>
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