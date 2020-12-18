<?php
if(!isset($_SESSION['admin_email'])){
	echo "
	<script>window.open('login.php','_self')</script>
	";
	
}else{
?>
<div class="content-wrap">
            <div class="home-title">
                <h1>Welcome to <strong>OXFORD HRM ADMIN PANEL.</strong></h1>
            </div>
            <div class="content-inner remove-ext5">
                <div class="row mrg20">
                    <div class="col-md-4 col-sm-6 col-lg-4">
                        <div class="wdgt-box fct-box grn-box">
                            <div class="wdgt-opt">
                                <a class="refrsh-btn" href="#" title=""><i class="icon ion-ios-reload"></i></a>
                                <a class="expnd-btn" href="#" title=""><i class="icon ion-arrow-expand"></i></a>
                            </div>
                            <div class="wdgt-ldr">
                                <div class="ball-pulse">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                            </div>
                            <i class="icon ion-bag"></i>
                            <div class="fct-inr">
                                <h6>$<span class="counter">1,206,90</span></h6>
                                <span>Total Revenue</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-lg-4">
                        <div class="wdgt-box fct-box blu-box">
                            <div class="wdgt-opt">
                                <a class="refrsh-btn" href="#" title=""><i class="icon ion-ios-reload"></i></a>
                                <a class="expnd-btn" href="#" title=""><i class="icon ion-arrow-expand"></i></a>
                            </div>
                            <div class="wdgt-ldr">
                                <div class="ball-pulse">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                            </div>
                            <i class="icon ion-speedometer"></i>
                            <div class="fct-inr">
                                <h6><span class="counter">79</span>GB</h6>
                                <span>Bandwidth usage</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-lg-4">
                        <div class="wdgt-box fct-box ylw-box">
                            <div class="wdgt-opt">
                                <a class="refrsh-btn" href="#" title=""><i class="icon ion-ios-reload"></i></a>
                                <a class="expnd-btn" href="#" title=""><i class="icon ion-arrow-expand"></i></a>
                            </div>
                            <div class="wdgt-ldr">
                                <div class="ball-pulse">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                            </div>
                            <i class="icon ion-ios-cloud-download"></i>
                            <div class="fct-inr">
                                <h6><span class="counter">5347</span></h6>
                                <span>Download count</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-12 col-lg-8">
                        <div class="wdgt-box vctr-mp">
                            <div class="wdgt-titl">
                                <h4>Interactive Visited</h4>
                                <p>Your last activity is posted 4 hours ago</p>
                            </div>
                            <div class="wdgt-opt">
                                <a class="refrsh-btn" href="#" title=""><i class="icon ion-ios-reload"></i></a>
                                <a class="expnd-btn" href="#" title=""><i class="icon ion-arrow-expand"></i></a>
                            </div>
                            <div class="wdgt-ldr">
                                <div class="ball-pulse">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                            </div>
                            <div id="vc-map"></div>
                            <div class="vstrs-lst">
                                <div class="vstr-itm">
                                    <h6><span class="counter">9390</span></h6>
                                    <span>Visits</span>
                                </div>
                                <div class="vstr-itm">
                                    <h6><span class="counter">140</span></h6>
                                    <span>Google</span>
                                </div>
                                <div class="vstr-itm">
                                    <h6><span class="counter">30</span>%</h6>
                                    <span>Referrals</span>
                                </div>
                                <div class="vstr-itm">
                                    <h6><span class="counter">70</span>%</h6>
                                    <span>Active</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-lg-4">
                        <div class="wdgt-box td-lst-wrp">
                            <div class="wdgt-opt">
                                <a class="refrsh-btn" href="#" title=""><i class="icon ion-ios-reload"></i></a>
                                <a class="expnd-btn" href="#" title=""><i class="icon ion-arrow-expand"></i></a>
                            </div>
                            <div class="wdgt-ldr">
                                <div class="ball-pulse">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                            </div>
                            <div class="wdgt-titl">
                                <h4>To Do list</h4>
                                <p>Please Mention Your task</p>
                            </div>
                            <div class="td-wrp">
                                <div class="add-tsk">
                                    <form>
                                        <input type="text" placeholder="Add Your Task Here..." />
                                        <button type="submit"><i class="icon ion-forward"></i></button>
                                    </form>
                                </div>
                                <ul class="td-lst">
                                    <li class="blu-td">
                                        <h6>Book Fligt For Holiday</h6>
                                        <span>27 July 2017</span>
                                        <a href="#" title=""><i class="icon ion-android-delete"></i></a>
                                    </li>
                                    <li class="grn-td">
                                        <h6>Book Fligt For Holiday</h6>
                                        <span>27 July 2017</span>
                                        <a href="#" title=""><i class="icon ion-android-delete"></i></a>
                                    </li>
                                    <li class="red-td">
                                        <h6>Book Fligt For Holiday</h6>
                                        <span>27 July 2017</span>
                                        <a href="#" title=""><i class="icon ion-android-delete"></i></a>
                                    </li>
                                    <li class="ylw-td">
                                        <h6>Book Fligt For Holiday</h6>
                                        <span>27 July 2017</span>
                                        <a href="#" title=""><i class="icon ion-android-delete"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="ad-tsk">
                                <a class="ad-tsk-btn" href="#" title="">Add Task</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <div class="wdgt-box wrkng-ordr styl2">
                            <div class="wdgt-opt">
                                <a class="refrsh-btn" href="#" title=""><i class="icon ion-ios-reload"></i></a>
                                <a class="expnd-btn" href="#" title=""><i class="icon ion-arrow-expand"></i></a>
                            </div>
                            <div class="wdgt-ldr">
                                <div class="ball-pulse">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                            </div>
                            <h4>Staff Table</h4>
                            <div class="slct-box">
                                <i class="icon ion-android-funnel"> Sort By:</i>
                                <select>
                                    <option>Date</option>
                                    <option>Date</option>
                                    <option>Date</option>
                                    <option>Date</option>
                                    <option>Date</option>
                                </select>
                            </div>
                            <div class="ordr-tbl-wrp">
                                <table>
                                    <thead><tr><th>Names</th><th>email</th><th>phone</th><th>Subsidiary</th><th>Position</th></tr></thead>
                                    <tbody>
                                    <?php
                                        $i = 0;

                                        $get_data = "select * from data LIMIT 0,5";

                                        $run_data = mysqli_query($con,$get_data);
                                        
                                        while($row_data = mysqli_fetch_array($run_data)){

                                        $fname = $row_data['fname'];

                                        $lname = $row_data['lname'];

                                        $email = $row_data['email'];

                                        $phone = $row_data['phone'];

                                        $subsidiary = $row_data['subsidiary'];

                                        $education = $row_data['education'];

                                        $i++;


                                    ?>
                                    
                                        <tr>
                                            <td><?php echo $fname.'&nbsp;'.$lname; ?></td>
                                            <td><h4><a href="#" title=""><?php echo $email; ?></a></h4></td>
                                            <td><?php echo $phone; ?></td>
                                            <td><?php echo $subsidiary; ?></td>
                                            <td><?php echo $education; ?></td>
                                        </tr>
                                        
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-lg-4">
                        <div class="wdgt-box msg-wrp">
                            <div class="wdgt-opt">
                                <a class="refrsh-btn" href="#" title=""><i class="icon ion-ios-reload"></i></a>
                                <a class="expnd-btn" href="#" title=""><i class="icon ion-arrow-expand"></i></a>
                            </div>
                            <div class="wdgt-ldr">
                                <div class="ball-pulse">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                            </div>
                            <h4>Message</h4>
                            <div class="msgs-lst-wrp">
                                <ul class="msgs-lst">
                                    <li class="msg-box">
                                        <span>S<i class="usr-sts awy"></i></span>
                                        <div class="msg-inf">
                                            <h6>Sunil Joshi</h6><i>- 12:00pm</i>
                                            <p>That's awesome!</p>
                                        </div>
                                    </li>
                                    <li class="msg-box">
                                        <span>B<i class="usr-sts onln"></i></span>
                                        <div class="msg-inf">
                                            <h6>Bvesh Patel</h6><i>- 12:00pm</i>
                                            <p>That's awesome!</p>
                                        </div>
                                    </li>
                                    <li class="msg-box">
                                        <span>N<i class="usr-sts dnt-dstrb"></i></span>
                                        <div class="msg-inf">
                                            <h6>Nirav Joshi</h6><i>- 12:00pm</i>
                                            <p>That's awesome!</p>
                                        </div>
                                    </li>
                                    <li class="msg-box">
                                        <span>J<i class="usr-sts onln"></i></span>
                                        <div class="msg-inf">
                                            <h6>Johnathan</h6><i>- 12:00pm</i>
                                            <p>That's awesome!</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="vw-al">
                                <a href="#" title="">View All Message</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-lg-4">
                        <div class="wdgt-box usr-prf">
                            <div class="wdgt-opt">
                                <a class="refrsh-btn" href="#" title=""><i class="icon ion-ios-reload"></i></a>
                                <a class="expnd-btn" href="#" title=""><i class="icon ion-arrow-expand"></i></a>
                            </div>
                            <div class="wdgt-ldr">
                                <div class="ball-pulse">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                            </div>
                            <div class="usr-prf-inr">
                                <div class="usr-bg-img" style="background-image: url(assets/images/usr-inf-bg2.jpg)"></div>
                                <div class="usr-img2">
                                    <span><img src="assets/images/resources/user-img2.jpg" alt="user-img2.jpg"><i class="usr-sts onln"></i></span>
                                    <a href="#" title=""><i class="fa fa-envelope-o"></i>Message</a>
                                </div>
                                <div class="usr-prf-inf">
                                    <h4>John Smith</h4>
                                    <span>GraphicXspace</span>
                                    <ul class="usr-inf-lst">
                                        <li><i class="fa fa-phone"></i><span>1234556091</span></li>
                                        <li><i class="fa fa-map-marker"></i><span>63 West Berkshire Drive Ridgewood, NJ 07450</span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-lg-4">
                        <div class="wdgt-box sal-reprt">
                            <div class="wdgt-opt">
                                <a class="refrsh-btn" href="#" title=""><i class="icon ion-ios-reload"></i></a>
                                <a class="expnd-btn" href="#" title=""><i class="icon ion-arrow-expand"></i></a>
                            </div>
                            <div class="wdgt-ldr">
                                <div class="ball-pulse">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                            </div>
                            <h4>Sale Report</h4>
                            <div class="sal-lst-wrp">
                                <ul class="sal-lst">
                                    <li>
                                        <span><img src="assets/images/resources/flg1.jpg" alt="flg1.jpg">Belgium</span>
                                        <div class="progress-wrp"><div class="progress"><div class="progress-bar wdth40"></div></div><span>40%</span></div>
                                    </li>
                                    <li>
                                        <span><img src="assets/images/resources/flg2.jpg" alt="flg2.jpg">United State</span>
                                        <div class="progress-wrp"><div class="progress"><div class="progress-bar wdth25"></div></div><span>25%</span></div>
                                    </li>
                                    <li>
                                        <span><img src="assets/images/resources/flg3.jpg" alt="flg3.jpg">Italy</span>
                                        <div class="progress-wrp"><div class="progress"><div class="progress-bar wdth15"></div></div><span>15%</span></div>
                                    </li>
                                    <li>
                                        <span><img src="assets/images/resources/flg4.jpg" alt="flg4.jpg">Danmark</span>
                                        <div class="progress-wrp"><div class="progress"><div class="progress-bar wdth80"></div></div><span>80%</span></div>
                                    </li>
                                    <li>
                                        <span><img src="assets/images/resources/flg5.jpg" alt="flg5.jpg">China</span>
                                        <div class="progress-wrp"><div class="progress"><div class="progress-bar wdth65"></div></div><span>65%</span></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-lg-6">
                        <div class="wdgt-box cmnts-box">
                            <div class="wdgt-opt">
                                <a class="refrsh-btn" href="#" title=""><i class="icon ion-ios-reload"></i></a>
                                <a class="expnd-btn" href="#" title=""><i class="icon ion-arrow-expand"></i></a>
                            </div>
                            <div class="wdgt-ldr">
                                <div class="ball-pulse">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                            </div>
                            <h4>Recent Comments</h4>
                            <div class="cmnts-wrp">
                                <ul class="cmnts-lst">
                                    <li>
                                        <div class="cmnt-box">
                                            <div class="cmnt-thmb">
                                                <img src="assets/images/resources/cmnt1.jpg" alt="cmnt1.jpg">
                                                <span class="cmnt-btns">
                                                    <a class="cmnt-lik" href="#" title=""><i class="icon ion-heart"></i></a>
                                                    <a class="cmnt-rply" href="#" title=""><i class="icon ion-forward"></i></a>
                                                </span>
                                            </div>
                                            <div class="cmnt-desc">
                                                <h6><a href="#" title="">Daniel Kristeen</a></h6><span>1 min ago</span>
                                                <p>Aenean massa. Cum sociis natoque penatibus et mag nis dis parturient montes, nascetur ridiculus mus.</p>
                                            </div>
                                        </div>
                                        <ul class="chldrn">
                                            <li>
                                                <div class="cmnt-box">
                                                    <div class="cmnt-thmb">
                                                        <img src="assets/images/resources/cmnt2.jpg" alt="cmnt2.jpg">
                                                        <span class="cmnt-btns">
                                                            <a class="cmnt-lik" href="#" title=""><i class="icon ion-heart"></i></a>
                                                            <a class="cmnt-rply" href="#" title=""><i class="icon ion-forward"></i></a>
                                                        </span>
                                                    </div>
                                                    <div class="cmnt-desc">
                                                        <h6><a href="#" title="">Daniel Kristeen</a></h6><span>1 min ago</span>
                                                        <p>Aenean massa. Cum sociis natoque penatibus et mag nis dis parturient montes, nascetur ridiculus mus.</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <div class="cmnt-box">
                                            <div class="cmnt-thmb">
                                                <img src="assets/images/resources/cmnt3.jpg" alt="cmnt3.jpg">
                                                <span class="cmnt-btns">
                                                    <a class="cmnt-lik" href="#" title=""><i class="icon ion-heart"></i></a>
                                                    <a class="cmnt-rply" href="#" title=""><i class="icon ion-forward"></i></a>
                                                </span>
                                            </div>
                                            <div class="cmnt-desc">
                                                <h6><a href="#" title="">Daniel Kristeen</a></h6><span>1 min ago</span>
                                                <p>Aenean massa. Cum sociis natoque penatibus et mag nis dis parturient montes, nascetur ridiculus mus.</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="cmnts-frm">
                                <form>
                                    <input type="text" placeholder="Write Your Comment Here">
                                    <div class="cmnt-frm-btns">
                                        <span class="fileContainer"><i class="fa fa-paperclip"></i><input type="file"></span>
                                        <span class="fileContainer"><i class="fa fa-file-image-o"></i><input type="file"></span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-lg-6">
                        <div class="wdgt-box cmnts-box2 fb-cmnts">
                            <div class="wdgt-opt">
                                <a class="refrsh-btn" href="#" title=""><i class="icon ion-ios-reload"></i></a>
                                <a class="expnd-btn" href="#" title=""><i class="icon ion-arrow-expand"></i></a>
                            </div>
                            <div class="wdgt-ldr">
                                <div class="ball-pulse">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                            </div>
                            <i class="fa fa-facebook"></i>
                            <div class="cmnts-car owl-carousel">
                                <div class="cmnt-itm">
                                    <div class="cmnts-inf">
                                        <i class="fa fa-facebook"></i>
                                        <h4>John Smith</h4>
                                        <span>Graphicxspace</span>
                                    </div>
                                    <p>Ut harum ipsam molestias maxime non nisi re iendis eligendi! Doloremque quia pariatur har ea amet quibusdam quisquam, quae, tempori dolores porro doloribus.</p>
                                </div>
                                <div class="cmnt-itm">
                                    <div class="cmnts-inf">
                                        <i class="fa fa-facebook"></i>
                                        <h4>Smith John</h4>
                                        <span>Graphicxspace</span>
                                    </div>
                                    <p>Ut harum ipsam molestias maxime non nisi re iendis eligendi! Doloremque quia pariatur har ea amet quibusdam quisquam, quae, tempori dolores porro doloribus.</p>
                                </div>
                            </div>
                        </div>
                        <div class="wdgt-box cmnts-box2 twtr-cmnts">
                            <div class="wdgt-opt">
                                <a class="refrsh-btn" href="#" title=""><i class="icon ion-ios-reload"></i></a>
                                <a class="expnd-btn" href="#" title=""><i class="icon ion-arrow-expand"></i></a>
                            </div>
                            <div class="wdgt-ldr">
                                <div class="ball-pulse">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                            </div>
                            <i class="fa fa-twitter"></i>
                            <div class="cmnts-car owl-carousel">
                                <div class="cmnt-itm">
                                    <div class="cmnts-inf">
                                        <i class="fa fa-twitter"></i>
                                        <h4>John Smith</h4>
                                        <span>Graphicxspace</span>
                                    </div>
                                    <p>Ut harum ipsam molestias maxime non nisi re iendis eligendi! Doloremque quia pariatur har ea amet quibusdam quisquam, quae, tempori dolores porro doloribus.</p>
                                </div>
                                <div class="cmnt-itm">
                                    <div class="cmnts-inf">
                                        <i class="fa fa-twitter"></i>
                                        <h4>Smith John</h4>
                                        <span>Graphicxspace</span>
                                    </div>
                                    <p>Ut harum ipsam molestias maxime non nisi re iendis eligendi! Doloremque quia pariatur har ea amet quibusdam quisquam, quae, tempori dolores porro doloribus.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-lg-4">
                        <div class="wdgt-box upld-box text-center" style="background-image: url(assets/images/upld-bg.jpg);">
                            <div class="wdgt-titl">
                                <h4>Uploading Speed</h4>
                                <p>Your current Uploading Speed</p>
                            </div>
                            <div id="upld" class="upld-prg"></div>
                            <div class="upld-cnt">
                                <i class="icon ion-ios-cloud-download-outline"></i>
                                <h6>Uploading</h6>
                                <i class="upld-fl">my_photos.png</i>
                                <span><i class="icon ion-arrow-up-a"></i>Speed:<i>450 kbps</i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-12 col-lg-8">
                        <div class="wdgt-box rvnu-chrt">
                            <div class="wdgt-opt">
                                <a class="refrsh-btn" href="#" title=""><i class="icon ion-ios-reload"></i></a>
                                <a class="expnd-btn" href="#" title=""><i class="icon ion-arrow-expand"></i></a>
                            </div>
                            <div class="wdgt-ldr">
                                <div class="ball-pulse">
                                    <div></div>
                                    <div></div>
                                    <div></div>
                                </div>
                            </div>
                            <h4>Total Revenue</h4>
                            <div id="chrt4" class="chrt"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- Contant Wrap -->

        <?php } ?>