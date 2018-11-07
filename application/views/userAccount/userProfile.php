
<div class="main">
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <h1>Personal Profile </h1>
    <div class="content">
        <div class="slider-content">
            <!--FlexSlider-->
            <script defer src="<?php echo base_url(); ?>/assets/userAccount/js/jquery.flexslider.js"></script>
            <script type="text/javascript">
                $(function () {
                    SyntaxHighlighter.all();
                });
                $(window).load(function () {
                    $('.flexslider').flexslider({
                        animation: "slide",
                        start: function (slider) {
                            $('body').removeClass('loading');
                        }
                    });
                });
            </script>
            <!--End-slider-script-->
            <!-- responsiveslides -->
            <section class="slider">
                <div class="flexslider">
                    <ul class="slides">

                        <li>
                            <div class="profile">
                                <div class="profile-img2">
                                    <div class="pro-details">


                                        <h3><?php echo $userdata['username']; ?></h3>
                                        <p><?php echo $userdata['usertype']; ?></p>


                                    </div>
                                </div>
                                <div class="fb-icons">

                                    <!--
<ul>
<li><a class="icon-1" href="#"></a></li>
<li><a class="icon-2" href="#"></a></li>
<li><a class="icon-5" href="#"></a></li>
<li><a class="icon-6" href="#"></a></li>
<li><a class="icon-7" href="#"></a></li>

</ul>
-->

                                </div>
                                <div class="skill-grid">
                                    <h3>My info:</h3>
                                    <div class="bar">
                                        <p>Name</p>
                                    </div>
                                    <div class="bar">
                                        <p><?php echo $userdata['name']; ?></p>
                                    </div>
                                    <div class="clear"></div>
                                    <div class="bar">
                                        <p>Usertype</p>
                                    </div>
                                    <div class="bar">
                                        <p><?php echo $userdata['usertype']; ?></p>
                                    </div>
                                    <div class="clear"></div>
                                    <div class="bar">
                                        <p>Username</p>
                                    </div>
                                    <div class="bar">
                                        <p><?php echo $userdata['username']; ?></p>
                                    </div>

                                    <div class="clear"></div>
                                    <div class="bar">
                                        <p>Email</p>
                                    </div>
                                    <div class="bar">
                                        <p><?php echo $userdata['email']; ?></p>
                                    </div>

                                    <div class="clear"></div>
                                    <div class="bar">
                                        <p>Gender</p>
                                    </div>
                                    <div class="bar">
                                        <p><?php echo $userdata['gender']; ?></p>
                                    </div>


                                    <div class="clear"></div>
                                    <div class="bar">
                                        <p>Favourite Team</p>
                                    </div>
                                    <div class="bar">
                                        <p><?php echo $userdata['fteam']; ?></p>
                                    </div>



                                    <div class="clear"></div>
                                    <div class="bar">
                                        <p>Favourite Player</p>
                                    </div>
                                    <div class="bar">
                                        <p><?php echo $userdata['fplayer']; ?></p>
                                    </div>


                                    <div class="clear"></div>
                                    <div class="bar">
                                        <p>Date of Birth</p>
                                    </div>
                                    <div class="bar">
                                        <p><?php echo $userdata['dob']; ?></p>
                                    </div>


                                    <div class="clear"></div>

                                    <div class="bar">
                                        <p><a href = "<?php echo base_url().'user/deleteAccount'?>" >Delete Account</a></p>
                                    </div>
                                    <div class="clear"></div>

                                    <div class="bar">
                                        <span> </span> <span> </span> <span> </span> <span> </span>
                                        <p><a href = "<?php echo base_url().'user/editAccount/'.$userdata['user_id']; ?>" >Edit Account</a></p>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            </section>
        </div>
    </div>
    <!--            <p class="footer">Copyright © 2016 Personal Profile Widget. All Rights Reserved | Template by <a href="https://w3layouts.com/" target="_blank">w3layouts</a></p>-->
</div>
</div>
</body>
</html>