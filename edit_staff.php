<?php
if(isset($_GET['edit_staff'])){
    $edit_staff_id = $_GET['edit_staff'];
    $edit_staff = "select * from data where staff_id='$edit_staff_id' ";
    $run_edit = mysqli_query($con,$edit_staff);
    $row_edit = mysqli_fetch_array($run_edit);

    $staff_id = $row_edit['staff_id'];

    $fname = $row_edit['fname'];

    $lname = $row_edit['lname'];

    $email = $row_edit['email'];

    $phone = $row_edit['phone'];

    $group = $row_edit['group'];

    $subsidiary = $row_edit['subsidiary'];

    $address = $row_edit['address'];

    $education = $row_edit['education'];

}
?>
<div class="content-wrap">
            <!-- <div class="page-title">
                <h1>Form Layout</h1>
                <p>Management of Heading and Paragraph</p>
            </div> -->
            <br>
            <div class="content-inner remove-ext5">
                <div class="row mrg20">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <div class="wdgt-box frm-wrp">
                            <div class="wdgt-titl">
                                <h4>Staff Edit</h4>
                                <p>Please fill out the form below Form elements.</p>
                            </div>
                            <form class="cont-frm" method="post">
                                <div class="row mrg20">
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <input type="text" value="<?php echo $fname; ?>" name="fname" placeholder="First Name*">
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <input type="text" value="<?php echo $lname; ?>" name="lname" placeholder="Last Name*">
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                        <input type="text" value="<?php echo $email; ?>" name="email" placeholder="Email">
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <input type="text" value="<?php echo $address; ?>" name="address" placeholder="Street Address*">
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <input type="text" value="<?php echo $education; ?>" name="education" placeholder="Position">
                                    </div>
                                    

                                    
                                    
                                    

                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                        <button type="submit" name="update" ><i class="fa fa-paper-plane"></i>Update Data</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <?php
                            if(isset($_POST['update'])){
                                $fname = $_POST['fname'];

                                $lname = $_POST['lname'];

                                $email = $_POST['email'];

                                $address = $_POST['address'];

                                $education = $_POST['education'];

                                $update_staff = "update data set fname='$fname', lname='$lname', email='$email', address='$address', education='$education' where staff_id='$staff_id' ";

                                $run_update = mysqli_query($con,$update_staff);

                                if($run_update){
                                    echo "<script>alert('Staff details has been updated successfully')</script>";

                                    echo "<script>window.open('index.php?view_staffs','_self')</script>";
                                }
                            }
                        ?>
                        
                    </div>
                </div>
            </div>
        </div><!-- Contant Wrap -->


