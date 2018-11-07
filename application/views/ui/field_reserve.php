<div class="col-sm-8">
    <br/>
    <br/>
    <br/>
    <br/>
    <div id="mainDiv">
        <h1> FIELD RESERVATION </h1>
        <br>
        <br>
        <?php echo form_open('form/field') ?>
        <input type="text" placeholder="Organization Name" name="name"><br><br>
        <input type="date" placeholder="Select Date" name="date"><br><br>


        <?php echo form_submit(array('type' => 'submit', 'id' => 'submit', 'value' => 'Apply')) ?>
        <!--
        <input type="reset" name="Cancel" id="submit">
        <input type="submit" name="Submit" id="submit">-->


        </form>
    </div>
</div>
</div>
</body>

</html>