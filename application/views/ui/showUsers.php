<div class="col-sm-8">
    <br/>
    <br/>
    <br/>
    <br/>
    <div class="container-fluid">
        <div style="text-align: center">
            <h1>Users List</h1>
        </div>
        <div style="margin-top: 5%;" class="row">
            <div class="col-xs-12 col-md-10 col-md-offset-1">

                <div class="table-responsive">
                    <table id="example" class="table table-bordered table-hover table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Favourite team</th>
                            <th>Favourite Player</th>

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
                                    <?php echo $swimmingpool['gender']; ?>
                                </td>
                                <td>
                                    <?php echo $swimmingpool['fteam']; ?>
                                </td>
                                <td>
                                    <?php echo $swimmingpool['fplayer']; ?>
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



