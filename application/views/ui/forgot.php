<br>
<br>
<br>
<br>
<div class="col-sm-4">

</div>
<div class="col-sm-8">
<form id="resetPassword" name="resetPassword" method="post" action="<?php echo base_url(); ?>Home/enterEmail"
      onsubmit='return validate()'>


    <h3>Enter Email:</h3>
    <input type="email" name="email1" id="email" style="width:250px" required>

    <input class = "btn btn-primary" type="submit" value="submit" class="button">
    <p style="display: <?php echo $visibility?>;color: red">Email does not matches</p>
</form>
</div>
</div>
</body>
</html>


