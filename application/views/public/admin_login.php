<?php include ('header.php')?>
<div style="text-align: center">
    <h1>Register TO Create Your Own Inventory</h1><br>
</div>
<div class="container">
    <?php echo form_open('login/login_here',array('class'=>'form_horizontal'))?>
    <form class="form-horizontal">



        <div class="form-group">
            <div class="col-lg-10">
                <?php echo form_input(array('type'=>'text','class'=>'form-control','id'=>'inputemail','placeholder'=>'User Name'));?>
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-10">
                <?php echo form_input(array('type'=>'password','class'=>'form-control','id'=>'inputpassword','placeholder'=>'Password'));?>

            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
                <?php echo form_reset(array('type'=>'reset', 'class'=>'btn btn-danger', 'value' => 'Cancel'))?>
                <?php echo form_submit(array('type'=>'submit', 'class'=>'btn btn-primary', 'value' => 'Login'))?>

            </div>
        </div>

    </form>

</div>
<?php include ('footer.php')?>
