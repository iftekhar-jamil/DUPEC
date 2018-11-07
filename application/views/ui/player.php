<div class="col-sm-8">
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    <div style="text-align: center">
        <h3> Batting Stats </h3>
    </div>
    <div style="margin-top: 5%;" class="row">
        <div class="col-xs-12 col-md-10 col-md-offset-1">

            <div class="table-responsive">

                <table class="table table-bordered table-hover table-striped">
                    <thead>
                    <tr>
                        <td>Player name</td>
                        <td>Department name</td>
                        <td>Match played</td>
                        <td>Run Scored</td>
                        <td>Balls faced</td>
                        <td>Strike rate</td>
                    </tr>
                    <tbody>

                    <tr>
                        <td><?php echo $arr[0]['name']; ?></td>
                        <td>
                            <a href="<?php echo site_url("Live/showDeptDetails/" . $arr[0]['dept']); ?>"><?php echo $arr[0]['dept']; ?></a>
                        </td>
                        <td><?php echo $arr[0]['match_played']; ?></td>
                        <td><?php echo $arr[0]['runs']; ?></td>
                        <td><?php echo $arr[0]['balls']; ?></td>
                        <td><?php if ($arr[0]['balls'] != 0) echo round($arr[0]['runs'] / $arr[0]['balls'] * 100, 2); else echo "0.00"; ?></td>
                    </tr>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
    <div style="text-align: center">
        <h3> Bowling Stats </h3>
    </div>
    <div style="margin-top: 5%;" class="row">
        <div class="col-xs-12 col-md-10 col-md-offset-1">

            <div class="table-responsive">

                <table class="table table-bordered table-hover table-striped">
                    <thead>
                    <tr>
                    <td>Ball bowled</td>
                    <td>Runs given</td>
                    <td>Wickets taken</td>
                    <td>Economy rate</td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><?php echo $arr[0]['ball_bowled']; ?></td>
                    <td><?php echo $arr[0]['run_given']; ?></td>
                    <td><?php echo $arr[0]['wicket']; ?></td>
                    <td><?php if ($arr[0]['ball_bowled'] != 0) echo round($arr[0]['run_given'] / $arr[0]['ball_bowled'] * 6, 2); else echo "0.00"; ?></td>
                </tr>
                </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>