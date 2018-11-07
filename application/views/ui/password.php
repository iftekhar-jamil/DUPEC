<br>
<br>
<br>
<br>
<div class="col-sm-4">

</div>
<div class="col-sm-8">

<form id="resetPassword" name="resetPassword" method="post" action="<?php echo base_url(); ?>Home/enterPassword"
      onsubmit='return validate()'>


    <h3>Enter Password:</h3>
    <input type="password" name="password1" id="email" required>
    <input type="hidden" name="email" id="emaail" value = <?php echo $email; ?> required>
    <input class = "btn btn-primary" type="submit" value="submit" class="button">
</form>
</div>
</body>
</html>