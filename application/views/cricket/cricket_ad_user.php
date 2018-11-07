<div class="col-sm-8">
    <br/>
    <br/>
    <br/>
    <br/>
    <div class="container-fluid">
        <div style="text-align: center">
            <h1>Cricket Scores</h1>
        </div>

        <div style="margin-top: 5%;" class="row">
            <div class="col-xs-12 col-md-10 col-md-offset-1">

                <div class="table-responsive">

                    <table id="example" class="table table-bordered table-hover table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Winning Team</th>
                            <th>Losing Team</th>
                            <th>Man of the match</th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($matches as $match): $segment++; ?>
                            <tr>
                                <th scope="row">
                                    <?php echo $segment; ?>
                                </th>
                                <td>
                                    <?php echo $match['win']; ?>
                                </td>
                                <td>
                                    <?php echo $match['lose']; ?>
                                </td>
                                <td>
                                    <?php echo $match['man']; ?>
                                </td>

                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Winning Team</th>
                            <th>Losing Team</th>
                            <th>Man of the match</th>
                        </tr>
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