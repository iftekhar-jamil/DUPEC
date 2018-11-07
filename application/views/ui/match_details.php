<div class="col-sm-8">
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>

    <p style="font-weight: bold; font-size: 16px"><kbd><?php echo "TEAM: " . $team1 . " " . "Total: " . $team1_total; ?>
        <?php echo "TEAM: " . $team2 . " " . "Total: " . $team2_total; ?></kbd></p>
    <p style="font-weight: bold; font-size: 16px"><kbd><?php if ($team1_total > $team2_total) echo $team1 . " won the match by " . ($team1_total - $team2_total) . " run(s)";
        else echo $team2 . " won the match by " . ($team2_total - $team1_total) . " run(s)"; ?></kbd></p>
    <div style="text-align: center">
        <h1  style="font-weight: bold;"> <?php echo $team1 . " Scorecard<br>"; ?> </h1>
    </div>
    <div style="text-align: center">
        <h3 style="alignment: center; font-weight: bold">Batting</h3>
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
                            <a href="<?php echo site_url("Live/showPlayerDetails/" . $r1); ?>"><?php echo $p1; ?></a>
                        </td>
                        <td> <?php echo $p1bp; ?></td>
                        <td><?php echo $p1rs; ?> </td>
                        <td><?php echo $p14s; ?> </td>
                        <td><?php echo $p16s; ?> </td>
                        <td><?php if ($p1bp != 0) echo round(($p1rs / $p1bp) * 100,2); else echo 0; ?> </td>
                    </tr>

                    <tr>
                        <td>
                            <a href="<?php echo site_url("Live/showPlayerDetails/" . $r2); ?>"><?php echo $p2; ?></a>
                        </td>
                        <td> <?php echo $p2bp; ?></td>
                        <td><?php echo $p2rs; ?> </td>
                        <td><?php echo $p24s; ?> </td>
                        <td><?php echo $p26s; ?> </td>
                        <td><?php if ($p2bp != 0) echo round(($p2rs / $p2bp) * 100,2); else echo 0; ?> </td>
                    </tr>

                    <tr>
                        <td>
                            <a href="<?php echo site_url("Live/showPlayerDetails/" . $r3); ?>"><?php echo $p3; ?></a>
                        </td>
                        <td> <?php echo $p3bp; ?></td>
                        <td><?php echo $p3rs; ?> </td>
                        <td><?php echo $p34s; ?> </td>
                        <td><?php echo $p36s; ?> </td>
                        <td><?php if ($p3bp != 0) echo round(($p3rs / $p3bp) * 100,2); else echo 0; ?> </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div style="text-align: center">
        <h3  style="font-weight: bold; "> Bowling</h3>
    </div>
    <div style="margin-top: 5%;" class="row">
        <div class="col-xs-12 col-md-10 col-md-offset-1">

            <div class="table-responsive">

                <table class="table table-bordered table-hover table-striped">
                    <thead style="font-weight: bold">
                    <tr>
                        <th>Player name</th>
                        <th>Runs given</th>
                        <th>Balls bowled</th>
                        <th>Wickets</th>
                        <th>Economy rate</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>

                        <td>
                            <a href="<?php echo site_url("Live/showPlayerDetails/" . $r1); ?>"><?php echo $p1; ?></a>
                        </td>
                        <td> <?php echo $p1bb; ?></td>
                        <td><?php echo $p1rg; ?> </td>
                        <td><?php echo $p1w; ?> </td>
                        <td><?php if ($p1bb != 0) echo ($p1rg / $p1bb) * 6; else echo 0; ?> </td>
                    </tr>

                    <tr>
                        <td>
                            <a href="<?php echo site_url("Live/showPlayerDetails/" . $r2); ?>"><?php echo $p2; ?></a>
                        </td>
                        <td> <?php echo $p2bb; ?></td>
                        <td><?php echo $p2rg; ?> </td>
                        <td><?php echo $p2w; ?> </td>
                        <td><?php if ($p2bb != 0) echo ($p2rg / $p2bb) * 6; else echo 0; ?> </td>
                    </tr>

                    <tr>
                        <td>
                            <a href="<?php echo site_url("Live/showPlayerDetails/" . $r3); ?>"><?php echo $p3; ?></a>
                        </td>
                        <td> <?php echo $p3bb; ?></td>
                        <td><?php echo $p3rg; ?> </td>
                        <td><?php echo $p3w; ?> </td>
                        <td><?php if ($p3bb != 0) echo ($p3rg / $p3bb) * 6; else echo 0; ?> </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div style="text-align: center">
        <h1  style="font-weight: bold; font-size: 16px"> <?php echo $team2 . " Scorecard<br>"; ?> </h1>
        <h3 style="font-weight: bold">Batting</h3>
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
                            <a href="<?php echo site_url("Live/showPlayerDetails/" . $r4); ?>"><?php echo $p4; ?></a>
                        </td>
                        <td> <?php echo $p4bp; ?></td>
                        <td><?php echo $p4rs; ?> </td>
                        <td><?php echo $p44s; ?> </td>
                        <td><?php echo $p46s; ?> </td>
                        <td><?php if ($p4bp != 0) echo round(($p4rs / $p4bp) * 100,2); else echo 0; ?> </td>
                    </tr>

                    <tr>
                        <td>
                            <a href="<?php echo site_url("Live/showPlayerDetails/" . $r5); ?>"><?php echo $p5; ?></a>
                        </td>
                        <td> <?php echo $p5bp; ?></td>
                        <td><?php echo $p5rs; ?> </td>
                        <td><?php echo $p54s; ?> </td>
                        <td><?php echo $p56s; ?> </td>
                        <td><?php if ($p5bp != 0) echo round(($p5rs / $p5bp) * 100,2); else echo 0; ?> </td>
                    </tr>

                    <tr>
                        <td>
                            <a href="<?php echo site_url("Live/showPlayerDetails/" . $r6); ?>"><?php echo $p6; ?></a>
                        </td>
                        <td> <?php echo $p6bp; ?></td>
                        <td><?php echo $p6rs; ?> </td>
                        <td><?php echo $p64s; ?> </td>
                        <td><?php echo $p66s; ?> </td>
                        <td><?php if ($p6bp != 0) echo round(($p6rs / $p6bp) * 100,2); else echo 0; ?> </td>
                    </tr>
                    </tbody>
                    <tfoot>
                </table>
            </div>
        </div>
    </div>
    <div style="text-align: center">
        <h3 style="font-weight: bold"> Bowling</h3>
    </div>
    <div style="margin-top: 5%;" class="row">
        <div class="col-xs-12 col-md-10 col-md-offset-1">

            <div class="table-responsive">

                <table
                        class="table table-bordered table-hover table-striped">
                    <thead style="font-weight: bold">
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
                            <a href="<?php echo site_url("Live/showPlayerDetails/" . $r4); ?>"><?php echo $p4; ?></a>
                        </td>
                        <td> <?php echo $p4bb; ?></td>
                        <td><?php echo $p4rg; ?> </td>
                        <td><?php echo $p4w; ?> </td>
                        <td><?php if ($p4bb != 0) echo ($p4rg / $p4bb) * 6; else echo 0; ?> </td>
                    </tr>

                    <tr>
                        <td>
                            <a href="<?php echo site_url("Live/showPlayerDetails/" . $r5); ?>"><?php echo $p5; ?></a>
                        </td>
                        <td> <?php echo $p5bb; ?></td>
                        <td><?php echo $p5rg; ?> </td>
                        <td><?php echo $p5w; ?> </td>
                        <td><?php if ($p5bb != 0) echo ($p5rg / $p5bb) * 6; else echo 0; ?> </td>
                    </tr>

                    <tr>
                        <td>
                            <a href="<?php echo site_url("Live/showPlayerDetails/" . $r6); ?>"><?php echo $p6; ?></a>
                        </td>
                        <td> <?php echo $p6bb; ?></td>
                        <td><?php echo $p6rg; ?> </td>
                        <td><?php echo $p6w; ?> </td>
                        <td><?php if ($p6bb != 0) echo ($p6rg / $p6bb) * 6; else echo 0; ?> </td>
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

