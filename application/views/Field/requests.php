<div class="col-sm-8">

    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container-fluid">
        <div style="text-align: center">
            <h1>Reserve Field</h1>
        </div>

        <div style="margin-top: 5%;" class="row">
            <div class="col-xs-12 col-md-10 col-md-offset-1">

                <div class="table-responsive">

                    <table id="example" class="table table-bordered table-hover table-striped">
                        <thead>
                        <tr>

                            <th>Date</th>
                            <th>Session</th>
                            <th>Status</th>

                        </tr>
                        </thead>
                        <tr>
                            <td><?php echo date("Y-m-d", strtotime("$dt +1 day")); ?></td>
                            <td>Morning</td>
                            <td>
                                <?php
                                $flag = false;
                                for ($i = 0; $i < count($requests); $i++) {
                                    if (strcmp($requests[$i]['date'], date("Y-m-d", strtotime("$dt +1 day"))) == 0 && strcmp($requests[$i]['session'], "Morning") == 0)
                                        $flag = true;
                                }
                                ?>
                                <?php if (!$flag): ?>


                                    <!--                echo '<a href="apply/".strtotime( "$dt+1 day" ))."/Morning">Apply Now</a>';-->
                                    <!--                else echo "Already booked";-->

                                    <a href="<?php echo base_url() . 'admin/apply/' . date("Y-m-d", strtotime("$dt +1 day")) . '/Morning'; ?>">
                                        Apply Now</a>

                                <?php else: ?>
                                    <p>Already booked</p>
                                <?php endif; ?>

                            </td>
                        </tr>

                        <tr>
                            <td><?php echo date("Y-m-d", strtotime("$dt +1 day")); ?></td>

                            <td>Evening</td>
                            <td>
                                <?php
                                $flag = false;
                                for ($i = 0; $i < count($requests); $i++) {
                                    if (strcmp($requests[$i]['date'], date("Y-m-d", strtotime("$dt +1 day"))) == 0 && strcmp($requests[$i]['session'], "Evening") == 0)
                                        $flag = true;
                                }
                                ?>
                                <?php if (!$flag): ?>


                                    <!--                echo '<a href="apply/".strtotime( "$dt+1 day" ))."/Morning">Apply Now</a>';-->
                                    <!--                else echo "Already booked";-->

                                    <a href="<?php echo base_url() . 'admin/apply/' . date("Y-m-d", strtotime("$dt +1 day")) . '/Evening'; ?>">
                                        Apply Now</a>

                                <?php else: ?>
                                    <p>Already booked</p>
                                <?php endif; ?>

                            </td>
                        </tr>

                        <tr>
                            <td><?php echo date("Y-m-d", strtotime("$dt +2 day")); ?></td>
                            <td>Morning</td>
                            <td>
                                <?php
                                $flag = false;
                                for ($i = 0; $i < count($requests); $i++) {
                                    if (strcmp($requests[$i]['date'], date("Y-m-d", strtotime("$dt +2 day"))) == 0 && strcmp($requests[$i]['session'], "Morning") == 0)
                                        $flag = true;
                                }
                                ?>
                                <?php if (!$flag): ?>


                                    <!--                echo '<a href="apply/".strtotime( "$dt+1 day" ))."/Morning">Apply Now</a>';-->
                                    <!--                else echo "Already booked";-->

                                    <a href="<?php echo base_url() . 'admin/apply/' . date("Y-m-d", strtotime("$dt +2 day")) . '/Morning'; ?>">
                                        Apply Now</a>

                                <?php else: ?>
                                    <p>Already booked</p>
                                <?php endif; ?>

                            </td>
                        </tr>

                        <tr>
                            <td><?php echo date("Y-m-d", strtotime("$dt +2 day")); ?></td>
                            <td>Evening</td>
                            <td>
                                <?php
                                $flag = false;
                                for ($i = 0; $i < count($requests); $i++) {
                                    if (strcmp($requests[$i]['date'], date("Y-m-d", strtotime("$dt +2 day"))) == 0 && strcmp($requests[$i]['session'], "Evening") == 0)
                                        $flag = true;
                                }
                                ?>
                                <?php if (!$flag): ?>


                                    <!--                echo '<a href="apply/".strtotime( "$dt+1 day" ))."/Morning">Apply Now</a>';-->
                                    <!--                else echo "Already booked";-->

                                    <a href="<?php echo base_url() . 'admin/apply/' . date("Y-m-d", strtotime("$dt +2 day")) . '/Evening'; ?>">
                                        Apply Now</a>

                                <?php else: ?>
                                    <p>Already booked</p>
                                <?php endif; ?>

                            </td>
                        </tr>
                        <tr>
                            <td><?php echo date("Y-m-d", strtotime("$dt +3 day")); ?></td>
                            <td>Morning</td>
                            <td>
                                <?php
                                $flag = false;
                                for ($i = 0; $i < count($requests); $i++) {
                                    if (strcmp($requests[$i]['date'], date("Y-m-d", strtotime("$dt +3 day"))) == 0 && strcmp($requests[$i]['session'], "Morning") == 0)
                                        $flag = true;
                                }
                                ?>
                                <?php if (!$flag): ?>


                                    <!--                echo '<a href="apply/".strtotime( "$dt+1 day" ))."/Morning">Apply Now</a>';-->
                                    <!--                else echo "Already booked";-->

                                    <a href="<?php echo base_url() . 'admin/apply/' . date("Y-m-d", strtotime("$dt +3 day")) . '/Morning'; ?>">
                                        Apply Now</a>

                                <?php else: ?>
                                    <p>Already booked</p>
                                <?php endif; ?>

                            </td>
                        </tr>


                        <tr>
                            <td><?php echo date("Y-m-d", strtotime("$dt +3 day")); ?></td>
                            <td>Evening</td>
                            <td> <?php
                                $flag = false;
                                for ($i = 0; $i < count($requests); $i++) {
                                    if (strcmp($requests[$i]['date'], date("Y-m-d", strtotime("$dt +3 day"))) == 0 && strcmp($requests[$i]['session'], "Evening") == 0)
                                        $flag = true;
                                }
                                ?>
                                <?php if (!$flag): ?>


                                    <!--                echo '<a href="apply/".strtotime( "$dt+1 day" ))."/Morning">Apply Now</a>';-->
                                    <!--                else echo "Already booked";-->

                                    <a href="<?php echo base_url() . 'admin/apply/' . date("Y-m-d", strtotime("$dt +4 day")) . '/Evening'; ?>">
                                        Apply Now</a>

                                <?php else: ?>
                                    <p>Already booked</p>
                                <?php endif; ?>
                            </td>
                        </tr>


                        <tr>
                            <td><?php echo date("Y-m-d", strtotime("$dt +4 day")); ?></td>
                            <td>Morning</td>
                            <td> <?php
                                $flag = false;
                                for ($i = 0; $i < count($requests); $i++) {
                                    if (strcmp($requests[$i]['date'], date("Y-m-d", strtotime("$dt +4 day"))) == 0 && strcmp($requests[$i]['session'], "Morning") == 0)
                                        $flag = true;
                                }
                                ?>
                                <?php if (!$flag): ?>


                                    <!--                echo '<a href="apply/".strtotime( "$dt+1 day" ))."/Morning">Apply Now</a>';-->
                                    <!--                else echo "Already booked";-->

                                    <a href="<?php echo base_url() . 'admin/apply/' . date("Y-m-d", strtotime("$dt +4 day")) . '/Morning'; ?>">
                                        Apply Now</a>

                                <?php else: ?>
                                    <p>Already booked</p>
                                <?php endif; ?>
                            </td>
                        </tr>


                        <tr>
                            <td><?php echo date("Y-m-d", strtotime("$dt +4 day")); ?></td>
                            <td>Evening</td>
                            <td> <?php
                                $flag = false;
                                for ($i = 0; $i < count($requests); $i++) {
                                    if (strcmp($requests[$i]['date'], date("Y-m-d", strtotime("$dt +4 day"))) == 0 && strcmp($requests[$i]['session'], "Evening") == 0)
                                        $flag = true;
                                }
                                ?>
                                <?php if (!$flag): ?>


                                    <!--                echo '<a href="apply/".strtotime( "$dt+1 day" ))."/Morning">Apply Now</a>';-->
                                    <!--                else echo "Already booked";-->

                                    <a href="<?php echo base_url() . 'admin/apply/' . date("Y-m-d", strtotime("$dt +4 day")) . '/Evening'; ?>">
                                        Apply Now</a>

                                <?php else: ?>
                                    <p>Already booked</p>
                                <?php endif; ?>
                            </td>
                        </tr>


                        <tr>
                            <td><?php echo date("Y-m-d", strtotime("$dt +5 day")); ?></td>
                            <td>Morning</td>
                            <td> <?php
                                $flag = false;
                                for ($i = 0; $i < count($requests); $i++) {
                                    if (strcmp($requests[$i]['date'], date("Y-m-d", strtotime("$dt +5 day"))) == 0 && strcmp($requests[$i]['session'], "Morning") == 0)
                                        $flag = true;
                                }
                                ?>
                                <?php if (!$flag): ?>


                                    <!--                echo '<a href="apply/".strtotime( "$dt+1 day" ))."/Morning">Apply Now</a>';-->
                                    <!--                else echo "Already booked";-->

                                    <a href="<?php echo base_url() . 'admin/apply/' . date("Y-m-d", strtotime("$dt +5 day")) . '/Morning'; ?>">
                                        Apply Now</a>

                                <?php else: ?>
                                    <p>Already booked</p>
                                <?php endif; ?>
                            </td>
                        </tr>


                        <tr>
                            <td><?php echo date("Y-m-d", strtotime("$dt +5 day")); ?></td>
                            <td>Evening</td>
                            <td> <?php
                                $flag = false;
                                for ($i = 0; $i < count($requests); $i++) {
                                    if (strcmp($requests[$i]['date'], date("Y-m-d", strtotime("$dt +5 day"))) == 0 && strcmp($requests[$i]['session'], "Evening") == 0)
                                        $flag = true;
                                }
                                ?>
                                <?php if (!$flag): ?>


                                    <!--                echo '<a href="apply/".strtotime( "$dt+1 day" ))."/Morning">Apply Now</a>';-->
                                    <!--                else echo "Already booked";-->

                                    <a href="<?php echo base_url() . 'admin/apply/' . date("Y-m-d", strtotime("$dt +5 day")) . '/Morning'; ?>">
                                        Apply Now</a>

                                <?php else: ?>
                                    <p>Already booked</p>
                                <?php endif; ?>
                            </td>
                        </tr>


                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>