</br>
</br>
</br>
</br>

<?php echo form_open('live/liveUpdate') ?>

<div class="col-sm-4">

    <h1>Batsmen <?php //echo $batsmen_reg[0]['reg1']."---<br>---" ;//print_r($batsmen_reg[0]['reg1']); ?></h1>
    <input type="radio" name="batsman" value="<?php echo $batsmen_reg[0]['reg1']; ?>"
        <?php if (isset($_POST['batsman']) && $_POST['batsman'] == $batsmen_reg[0]['reg1']) {
            echo ' checked="checked"';
        } ?> required>
    <?php echo $batsmen[0][0]['name']; ?> <br>

    <input type="radio" name="batsman" value=<?php echo $batsmen_reg[0]['reg2']; ?>
        <?php if (isset($_POST['batsman']) && $_POST['batsman'] == $batsmen_reg[0]['reg2']) {
            echo ' checked="checked"';
        } ?>>
    <?php echo $batsmen[1][0]['name']; ?> <br>

    <input type="radio" name="batsman" value=<?php echo $batsmen_reg[0]['reg3']; ?>
        <?php if (isset($_POST['batsman']) && $_POST['batsman'] == $batsmen_reg[0]['reg3']) {
            echo ' checked="checked"';
        } ?>>
    <?php echo $batsmen[2][0]['name']; ?> <br>


</div>


<div class="col-sm-4">
    <h1>Scores</h1>

    <input id="inp" name="run" type="text" value="<?php echo isset($_POST['run']) ? $_POST['run'] : ''; ?>"/>
    <button type="submit" class="btn btn-primary">Submit</button>


</div>

<div class="col-sm-4">
    <h1>Bowlers</h1>

    <input type="radio" name="bowler" value=<?php echo $bowlers_reg[0]['reg1']; ?>
    <?php if (isset($_POST['bowler']) && $_POST['bowler'] == $bowlers_reg[0]['reg1']) {
        echo ' checked="checked"';
    } ?> required>
    <?php echo $bowlers[0][0]['name']; ?> <br>

    <input type="radio" name="bowler" value=<?php echo $bowlers_reg[0]['reg2']; ?>
        <?php if (isset($_POST['bowler']) && $_POST['bowler'] == $bowlers_reg[0]['reg2']) {
            echo ' checked="checked"';
        } ?>>
    <?php echo $bowlers[1][0]['name']; ?> <br>


    <input type="radio" name="bowler" value=<?php echo $bowlers_reg[0]['reg3']; ?>
        <?php if (isset($_POST['bowler']) && $_POST['bowler'] == $bowlers_reg[0]['reg3']) {
            echo ' checked="checked"';
        } ?>>
    <?php echo $bowlers[2][0]['name'] ?> <br>

</div>

</form>

<div align="center">
    <?php echo form_open('live/inningsBreak') ?>
    <input id="break" type="hidden"/>
    <button type="submit" class="btn btn-danger">Innings Break</button>
    </form>
</div>

<br> <br> <br>
<div align="center">
    <?php echo form_open('live/finishMatch') ?>
    <input id="break" type="hidden"/>
    <button type="submit" class="btn btn-danger">Finish match</button>
    </form>
</div>
</div>
</body>
</html>


