<div class="col-sm-8">
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
       <div style="text-align: center">
        <h3>Match between <?php echo $arr[0]['team1'] . " vs " . $arr[0]['team2']; ?> </h3>
        <h2><?php //print_r($player1); ?></h2>

        <h1> <?php echo $arr[0]['team1'] . " Scorecard<br>"; ?> </h1>
        <h2 id= "1"><kbd><?php echo "score: " . $arr[0]['team1_total'] . "/" . $arr[0]['team1_wicket']; ?></kbd></h2>
        <h2 id = "over"><kbd><?php echo "over: " . floor((($player1['ball_played'] + $player2['ball_played'] + $player3['ball_played']) / 6)) . "." . (($player1['ball_played'] + $player2['ball_played'] + $player3['ball_played']) % 6); ?></kbd></h2>


        <h3>Batting</h3>
    </div>
    <div style="margin-top: 5%;" class="row">
        <div class="col-xs-12 col-md-10 col-md-offset-1">

            <div class="table-responsive">

                <table class="table table-bordered table-hover table-striped">
                    <thead style="font-weight: bold">
                    <tr>
                        <th>Player name</th>
                        <th>Ball played</th>
                        <th>Run Scored</th>
                        <th>4s</th>
                        <th>6s</th>
                        <th>Strike rate</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <a href="<?php echo site_url("Live/showDeptDetails/" . $player1['player_id']); ?>"><?php echo $player1['player1']; ?></a>
                        </td>
                        <td id= "3"> <?php echo $player1['ball_played']; ?></td>
                        <td id= "4"><?php echo $player1['run_scored']; ?> </td>
                        <td id= "5"><?php echo $player1['fours']; ?> </td>
                        <td id= "6"><?php echo $player1['sixes']; ?> </td>
                        <td id = "7"><?php if ($player1['ball_played'] != 0) echo round(($player1['run_scored'] / $player1['ball_played']) * 100, 2); else echo 0; ?> </td>
                    </tr>

                    <tr>
                        <td>
                            <a href="<?php echo site_url("Live/showDeptDetails/" . $player2['player_id']); ?>"><?php echo $player2['player1']; ?></a>
                        </td>
                        <td id = "8"> <?php echo $player2['ball_played']; ?></td>
                        <td id = "9"><?php echo $player2['run_scored']; ?> </td>
                        <td id = "10"><?php echo $player2['fours']; ?> </td>
                        <td id = "11"><?php echo $player2['sixes']; ?> </td>
                        <td id = "12"><?php if ($player2['ball_played'] != 0) echo round(($player2['run_scored'] / $player2['ball_played']) * 100, 2); else echo 0; ?> </td>
                    </tr>

                    <tr>
                        <td>
                            <a href="<?php echo site_url("Live/showDeptDetails/" . $player3['player_id']); ?>"><?php echo $player3['player1']; ?></a>
                        </td>
                        <td id = "13"> <?php echo $player3['ball_played']; ?></td>
                        <td id = "14"><?php echo $player3['run_scored']; ?> </td>
                        <td id = "15"><?php echo $player3['fours']; ?> </td>
                        <td id = "16"><?php echo $player3['sixes']; ?> </td>
                        <td id = "17"><?php if ($player3['ball_played'] != 0) echo round(($player3['run_scored'] / $player3['ball_played']) * 100, 2); else echo 0; ?> </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div style="text-align: center">
        <h3> Bowling</h3>
    </div>
    <div style="margin-top: 5%;" class="row">
        <div class="col-xs-12 col-md-10 col-md-offset-1">

            <div class="table-responsive">

                <table class="table table-bordered table-hover table-striped">
                    <thead>
                    <tr>
                        <th>Player name</th>
                        <th>Balls bowled</th>
                        <th>Runs given</th>
                        <th>Wickets</th>
                        <th>Economy rate</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>

                        <td>
                            <a href="<?php echo site_url("Live/showDeptDetails/" . $player1['player_id']); ?>"><?php echo $player1['player1']; ?></a>
                        </td>
                        <td id = "18"> <?php echo $player1['ball_bowled']; ?></td>
                        <td id = "19"><?php echo $player1['runs_given']; ?> </td>
                        <td id = "20"><?php echo $player1['wickets']; ?> </td>
                        <td id = "21"><?php if ($player1['ball_bowled'] != 0) echo round(($player1['runs_given'] / $player1['ball_bowled']) * 6, 2); else echo 0; ?> </td>
                    </tr>

                    <tr>
                        <td>
                            <a href="<?php echo site_url("Live/showDeptDetails/" . $player2['player_id']); ?>"><?php echo $player2['player1']; ?></a>
                        </td>
                        <td id="22"> <?php echo $player2['ball_bowled']; ?></td>
                        <td id="23"><?php echo $player2['runs_given']; ?> </td>
                        <td id="24"><?php echo $player2['wickets']; ?> </td>
                        <td id="25"><?php if ($player2['ball_bowled'] != 0) echo round(($player2['runs_given'] / $player2['ball_bowled']) * 6, 2); else echo 0; ?> </td>
                    </tr>

                    <tr>
                        <td>
                            <a href="<?php echo site_url("Live/showDeptDetails/" . $player3['player_id']); ?>"><?php echo $player3['player1']; ?></a>
                        </td>
                        <td id="26"> <?php echo $player3['ball_bowled']; ?></td>
                        <td id="27"><?php echo $player3['runs_given']; ?> </td>
                        <td id="28"><?php echo $player3['wickets']; ?> </td>
                        <td id="29"><?php if ($player3['ball_bowled'] != 0) echo round(($player3['runs_given'] / $player3['ball_bowled']) * 6, 2); else echo 0; ?> </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div style="text-align: center">
        <h1> <?php echo $arr[0]['team2'] . " Scorecard<br>"; ?> </h1>
        <h2 id ="scoreB"><?php echo "score: " . $arr[0]['team2_total'] . "/" . $arr[0]['team2_wicket']; ?></h2>
        <h2 id = "overB"><?php echo "over: " . floor((($player4['ball_played'] + $player5['ball_played'] + $player6['ball_played']) / 6)) . "." . (($player4['ball_played'] + $player5['ball_played'] + $player6['ball_played']) % 6); ?></h2>

        <h3>Batting</h3>
    </div>
    <div style="margin-top: 5%;" class="row">
        <div class="col-xs-12 col-md-10 col-md-offset-1">

            <div class="table-responsive">

                <table class="table table-bordered table-hover table-striped">
                    <thead>
                    <tr>
                        <th>Player name</th>
                        <th>Ball played</th>
                        <th>Run Scored</th>
                        <th>4s</th>
                        <th>6s</th>
                        <th>Strike rate</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>

                        <td>
                            <a href="<?php echo site_url("Live/showDeptDetails/" . $player4['player_id']); ?>"><?php echo $player4['player1']; ?></a>
                        </td>
                        <td id="30"> <?php echo $player4['ball_played']; ?></td>
                        <td id="31"><?php echo $player4['run_scored']; ?> </td>
                        <td id="32"><?php echo $player4['fours']; ?> </td>
                        <td id="33"><?php echo $player4['sixes']; ?> </td>
                        <td id="34"><?php if ($player4['ball_played'] != 0) echo round(($player4['run_scored'] / $player4['ball_played']) * 100, 2); else echo 0; ?> </td>
                    </tr>

                    <tr>
                        <td>
                            <a href="<?php echo site_url("Live/showDeptDetails/" . $player5['player_id']); ?>"><?php echo $player5['player1']; ?></a>
                        </td>
                        <td id="35"> <?php echo $player5['ball_played']; ?></td>
                        <td id="36"><?php echo $player5['run_scored']; ?> </td>
                        <td id="37"><?php echo $player5['fours']; ?> </td>
                        <td id="38"><?php echo $player5['sixes']; ?> </td>
                        <td id="39"><?php if ($player5['ball_played'] != 0) echo round(($player5['run_scored'] / $player5['ball_played']) * 100, 2); else echo 0; ?> </td>
                    </tr>

                    <tr>
                        <td>
                            <a href="<?php echo site_url("Live/showDeptDetails/" . $player6['player_id']); ?>"><?php echo $player6['player1']; ?></a>
                        </td>
                        <td id="40"> <?php echo $player6['ball_played']; ?></td>
                        <td id="41"><?php echo $player6['run_scored']; ?> </td>
                        <td id="42"><?php echo $player6['fours']; ?> </td>
                        <td id="43"><?php echo $player6['sixes']; ?> </td>
                        <td id="44"><?php if ($player6['ball_played'] != 0) echo round(($player6['run_scored'] / $player6['ball_played']) * 100, 2); else echo 0; ?> </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div style="text-align: center">
        <h3> Bowling</h3>
    </div>
    <div style="margin-top: 5%;" class="row">
        <div class="col-xs-12 col-md-10 col-md-offset-1">

            <div class="table-responsive">

                <table class="table table-bordered table-hover table-striped">
                    <thead>
                    <tr>
                        <th>Player name</th>
                        <th>Balls bowled</th>
                        <th>Runs given</th>
                        <th>Wickets</th>
                        <th>Economy rate</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>

                        <td>
                            <a href="<?php echo site_url("Live/showDeptDetails/" . $player4['player_id']); ?>"><?php echo $player4['player1']; ?></a>
                        </td>

                        <td id="45"> <?php echo $player4['ball_bowled']; ?></td>
                        <td id="46"><?php echo $player4['runs_given']; ?> </td>
                        <td id="47"><?php echo $player4['wickets']; ?> </td>
                        <td id="48"><?php if ($player4['ball_bowled'] != 0) echo round(($player4['runs_given'] / $player4['ball_bowled']) * 6, 2); else echo 0; ?> </td>
                    </tr>

                    <tr>
                        <td>
                            <a href="<?php echo site_url("Live/showDeptDetails/" . $player5['player_id']); ?>"><?php echo $player5['player1']; ?></a>
                        </td>
                        <td id="49"> <?php echo $player5['ball_bowled']; ?></td>
                        <td id="50"><?php echo $player5['runs_given']; ?> </td>
                        <td id="51"><?php echo $player5['wickets']; ?> </td>
                        <td id="52"><?php if ($player5['ball_bowled'] != 0) echo round(($player5['runs_given'] / $player5['ball_bowled']) * 6, 2); else echo 0; ?> </td>
                    </tr>

                    <tr>
                        <td>
                            <a href="<?php echo site_url("Live/showDeptDetails/" . $player6['player_id']); ?>"><?php echo $player6['player1']; ?></a>
                        </td>
                        <td id="53"> <?php echo $player6['ball_bowled']; ?></td>
                        <td id="54"><?php echo $player6['runs_given']; ?> </td>
                        <td id="55"><?php echo $player6['wickets']; ?> </td>
                        <td id="56"><?php if ($player6['ball_bowled'] != 0) echo round(($player6['runs_given'] / $player6['ball_bowled']) * 6, 2); else echo 0; ?> </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    // $(document).ready(function () {
    //     setInterval(function () {
    //         location.reload(true);
    //     }, 3500);
    // });

    var idVar = setInterval(function(){ time() }, 5000);

    function timer() {

        document.getElementById("1").innerHTML = "<?php echo "score: " . $arr[0]['team1_total'] . "/" . $arr[0]['team1_wicket'];?>";
    };

    function time() {
        //alert("hello");
        $.ajax({
            type: "POST",
            url: "<?php echo base_url();?>/Live/update",
            dataType: "text",
            success: function (data) {
                // alert(data);
                var array = JSON.parse(data);
                console.log(data);
                var total = parseInt(array.player1.ball_played)+parseInt(array.player2.ball_played)+parseInt(array.player3.ball_played);
                // alert(total);
                //alert(array.arr[0].id)
                //   alert(array.player1.ball_played);
                //document.getElementById("1").innerHTML = "<?php echo "score: " . $arr[0]['team1_total'] . "/" . $arr[0]['team1_wicket'];?>";
                document.getElementById(1).innerHTML = '<kbd>'+"Score: "+array.arr[0].team1_total+"/"+array.arr[0].team1_wicket+'</kbd>';
                //alert("ko");
                document.getElementById("over").innerHTML ='<kbd>'+ "Over: "+Math.floor((parseInt(array.player1.ball_played)+parseInt(array.player2.ball_played)+parseInt(array.player3.ball_played))/6)+"."+total%6+'</kbd>';


                // document.getElementById(a).innerHTML = "Score:"+array.arr[0].team2_total+"/"+array.arr[0].team2_wicket;
                //console.log("a");
                //document.getElementById(ss).innerHTML = "Over A: "+Math.floor((parseInt(array.player1.ball_played)+parseInt(array.player2.ball_played)+parseInt(array.player3.ball_played))/6)+"."+total%6;




                //player1 batting
                document.getElementById(3).innerHTML = array.player1.ball_played;
                document.getElementById(4).innerHTML = array.player1.run_scored;
                document.getElementById(5).innerHTML = array.player1.fours;
                document.getElementById(6).innerHTML = array.player1.sixes;
                if(array.player1.ball_played==0) document.getElementById(7).innerHTML = 0;
                else document.getElementById(7).innerHTML = Math.round((array.player1.run_scored*100)/array.player1.ball_played);

                //player2 batting
                document.getElementById(8).innerHTML = array.player2.ball_played;
                document.getElementById(9).innerHTML = array.player2.run_scored;
                document.getElementById(10).innerHTML = array.player2.fours;
                document.getElementById(11).innerHTML = array.player2.sixes;
                if(array.player2.ball_played==0) document.getElementById(12).innerHTML = 0;
                else document.getElementById(12).innerHTML = Math.round((array.player2.run_scored*100)/array.player2.ball_played);

                //player3 batting
                document.getElementById(13).innerHTML = array.player3.ball_played;
                document.getElementById(14).innerHTML = array.player3.run_scored;
                document.getElementById(15).innerHTML = array.player3.fours;
                document.getElementById(16).innerHTML = array.player3.sixes;
                if(array.player3.ball_played==0) document.getElementById(17).innerHTML = 0;
                else document.getElementById(17).innerHTML = Math.round((array.player3.run_scored*100)/array.player3.ball_played);







                //player1 bowling
                document.getElementById(18).innerHTML = array.player1.ball_bowled;
                document.getElementById(19).innerHTML = array.player1.runs_given;
                document.getElementById(20).innerHTML = array.player1.wickets;
                // document.getElementById(21).innerHTML = array.player2.sixes;
                if(array.player1.ball_bowled==0) document.getElementById(21).innerHTML = 0;
                else document.getElementById(21).innerHTML = Math.round((array.player1.runs_given*6)/array.player1.ball_bowled);

                //player2 bowling
                document.getElementById(22).innerHTML = array.player2.ball_bowled;
                document.getElementById(23).innerHTML = array.player2.runs_given;
                document.getElementById(24).innerHTML = array.player2.wickets;
                // document.getElementById(21).innerHTML = array.player2.sixes;
                if(array.player2.ball_bowled==0) document.getElementById(25).innerHTML = 0;
                else document.getElementById(25).innerHTML = Math.round((array.player2.runs_given*6)/array.player2.ball_bowled);


                //player3 bowling
                document.getElementById(26).innerHTML = array.player3.ball_bowled;
                document.getElementById(27).innerHTML = array.player3.runs_given;
                document.getElementById(28).innerHTML = array.player3.wickets;
                // document.getElementById(21).innerHTML = array.player2.sixes;
                if(array.player3.ball_bowled==0) document.getElementById(29).innerHTML = 0;
                else document.getElementById(29).innerHTML = Math.round((array.player3.runs_given*6)/array.player3.ball_bowled);

                //document.getElementById("formRight").getElementsByTagName("input");
                //alert(document.getElementById("overB").innerHTML);
                document.getElementById("scoreB").innerHTML = '<kbd>'+"Score: "+array.arr[0].team2_total+"/"+array.arr[0].team2_wicket+'</kbd>';
                document.getElementById("overB").innerHTML = '<kbd>'+"Over: "+Math.floor((parseInt(array.player4.ball_played)+parseInt(array.player5.ball_played)+parseInt(array.player6.ball_played))/6)+"."+(parseInt(array.player4.ball_played)+parseInt(array.player5.ball_played)+parseInt(array.player6.ball_played))%6+'</kbd>';
                //alert('hello');

                //alert('hello');
                //player4 batting
                document.getElementById("30").innerHTML = array.player4.ball_played;
                document.getElementById("31").innerHTML = array.player4.run_scored;
                document.getElementById("32").innerHTML = array.player4.fours;
                document.getElementById("33").innerHTML = array.player4.sixes;
                if(array.player4.ball_played==0) document.getElementById("34").innerHTML = 0;
                else document.getElementById("34").innerHTML = Math.round((array.player4.run_scored*100)/array.player4.ball_played);

                //player5 batting
                document.getElementById("35").innerHTML = array.player5.ball_played;
                document.getElementById("36").innerHTML = array.player5.run_scored;
                document.getElementById("37").innerHTML = array.player5.fours;
                document.getElementById("38").innerHTML = array.player5.sixes;
                if(array.player5.ball_played==0) document.getElementById("39").innerHTML = 0;
                else document.getElementById("39").innerHTML = Math.round((array.player5.run_scored*100)/array.player5.ball_played);

                //player6 batting
                document.getElementById("40").innerHTML = array.player6.ball_played;
                document.getElementById("41").innerHTML = array.player6.run_scored;
                document.getElementById("42").innerHTML = array.player6.fours;
                document.getElementById("43").innerHTML = array.player6.sixes;
                if(array.player6.ball_played==0) document.getElementById(44).innerHTML = 0;
                else document.getElementById("44").innerHTML = Math.round((array.player6.run_scored*100)/array.player6.ball_played);



                //player4 bowling

                document.getElementById("45").innerHTML = array.player4.ball_bowled;
                document.getElementById("46").innerHTML = array.player4.runs_given;
                document.getElementById("47").innerHTML = array.player4.wickets;
                // document.getElementById(21).innerHTML = array.player2.sixes;
                if(array.player4.ball_bowled==0) document.getElementById("48").innerHTML = 0;
                else document.getElementById("48").innerHTML = Math.floor((array.player4.runs_given*6)/array.player4.ball_bowled);

                //player5 bowling
                document.getElementById("49").innerHTML = array.player5.ball_bowled;
                document.getElementById("50").innerHTML = array.player5.runs_given;
                document.getElementById("51").innerHTML = array.player5.wickets;
                // document.getElementById(21).innerHTML = array.player2.sixes;
                if(array.player5.ball_bowled==0) document.getElementById("52").innerHTML = 0;
                else document.getElementById("52").innerHTML = Math.floor((array.player5.runs_given*6)/array.player5.ball_bowled);


                //player6 bowling
                document.getElementById("53").innerHTML = array.player6.ball_bowled;
                document.getElementById("54").innerHTML = array.player6.runs_given;
                document.getElementById("55").innerHTML = array.player6.wickets;
                // document.getElementById(21).innerHTML = array.player2.sixes;
                if(array.player6.ball_bowled==0) document.getElementById("56").innerHTML = 0;
                else document.getElementById("56").innerHTML = Math.floor((array.player6.runs_given*6)/array.player6.ball_bowled);

















            }

            // error: function () {
            //     alert("wrong");
            // }
        });
        //alert('hello');
    }


</script>





</body>

</html>

