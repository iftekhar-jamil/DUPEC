<div class="col-sm-8">
    <br/>
    <br/>
    <br/>
    <br/>
    <div class="container-fluid">
        <div  style="text-align: center">
            <h1 style="font-weight: bold">Fixtures</h1>
        </div>

        <div style="margin-top: 5%;" class="row">
            <div class="col-xs-12 col-md-10 col-md-offset-1">

                <div class="table-responsive">

                    <table id="example" class="table table-bordered table-hover table-striped">
                        <thead style="font-weight: bold">
                        <tr>
                            <th><b>#</b></th>
                            <th><b>Sport name</b></th>
                            <th><b>Team name</b></th>
                            <th><b>Team name</b></th>
                            <th><b>Date</b></th>
                            <th><b>Time</b></th>
                            <th><b>Predict</b></th>
                            <th><b>Win Percentage</b></th>


                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($fixture as $fixtures): $segment++; ?>
                            <tr>
                                <th scope="row">
                                    <?php echo $segment; ?>
                                </th>
                                <td>
                                    <?php echo $fixtures['sportname']; ?>
                                </td>
                                <td>
                                    <?php echo $fixtures['team1']; ?>
                                </td>
                                <td>
                                    <?php echo $fixtures['team2']; ?>
                                </td>
                                <td>
                                    <?php echo $fixtures['date']; ?>
                                </td>
                                <td>
                                    <?php echo $fixtures['time']; ?>
                                </td>
                                <td>
                                    <form class = "form-inline" id="resetPassword" name="resetPassword" method="post" action="<?php echo base_url()."Fixture/predict/".$segment; ?>"
                                          onsubmit="return validate()">
                                        <input type="radio" name="predict" required value=<?php echo $fixtures['team1']; ?> >  <?php echo $fixtures['team1']; ?>
                                        <input type="radio" name="predict" value=<?php echo $fixtures['team2']; ?> >  <?php echo "   ".$fixtures['team2']; ?>
                                        <span> </span><input type="submit" value="submit" class="button btn-primary">
                                    </form>


                                </td>
                                <td>
                                    <?php if(($arr[$segment-1]['cnt1']+$arr[$segment-1]['cnt2'])==0) echo "0%"."<br>"."0%"; else {echo ($fixtures['team1']."=".round($arr[$segment-1]['cnt1']/($arr[$segment-1]['cnt1']+$arr[$segment-1]['cnt2']),2)*100)."%";
                                    echo "<br>";
                                    echo ($fixtures['team2']."=".round($arr[$segment-1]['cnt2']/($arr[$segment-1]['cnt1']+$arr[$segment-1]['cnt2']),2)*100)."%";} ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                        <tfoot>

                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>
