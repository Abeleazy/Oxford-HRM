<div class="row justify-content-center">
    <div class="col-md-12">
    </li><h4 style="color:#fff;"><a href="index.php?dashboard">Dashboard</a> /<a href="#"> View Products</h4></a>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body" style="overflow-x:auto;">

                    <h4 class="mt-0 header-title">Default Datatable</h4>
                    

                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>Staff ID</th>
                                <th>Names</th>
                                <th>Email</th>
                                <th>Phone no.</th>
                                <th>Group</th>
                                <th>Subsidiary</th>
                                <th>Address</th>
                                <th>Position</th>
                                <th>Image</th>
                                <th>Unique ID</th>
                                <th>Actions</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $i = 0;

                                $get_staff = "select * from data";

                                $run_staff = mysqli_query($con,$get_staff);

                                while($row_staff = mysqli_fetch_array($run_staff)){
                                    $staff_id = $row_staff['staff_id'];

                                    $fname = $row_staff['fname'];
                                    
                                    $lname = $row_staff['lname'];

                                    $email = $row_staff['email'];

                                    $phone = $row_staff['phone'];

                                    $group = $row_staff['group'];

                                    $subsidiary = $row_staff['subsidiary'];

                                    $address = $row_staff['address'];

                                    $education = $row_staff['education'];

                                    $passport = $row_staff['passport'];

                                    $uniqueid = $row_staff['uniqueid'];

                                    $i++;

                                    ?>

                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $fname.' &nbsp;'. $lname; ?></td>
                                        <td><?php echo $email; ?></td>
                                        <td><?php echo $phone; ?></td>
                                        <td><?php echo $group; ?></td>
                                        <td><?php echo $subsidiary; ?></td>
                                        <td><?php echo $address ?></td>
                                        <td><?php echo $education; ?></td>
                                        <td><?php  ?></td>
                                        <td><?php echo $uniqueid; ?></td>
                                        <td><a href="">delete</a></td>
                                    </tr>

                            <?php
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
        
        