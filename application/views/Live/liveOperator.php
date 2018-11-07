    </br>
    </br>
    </br>
    </br>
    </br>
    </br>

    <?php echo form_open('live/takeInput')?>
    <div class = "col-sm-4">
        <h1> Team 1 Players </h1>

        player 1 name : <input name = "p11" type = "text"/><br><br>
         player 1 Reg# : <input name = "r11" type = "text"/>
        <br><br><br>
        player 2 name : <input name = "p12" type = "text"/><br><br>
        player 2 Reg# : <input name = "r12" type = "text"/><br>
        <br><br>
        player 3 name : <input name = "p13" type = "text"/><br><br>
        player 3 Reg# : <input name = "r13" type = "text"/>

    </div>
    
    
    <div class = "col-sm-4">


        Team1 Id:<br> <input name = "team1" id = "team1" type = "text"/><br><br>
        Team2 Id:<br> <input name = "team2" id = "team2" type = "text"/><br><br>
        Toss win:<br> <input name = "toss" id = "toss" type = "text"/><br><br>
        Batting team:<br> <input name  = "batting" id = "batting" type = "text"/><br><br>



        <button type="submit" class="btn btn-primary" >Submit</button>

    </div>
    
    <div class = "col-sm-4">
        <h1> Team 2 Players </h1>
        player 1 name : <input name = "p21" type = "text"/><br><br>
        player 1 Reg# : <input name = "r21" type = "text"/><br><br>
        <br>
        player 2 name : <input name = "p22" type = "text"/><br><br>
        player 2 Reg# : <input name = "r22" type = "text"/><br><br>
        <br><br>
        player 3 name : <input name = "p23" type = "text"/><br><br>
        player 3 Reg# : <input name = "r23" type = "text"/>
    </div>

</form>
    </div>
</body>
</html>