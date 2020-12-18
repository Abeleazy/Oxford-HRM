<?php
if(isset($_GET['delete_staff'])){
    $delete_staff_id = $_GET['delete_staff'];

    $delete_staff = "delete from data where staff_id='$delete_staff_id'";
    $run_delete = mysqli_query($con,$delete_staff);

    if($run_delete){
        echo "<script>alert('Are you sure to delete this staff details ? ')</script>";

        echo "<script>window.open('index.php?view_staffs','_self')</script>";
    }
    
}
?>