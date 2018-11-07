<div class="col-sm-8">
    <br/>
    <br/>
    <br/>
    <br/>

    <div class="container-fluid">

            <div style="text-align: center">
            <h1 style="font-weight: bold">Users List</h1>
            </div>
        <div style="margin-top: 5%;" class="row">
            <div class="col-xs-12 col-md-10 col-md-offset-1">
                <a class = "btn btn-primary" href = "<?php echo site_url('register/addUserByAdmin'); ?>">Add New User</a><br><br>
                <div class="table-responsive">
                    <table id="example" class="table table-bordered table-hover table-striped">
                        <thead style="font-weight: bold">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Username</th>
                            <th>Gender</th>
                            <th>Date of Birth</th>
                            <th>Action</th>

                        </tr>
                        </thead>

                        <tbody>
                        <?php foreach ($arr as $swimmingpool): $segment++; ?>
                            <tr>
                                <th scope="row">
                                    <?php echo $segment; ?>
                                </th>
                                <td>
                                    <?php echo $swimmingpool['name']; ?>
                                </td>
                                <td>
                                    <?php echo $swimmingpool['username']; ?>
                                </td>
                                <td>
                                    <?php echo $swimmingpool['gender']; ?>
                                </td>
                                <td>
                                    <?php echo $swimmingpool['dob']; ?>
                                </td>

                                <td>
                                    <a class = "btn btn-primary" href="<?php echo site_url('user/edit') . '/' . $swimmingpool['user_id']; ?> "><span
                                            class="glyphicon glyphicon-edit" aria-hidden="true">Edit</span></a>
                                    <a class = "btn btn-danger" href="<?php echo site_url('user/delete') . '/' . $swimmingpool['user_id']; ?> "><span
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



