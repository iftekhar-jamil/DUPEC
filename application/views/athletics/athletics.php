<div class="col-sm-8">
    <br/>
    <br/>
    <br/>
    <br/>
    <div class="container-fluid">
        <div style="text-align: center">
            <h1 style="font-weight: bold">Athletics Scores</h1>
        </div>

        <div style="margin-top: 5%;" class="row">
            <div class="col-xs-12 col-md-10 col-md-offset-1">

                <p><a class="btn btn-lg btn-info" href="<?php echo site_url('athletics/create'); ?>">New Athletics Match</a>
                </p>

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
                            <th>Action</th>
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
                                <td>
                                    <a class="btn btn-primary" href="<?php echo site_url('athletics/edit') . '/' . $athleticsmatch['id']; ?>"><span
                                                class="glyphicon glyphicon-edit" aria-hidden="true">Edit</span></a>
                                    <a class="btn btn-primary" href="<?php echo site_url('athletics/delete') . '/' . $athleticsmatch['id']; ?>"><span
                                                class="glyphicon glyphicon-trash" aria-hidden="true">Delete</span></a>
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
<!-- end of container-fluid -->
</body>
</html>











