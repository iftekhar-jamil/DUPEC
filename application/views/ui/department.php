<div class="col-sm-8">
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    <div style="margin-top: 5%;" class="row">
        <div class="col-xs-12 col-md-10 col-md-offset-1">

            <div class="table-responsive">

                <table class="table table-bordered table-hover table-striped">
                    <thead>
                    <tr>
                        <th>Match Played</th>
                        <th>Wins</th>
                        <th>Loses</th>
                        <th>Wins Percentage</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th><?php echo $arr2[0]['match_played']; ?></th>
                        <th><?php echo $arr2[0]['wins']; ?></th>
                        <th><?php echo $arr2[0]['loses']; ?></th>
                        <th><?php if ($arr2[0]['match_played'] == 0) echo "0%"; else echo round($arr2[0]['wins'] / $arr2[0]['match_played'], 2) . "%"; ?></th>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <h1> Players </h1>
    <a href="<?php echo site_url("Live/showPlayerDetails/" . $arr1[0]['reg1']); ?>"><?php echo $arr1[0]['player1']; ?></a>

    <br>
    <br>

    <a href="<?php echo site_url("Live/showPlayerDetails/" . $arr1[0]['reg2']); ?>"><?php echo $arr1[0]['player2']; ?></a>

    <br>
    <br>

    <a href="<?php echo site_url("Live/showPlayerDetails/" . $arr1[0]['reg3']); ?>"><?php echo $arr1[0]['player3']; ?></a>

    <br>
</div>
</div>
</body>
</html>