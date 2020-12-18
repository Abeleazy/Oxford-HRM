<!DOCTYPE html>
<html lang="en">
    <?php
        $con = new mysqli('localhost','root','','staffdb');

        if ($con->connect_error){
            die("connection failed:". $con->connect_error);
            echo "<script>alert('connection error')</script>";
        }
    ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iofrm</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-theme23.css">
    <script language="javascript" type="text/javascript">
            function dynamicdropdown(listindex)
            {
                document.getElementById("subcategory").length = 0;
                switch (listindex)
                {
                    case "Php" :
                        document.getElementById("subcategory").options[0]=new Option("Please select framework","");
                        document.getElementById("subcategory").options[1]=new Option("Cakephp","Cakephp");
                        document.getElementById("subcategory").options[2]=new Option("Wordpress","Wordpress");
                        document.getElementById("subcategory").options[3]=new Option("Codeigniter","Codeigniter");
                        document.getElementById("subcategory").options[4]=new Option("Joomla","Joomla");
                        document.getElementById("subcategory").options[5]=new Option("Magento","Magento");
                        break;
                    
                    case "Java" :
                        document.getElementById("subcategory").options[0]=new Option("Please select framework","");
                        document.getElementById("subcategory").options[1]=new Option("Strauts","Strauts");
                        document.getElementById("subcategory").options[2]=new Option("Hibernate","Hibernate");
                        break;
                    case "Javascript" :
                        document.getElementById("subcategory").options[0]=new Option("Please select framework","");
                        document.getElementById("subcategory").options[1]=new Option("D-Jango","D-Jango");
                        document.getElementById("subcategory").options[2]=new Option("Angular","Angular");
                        document.getElementById("subcategory").options[3]=new Option("Prototype","Prototype");
                        document.getElementById("subcategory").options[4]=new Option("jQuery","jQuery");
                        document.getElementById("subcategory").options[5]=new Option("Backbone","Backbone");
                        break;
                    case "Dotnet" :
                        document.getElementById("subcategory").options[0]=new Option("Please select framework","");
                        document.getElementById("subcategory").options[1]=new Option("VbScript","VbScript");
                        break;
                }
                return true;
            }
       </script>
</head>

<body>
    <div class="form-body on-top-mobile">
        <div class="website-logo">
            <a href="index.html">
                <div class="logo">
                    <img class="logo-size" src="img/OGlogo.png" alt="">
                </div>
            </a>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder simple-info">
                    <div><img src="img/team.svg" alt=""></div>
                    <div><h3>OXFORD ASSOCIATES DATA/INFORMATION </h3></div>
                    <div><p>Fill the form, attach your  latest CV <br>and Photographs to get listed.</p></div>
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control" name="fname" placeholder="First name">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control" name="lname" placeholder="Last name">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control" name="email" placeholder="E-mail Address">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control" name="phone" placeholder="Phone Number">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                
                                <div class="col-12 col-sm-6">
                                    <input type="text" name="group" class="form-control" placeholder="Group">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control" name="subsidiary" placeholder=" Subsidiary">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-6" id="category_div">Please specify language:
                                    <select name="category" class="form-control" id="category" onchange="javascript: dynamicdropdown(this.options[this.selectedIndex].value);">
                                        <option value="">Select Language</option>
                                        <option value="Php">Php</option>
                                        <option value="Java">Java</option>
                                        <option value="Javascript">Javascript</option>
                                        <option value="Dotnet">Dotnet</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6" id="sub_category_div">Please select framework:
                                    <script type="text/javascript" language="JavaScript">
                                        document.write('<select class="form-control" name="subcategory" id="subcategory"><option value="">Please select framework</option></select>')
                                    </script>
                                    <noscript>
                                        <select class="form-control" name="subcategory" id="subcategory" >
                                            <option value="">Please select framework</option>
                                        </select>
                                    </noscript>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control" name="address" placeholder="Residential Address">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control" name="education" placeholder="Position">
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-12">
                                    <textarea class="form-control" name="details" placeholder="Tell us about yourself.."></textarea>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <div class="custom-file">
                                        <input type="file" name="resume" class="custom-file-input" id="validatedCustomFile">
                                        <label class="custom-file-label" for="validatedCustomFile">CV (Resume)</label>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="custom-file">
                                        <input type="file" name="passport" class="custom-file-input" id="validatedCustomFile">
                                        <label class="custom-file-label" for="validatedCustomFile">Passport Photograph</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row top-padding">
                                <!-- <div class="col-12 col-sm-6">
                                    <input type="checkbox" id="chk1" required><label for="chk1">I agree on <a href="#">terms & conditions</a> of iofrm</label>
                                </div> -->
                                <div class="col-md-12 ">
                                    <div class="form-button col-md-12">
                                        <button id="submit" name="submit" type="submit" class="ibtn less-padding col-md-12">Submit Data</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>



</body>
</html>

<?php


$con = mysqli_connect('localhost','root','','staffdb');
$db = mysqli_select_db($con, 'data');

if (isset($_POST['submit'])){
    $fname = $_POST['fname'];

    $lname = $_POST['lname'];

    $email = $_POST['email'];

    $phone = $_POST['phone'];

    $group = $_POST['group'];

    $subsidiary = $_POST['subsidiary'];

    $address = $_POST['address'];

    $education = $_POST['education'];

    $details = $_POST['details'];

    $passport = rand(1000,10000)."-".$_FILES['passport']['name'];
    $resume = rand(1000,10000)."-".$_FILES['resume']['name'];

    $tname1 = $_FILES['passport']['tmp_name'];

    $tname2 = $_FILES['resume']['tmp_name'];

    $uploaded_dir ='uploadedimages';

    $uniqueID = substr(uniqid('OXFORD-'), 0,13);


    move_uploaded_file($tname, $uploaded_dir.'/'.$password);
    move_uploaded_file($tname2, $uploaded_dir.'/'.$resume);

    $sql = "INSERT INTO `data` (`fname`, `lname`, `email`, `phone`, `group`, `subsidiary`, `address`, `education`, `details`, `passport`, `resume`,`uniqueid`) VALUES ('$fname','$lname','$email','$phone','$group','$subsidiary','$address','$education','$details','$passport','$resume','$uniqueID')";

    if(mysqli_query($con,$sql)){
        echo "<script>alert('data submitted, and your unique staff ID generated. Kindly check your email for confirmation.')</script>";
    }else{
        echo "<script>alert('something is wrong')</script>";

    }
}
?>
<!-- php code to send unique ID to staff emails -->

<?php 
if(isset($_POST['submit'])){
    $uniqueID = substr(uniqid('OXFORD-'), 0,13);
    $to = "adeyinkadaniel09@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];

    $phone = $_POST['phone'];

    $group = $_POST['group'];

    $subsidiary = $_POST['subsidiary'];

    $address = $_POST['address'];

    $education = $_POST['education'];
    $subject = "Form submission";
    $subject2 = "Your submission response";
    $message = $fname . " " . $lname . " made a submission" . "\n\n"   ;
    $message2 = " Your Oxford staff ID : " . $uniqueID . "\n\n";

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    // echo "Mail Sent. Thank you " . $fname . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>
