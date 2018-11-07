</br>
</br>
</br>
</br>
</br>
</br>

<?php echo form_open('live/takeInput')?>
<div class = "col-sm-4">
    <h1> Team 1 Players </h1>

    player 1 name : <input name = "p11" value = <?php echo $temp1[0]['player1']; ?> type = "text" /><br><br>
    player 1 Reg# : <input name = "r11" value = <?php echo $temp1[0]['reg1']; ?> type = "text"/>
    <br><br><br>
    player 2 name : <input name = "p12" value = <?php echo $temp1[0]['player2']; ?> type = "text"/><br><br>
    player 2 Reg# : <input name = "r12" value = <?php echo $temp1[0]['reg2']; ?> type = "text"/><br>
    <br><br>
    player 3 name : <input name = "p13" value = <?php echo $temp1[0]['player3']; ?> type = "text"/><br><br>
    player 3 Reg# : <input name = "r13" value = <?php echo $temp1[0]['reg3']; ?>  type = "text"/>

</div>


<div class = "col-sm-4">


    Team1 Id:<br> <input name = "team1" id = "team1" value = <?php echo $temp1[0]['department_name']?> type = "text"/><br><br>
    Team2 Id:<br> <input name = "team2" id = "team2" value = <?php echo $temp2[0]['department_name']?> type = "text"/><br><br>
    Toss win:<br><select name = "toss">
        <option value = <?php echo $temp1[0]['department_name']; ?>>  <?php echo $temp1[0]['department_name']?></option>
        <option value = <?php echo $temp2[0]['department_name']; ?> >  <?php echo $temp2[0]['department_name']?></option>
    </select><br><br>
    Batting team:<br> <select name = "batting">
        <option value = <?php echo $temp1[0]['department_name']; ?>>  <?php echo $temp1[0]['department_name']?></option>
        <option value = <?php echo $temp2[0]['department_name']; ?> >  <?php echo $temp2[0]['department_name']?></option>
    </select><br><br>


    <button type="submit" class="btn btn-primary" >Submit</button>

</div>

<div class = "col-sm-4">
    <h1> Team 2 Players </h1>
    player 1 name : <input name = "p21" value = <?php echo $temp2[0]['player1']; ?> type = "text"/><br><br>
    player 1 Reg# : <input name = "r21" value = <?php echo $temp2[0]['reg1']; ?> type = "text"/><br><br>
    <br>
    player 2 name : <input name = "p22" value = <?php echo $temp2[0]['player2']; ?> type = "text"/><br><br>
    player 2 Reg# : <input name = "r22" value = <?php echo $temp2[0]['reg2']; ?> type = "text"/><br><br>
    <br><br>
    player 3 name : <input name = "p23" value = <?php echo $temp2[0]['player3']; ?> type = "text"/><br><br>
    player 3 Reg# : <input name = "r23" value = <?php echo $temp2[0]['reg3']; ?> type = "text"/>
</div>

</form>
</div>
</body>
</html>