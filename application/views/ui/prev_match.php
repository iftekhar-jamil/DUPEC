<div class="col-sm-8">
<br/>
<br/>
<br/>
<br/>
<div class="container-fluid">
    <div class="pen-title" style="text-align: center">
        <h1 style="font-weight: bold">Previous Cricket Matches</h1>
    </div>
    <div style="margin-top: 5%;" class="row">
        <div class="col-xs-12 col-md-6 col-md-offset-3">

            <div class="table-responsive">
                <table id="example" class="table table-bordered table-hover table-striped">
                    <thead style="font-weight: bold">
                    <tr>
                        <th>#</th>
                        <th>Team Name</th>
                        <th>Team Name</th>
                        <th>Win</th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php foreach ($arr as $matches): $segment++; ?>
                        <tr>
                            <th scope="row">
                                <?php echo $segment; ?>
                            </th>
                            <td>
                                <?php echo $matches['team1']; ?>
                            </td>
                            <td>
                                <?php echo $matches['team2']; ?>
                            </td>
                            <td>
                                <?php if ($matches['team1_total'] > $matches['team2_total']) echo $matches['team1' ];
                                else echo $matches['team2'] ?></br>
                                <a href="<?php echo site_url("Live/showMatchDetails/" . $matches['id']); ?>"><?php echo 'match details' ?></a>
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




