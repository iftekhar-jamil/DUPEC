<br/>
<br/>
<br/>
<br/>
<div class="container-fluid">
    <div class="pen-title" style="text-align: center">
        <h1 style="font-weight: bold">Field Requests</h1>
    </div>
    <div style="margin-top: 5%;" class="row">
        <div class="col-xs-12 col-md-6 col-md-offset-3">

            <div class="table-responsive">
                <table id="example" class="table table-bordered table-hover table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Organization Name</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php foreach ($requests as $request): $segment++; ?>
                        <tr>
                            <th scope="row">
                                <?php echo $segment; ?>
                            </th>
                            <td>
                                <?php echo $request['hired_by']; ?>
                            </td>
                            <td>
                                <?php echo $request['date']; ?>
                            </td>
                            <td>
                                <?php echo $request['status']; ?>
                            </td>
                            <td>
                                <a href="<?php echo site_url('admin/edit') . '/' . $request['id']; ?>"><span
                                            class="glyphicon glyphicon-edit" aria-hidden="true">Approve</span></a>
                                <a href="<?php echo site_url('admin/reject') . '/' . $request['id']; ?>"><span
                                            class="glyphicon glyphicon-trash" aria-hidden="true">Reject</span></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Organization Name</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                </table>

            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>
