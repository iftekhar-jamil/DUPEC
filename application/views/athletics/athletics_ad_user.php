<div class="col-sm-8">
    <br/>
    <br/>
    <br/>
    <br/>
    <div class="container-fluid">
        <div style="text-align: center">
            <h1 style="font-weight: bold">Athletics Result</h1>
        </div>
        <div style="margin-top: 5%;" class="row">
            <div class="col-xs-12 col-md-10 col-md-offset-1">

                <div class="table-responsive">
                    <table id="example" class="table table-bordered table-hover table-striped">
                        <thead style="font-weight: bold">
                        <tr>
                            <th>#</th>
                            <th>Hall name</th>
                            <th>Sport name</th>
                            <th>Rank 1</th>
                            <th>Rank 2</th>
                            <th>Rank 3</th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($athleticsmatches as $athleticsmatch): $segment++; ?>
                            <tr>
                                <th scope="row">
                                    <?php echo $segment; ?>
                                </th>
                                <td>
                                    <?php echo $athleticsmatch['hall_name']; ?>
                                </td>
                                <td>
                                    <?php echo $athleticsmatch['sportname']; ?>
                                </td>
                                <td>
                                    <?php echo $athleticsmatch['rank1']; ?>
                                </td>
                                <td>
                                    <?php echo $athleticsmatch['rank2']; ?>
                                </td>
                                <td>
                                    <?php echo $athleticsmatch['rank3']; ?>
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




