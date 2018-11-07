<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/mycss/style.css">
    <title>Simple Form</title>
</head>
<body>
<div id="mainDiv">
    <h1> Sign Up</h1>
    <?php echo form_open('register/register_here')?>
        <input type="text" placeholder="Name" name="name">

        <input type="email" placeholder="Email" name="email">
        <input type="password" placeholder="Password" name="pass">
        <select name="univ" style="width: 425px;">
            <option value="" selected="selected">Versity Name</option>
            <option value="DU">DU</option>
            <option value="DU">JU</option>
            <option value="DU">KU</option>
            <option value="DU">RU</option>
        </select>
        <select name="dept" style="width: 425px;">
            <option value="" selected="selected">Department Name</option>
            <option value="IIT">IIT</option>
            <option value="EEE">EEE</option>
            <option value="CSE">CSE</option>
            <option value="ECE">ECE</option>
        </select>
        <select name="type" style="width: 425px;">
            <option value="" selected="selected">Designation</option>
            <option value="director">Chairman/Director</option>
            <option value="main_off">Maintenance Officer</option>
            <option value="faculty">Faculty</option>
        </select>

        <?php echo form_input(array('type'=>'number','name'=>'phone','placeholder'=>'Phone'));?>

    <?php echo form_reset(array('type'=>'reset', 'id'=>'submit', 'value' => 'Cancel'))?>
    <?php echo form_submit(array('type'=>'submit', 'id'=>'submit', 'value' => 'Register'))?>
<!--
        <input type="reset" name="Cancel" id="submit">
        <input type="submit" name="Submit" id="submit">-->


    </form>

</div>
</body>
</html>