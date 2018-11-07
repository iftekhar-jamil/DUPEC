    <br/>
    <br/>
    <br/>
    <br/>
<div class="container-fluid">
    <div class="pen-title" style="text-align: center">
        <h1 style="font-weight: bold">Swimmingpool Requests</h1>
    </div>
    <div style="margin-top: 5%;" class="row">
        <div class="col-xs-12 col-md-9 col-md-offset-2">

            <div class="table-responsive">
                <a class="btn btn-primary" href="<?php echo  base_url().'admin/showAllSwim'; ?>">Show All</a><br><br>
                <a class="btn btn-danger" href="<?php echo  base_url().'admin/swimming'; ?>">Show Less</a><br><br>
                <table id="example" class="table table-bordered table-hover table-striped">
                    <thead style="font-weight: bold">
                    <tr>
                        <th>#</th>
                        <th>Client name</th>
                        <th>Email</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>Remaining session</th>
                        <th>Expiry date</th>
                        <th>Gender</th>

                        <th>Code</th>
                        <th>Action</th>

                    </tr>
                    </thead>

                    <tbody>
                    <?php foreach ($requests as $request): $segment++;?>
                        <tr>
                            <th scope="row">
                                <?php echo $segment; ?>
                            </th>
                            <td>
                                <?php echo $request['name']; ?>
                            </td>
                            <td>
                                <?php echo $request['email']; ?>
                            </td>
                            <td>
                                <?php echo $request['type']; ?>
                            </td>

                            <td class="<?php if(strcmp($request['status'],'pending')==0) echo 'btn btn-warning'; else echo 'btn btn-success'?> " >
                                <?php echo $request['status']; ?>
                            </td>

                            <td>
                                <?php echo $request['remaining_session']; ?>
                            </td>

                            <td>
                                <?php echo $request['expired_date']; ?>
                            </td>

                            <td>
                                <?php echo $request['gender']; ?>
                            </td>




                            <td>
                                <?php echo $request['code']; ?>
                            </td>

                            <td>

                                <a class="btn btn-primary" href="<?php echo site_url('admin/editSwim') . '/' . $request['id']; ?>"><span class="glyphicon glyphicon-edit" aria-hidden="true">Approve</span></a>
                                <a class="btn btn-danger" href="<?php echo site_url('admin/rejectSwim') . '/' . $request['id']; ?>"><span class="glyphicon glyphicon-trash" aria-hidden="true">Reject</span></a>

                            </td>

                        </tr>
                    <?php endforeach; ?>

                    </tbody>
                    <tfoot>

                    </tfoot>
                </table>
<!--                --><?php //echo $this->pagination->create_links();?>
            </div>
        </div>
    </div>
</div>
<!-- end of container-fluid -->
</div>
<!--    <script>-->
<!--        if(document.getElementByClassName("status").firstChild)-->
<!--    </script>-->
</body>

</html>
