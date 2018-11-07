<div class="col-sm-10">
    <br/>
    <br/>
    <br/>
    <br/>
    <div class="container-fluid">

        <div  class="row">
            <div class="col-xs-12 col-md-10 ">
                <div  style="text-align: center">
                    <h1 style="font-weight: bold">Fixtures</h1>
                </div>
                <div style="margin-top: 5%">
                <p><a class="btn btn-lg btn-info" href="<?php echo site_url('fixture/create'); ?>">New Fixture</a>
                </p>
                </div>
                <div class="table-responsive">
                    <table id="example" class="table table-bordered table-hover table-striped">
                        <thead style="font-weight: bold">
                        <tr>
                            <th>#</th>
                            <th>Sport name</th>
                            <th>Team name</th>
                            <th>Team name</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Action</th>
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
                                   <a class = "btn btn-primary" href="<?php echo site_url('fixture/edit') . '/' . $fixtures['id']; ?> "><span
                                                class="glyphicon glyphicon-edit" aria-hidden="true">Edit</span></a>
                                   <a class = "btn btn-danger" href="<?php echo site_url('fixture/delete') . '/' . $fixtures['id']; ?> "><span
                                                class="glyphicon glyphicon-trash" aria-hidden="true">Delete</span></a>

                                    <a class="btn btn-success" href="<?php echo site_url('live/operate') . '/' . $fixtures['id']; ?>"><span
                                                class="glyphicon glyphicon-trash" aria-hidden="true">Operate</span></a>
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
