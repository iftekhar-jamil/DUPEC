<?php include 'header.php'; ?>
<div class="container">
    <?php echo form_open('register/register_here',array('class'=>'form_horizontal'))?>

        <div class="form-group">
            <div class="col-lg-10">
                <?php echo form_input(array('type'=>'text','class'=>'form-control','name'=>'name','placeholder'=>'Name'));?>
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-10">
                <?php echo form_input(array('type'=>'text','class'=>'form-control','name'=>'email','placeholder'=>'Email'));?>
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-10">
                <?php echo form_input(array('type'=>'password','class'=>'form-control','name'=>'pass','placeholder'=>'Password'));?>
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-10">
                <select name="univ" >
                    <option value="" selected="selected">Versity Name</option>
                    <option value="DU">DU</option>
                    <option value="DU">JU</option>
                    <option value="DU">KU</option>
                    <option value="DU">RU</option>
                </select>
            </div>
        </div>
    <div class="form-group">
        <div class="col-lg-10">
            <select name="dept" style="width: 500px;">
                <option value="" selected="selected">Department Name</option>
                <option value="IIT">IIT</option>
                <option value="EEE">EEE</option>
                <option value="CSE">CSE</option>
                <option value="ECE">ECE</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <div class="col-lg-10">
            <select name="type" style="width: 500px;">
                <option value="" selected="selected">Type</option>
                <option value="director">Chairman/Director</option>
                <option value="main_off">Maintenance Officer</option>
                <option value="faculty">Faculty</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <div class="col-lg-10">
            <?php echo form_input(array('type'=>'text','class'=>'form-control','name'=>'phone','placeholder'=>'Phone'));?>
        </div>
    </div>
    <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
                <?php echo form_reset(array('type'=>'reset', 'class'=>'btn btn-danger', 'value' => 'Cancel'))?>
                <?php echo form_submit(array('type'=>'submit', 'class'=>'btn btn-primary', 'value' => 'Register'))?>
            </div>
        </div>


    <?php echo form_close(); ?>


</div>




<?php include 'footer.php'?>
