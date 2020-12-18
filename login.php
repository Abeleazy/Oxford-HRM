<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="icon" href="assets/images/favicon.png" sizes="32x32" type="image/png">
    <title>Foxio - Admin Panel HTML5 Template</title>

    <link rel="stylesheet" href="assets/css/icons.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- Color Scheme -->
    <link rel="stylesheet" href="assets/css/colors/color.css" title="theme-color1">
    <link rel="alternate stylesheet" href="assets/css/colors/color2.css" title="theme-color2">
    <link rel="alternate stylesheet" href="assets/css/colors/color3.css" title="theme-color3">
    <link rel="alternate stylesheet" href="assets/css/colors/color4.css" title="theme-color4">
    <link rel="alternate stylesheet" href="assets/css/colors/color5.css" title="theme-color5">
    <link rel="alternate stylesheet" href="assets/css/colors/color6.css" title="theme-color6">
    <link rel="alternate stylesheet" href="assets/css/colors/color7.css" title="theme-color7">
    <link rel="alternate stylesheet" href="assets/css/colors/color8.css" title="theme-color8">
    <link rel="alternate stylesheet" href="assets/css/colors/color9.css" title="theme-color9">
</head>
<body class="gray-bg">
    <main class="header-expand">
        <div class="sidepanel">
            <span class="sidebanel-btn"><i class="icon ion-ios-cog fa-spin"></i></span>
            <div class="sidepanel-inner">
                <h6>Theme</h6>
                <div class="option-list">
                    <a class="light-btn applied" href="#" title="">Light</a>
                    <a class="semi-dark-btn" href="#" title="">Semi Dark</a>
                    <a class="dark-btn" href="#" title="">Dark</a>
                </div>
            </div>
            <div class="sidepanel-inner">
                <h6>Theme Color</h6>
                <div class="option-list theme-color-options">
                    <a class="theme-color1" href="#" title="" onclick="setActiveStyleSheet('theme-color1'); return false;"></a>
                    <a class="theme-color2" href="#" title="" onclick="setActiveStyleSheet('theme-color2'); return false;"></a>
                    <a class="theme-color3" href="#" title="" onclick="setActiveStyleSheet('theme-color3'); return false;"></a>
                    <a class="theme-color4" href="#" title="" onclick="setActiveStyleSheet('theme-color4'); return false;"></a>
                    <a class="theme-color5" href="#" title="" onclick="setActiveStyleSheet('theme-color5'); return false;"></a>
                    <a class="theme-color6" href="#" title="" onclick="setActiveStyleSheet('theme-color6'); return false;"></a>
                    <a class="theme-color7" href="#" title="" onclick="setActiveStyleSheet('theme-color7'); return false;"></a>
                    <a class="theme-color8" href="#" title="" onclick="setActiveStyleSheet('theme-color8'); return false;"></a>
                    <a class="theme-color9" href="#" title="" onclick="setActiveStyleSheet('theme-color9'); return false;"></a>
                </div>
            </div>
            <div class="sidepanel-inner">
                <h6>Sidebar Layout</h6>
                <div class="option-list">
                    <a class="mini-header-btn" href="#" title="">Mini Header</a>
                    <a class="full-header-btn applied" href="#" title="">Full Header</a>
                </div>
            </div>
        </div><!-- Side Panel -->
        <div class="topbar">
            <div class="logo"><a href="dashboard.html" title="Logo"><img src="assets/images/logo.png" alt="logo.png"></a></div><!-- Logo -->
            <span class="menu-btn"><i class="fa fa-align-right"></i></span>
            <form class="topbar-search">
                <input type="text" placeholder="Type and Hit Enter">
                <button type="submit"><i class="icon ion-android-search"></i></button>
            </form><!-- Topbar Search -->
            <ul class="topbar-lists">
                <li>
                    <a class="setng-btn" href="#" title=""><i class="icon ion-android-settings"></i></a>
                    <div class="set-lst">
                        <h4>General Settings</h4>
                        <ul class="sett-lst">
                            <li>
                                <span class="chck-bx">
                                    <input id="set1" type="checkbox">
                                    <label for="set1">Report Panel Usage</label>
                                </span>
                                <i>General Settings information</i>
                            </li>
                            <li>
                                <span class="chck-bx">
                                    <input id="set2" type="checkbox">
                                    <label for="set2">Mail Redirect</label>
                                </span>
                                <i>General Settings information</i>
                            </li>
                            <li>
                                <span class="chck-bx">
                                    <input id="set3" type="checkbox">
                                    <label for="set3">Expose Author Name</label>
                                </span>
                                <i>General Settings information</i>
                            </li>
                        </ul>
                        <h4>Chat Settings</h4>
                        <ul>              
                            <li>
                                <span class="chck-bx">
                                    <input id="set4" type="checkbox">
                                    <label for="set4">Show Me As Online</label>
                                </span>
                            </li>              
                            <li>
                                <span class="chck-bx">
                                    <input id="set5" type="checkbox">
                                    <label for="set5">Turn Off Notifications</label>
                                </span>
                            </li>
                        </ul>
                        <a class="btn-danger" href="#" title=""><i class="fa fa-trash"></i>Delete Chat History</a>
                    </div>
                </li>
                <li>
                    <a class="mail-btn" href="#" title=""><i class="icon ion-android-drafts"></i><span>02</span></a>
                    <div class="nti-drp-wrp">
                        <h4 class="thm-bg"><span>You Have</span> 4 New Messages</h4>
                        <div class="nti-lst">
                            <div class="nti-usr">
                                <img class="brd-rd50" src="assets/images/resources/acti-thmb1.jpg" alt="acti-thmb1.jpg">
                                <div class="nti-usr-inr">
                                    <h5><a href="#" title="">Sadi Orlaf</a></h5><span>Just Now</span>
                                    <i>Privacy settings changed</i>
                                </div>
                            </div>
                            <div class="nti-usr">
                                <img class="brd-rd50" src="assets/images/resources/acti-thmb2.jpg" alt="acti-thmb2.jpg">
                                <div class="nti-usr-inr">
                                    <h5><a href="#" title="">Katti Smith</a></h5><span>Just Now</span>
                                    <i>Mike has added you as friend</i>
                                </div>
                            </div>
                            <div class="nti-usr">
                                <img class="brd-rd50" src="assets/images/resources/acti-thmb3.jpg" alt="acti-thmb3.jpg">
                                <div class="nti-usr-inr">
                                    <h5><a href="#" title="">Willimes Domson</a></h5><span>Just Now</span>
                                    <i>like your timeline photo</i>
                                </div>
                            </div>
                            <div class="nti-usr">
                                <img class="brd-rd50" src="assets/images/resources/acti-thmb4.jpg" alt="acti-thmb4.jpg">
                                <div class="nti-usr-inr">
                                    <h5><a href="#" title="">Holli Doe</a></h5><span>Just Now</span>
                                    <i>Curabitur id eros limes suscipit blandit.</i>
                                </div>
                            </div>
                        </div>
                        <a href="#" title="">View All</a>
                    </div>
                </li>
                <li>
                    <a class="cnt-btn" href="#" title=""><i class="icon ion-android-contacts"></i></a>
                    <div class="cnt-lst">
                        <div class="usr">
                            <img class="brd-rd50" src="assets/images/resources/acti-thmb1.jpg" alt="acti-thmb1.jpg">
                            <div class="usr-innr">
                                <h5><a href="#" title="">Smith Doe</a></h5>
                                <span>Co Worker</span>
                                <a href="#" title=""><i class="fa fa-envelope"></i></a>
                            </div>
                        </div>
                        <div class="usr">
                            <img class="brd-rd50" src="assets/images/resources/acti-thmb2.jpg" lt="acti-thmb2.jpg">
                            <div class="usr-innr">
                                <h5><a href="#" title="">Katti Smith</a></h5>
                                <span>Graphic Designer</span>
                                <a href="#" title=""><i class="fa fa-envelope"></i></a>
                            </div>
                        </div>
                        <div class="usr">
                            <img class="brd-rd50" src="assets/images/resources/acti-thmb3.jpg" alt="acti-thmb3.jpg">
                            <div class="usr-innr">
                                <h5><a href="#" title="">Willimes Domson</a></h5>
                                <span>Family Adviser</span>
                                <a href="#" title=""><i class="fa fa-envelope"></i></a>
                            </div>
                        </div>
                        <div class="usr">
                            <img class="brd-rd50" src="assets/images/resources/acti-thmb4.jpg" alt="acti-thmb4.jpg">
                            <div class="usr-innr">
                                <h5><a href="#" title="">Holli Doe</a></h5>
                                <span>Company CEO</span>
                                <a href="#" title=""><i class="fa fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <a class="noti-btn" href="#" title=""><i class="icon ion-ios-bell"></i><span>02</span></a>
                    <div class="nti-drp-wrp">
                        <h4 class="thm-bg"><span>You Have</span> 4 Notifications</h4>
                        <div class="nti-lst">
                            <div class="nti-usr">
                                <span class="brd-rd50 thm-bg"><i class="fa fa-cog"></i></span>
                                <div class="nti-usr-inr">
                                    <h5><a href="#" title="">Sadi Orlaf</a></h5><span>Just Now</span>
                                    <i>Privacy settings changed</i>
                                </div>
                            </div>
                            <div class="nti-usr">
                                <span class="brd-rd50 bg-info"><i class="icon ion-ios-person"></i></span>
                                <div class="nti-usr-inr">
                                    <h5><a href="#" title="">Katti Smith</a></h5><span>Just Now</span>
                                    <i>Mike has added you as friend</i>
                                </div>
                            </div>
                            <div class="nti-usr">
                                <span class="brd-rd50 bg-warning"><i class="icon ion-thumbsup"></i></span>
                                <div class="nti-usr-inr">
                                    <h5><a href="#" title="">Willimes Domson</a></h5><span>Just Now</span>
                                    <i>like your timeline photo</i>
                                </div>
                            </div>
                            <div class="nti-usr">
                                <span class="brd-rd50 bg-danger"><i class="icon ion-information-circled"></i></span>
                                <div class="nti-usr-inr">
                                    <h5><a href="#" title="">Holli Doe</a></h5><span>Just Now</span>
                                    <i>Curabitur id eros limes suscipit blandit.</i>
                                </div>
                            </div>
                        </div>
                        <a href="#" title="">View All</a>
                    </div>
                </li>
            </ul><!-- Topbar Lists -->
        </div><!-- Topbar -->
        <header class="dark-bg">
            <div class="usr-inf" style="background-image: url(assets/images/usr-inf-bg.jpg);">
                <div class="usr-inf-inner">
                    <span class="usr-img"><img src="assets/images/resources/user-img.jpg" alt="user-img.jpg"><i class="usr-sts onln"></i></span>
                    <div class="usr-nm-desg">
                        <h4>John doe</h4>
                        <span>Designer</span>
                    </div>
                </div>
                <p>I'M Working in Web Development Company.</p>
                <div class="usr-inf-btns">
                    <a class="usr-msg" href="#" title="">Message</a>
                    <a class="usr-log" href="#" title="">Log Out</a>
                </div>
            </div><!-- User Info -->
            <nav>
                <ul>
                    <li class="menu-item-has-children"><a href="#" title=""><i class="icon ion-android-home"></i><span>Dashboard</span></a>
                        <ul class="children">
                            <li><a href="dashboard.html" title="">Dashboard Style 1</a></li>
                            <li><a href="dashboard2.html" title="">Dashboard Style 2</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="#" title=""><i class="icon ion-ios-briefcase"></i><span>UI Elements</span></a>
                        <ul class="children">
                            <li><a href="pricing.html" title="">Pricing Plan</a></li>
                            <li><a href="grids.html" title="">Grids</a></li>
                            <li><a href="calendar.html" title="">Calendar</a></li>
                            <li><a href="pagination.html" title="">Pagination</a></li>
                            <li><a href="buttons.html" title="">Button Styles</a></li>
                            <li><a href="tabs&accordians.html" title="">Tabs &amp; Accordians</a></li>
                            <li><a href="progress-bars.html" title="">Progress Bars</a></li>
                            <li><a href="loaders.html" title="">CSS Loaders</a></li>
                            <li><a href="dropdowns.html" title="">Dropdown Styles</a></li>
                            <li><a href="tooltips.html" title="">Tooltips</a></li>
                            <li><a href="popovers.html" title="">Popovers</a></li>
                            <li><a href="alerts.html" title="">Alerts</a></li>
                            <li><a href="list-group.html" title="">List Group</a></li>
                            <li><a href="models.html" title="">Models</a></li>
                            <li><a href="cards.html" title="">Cards</a></li>
                            <li><a href="file-upload.html" title="">Files Upload</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="#" title=""><i class="icon ion-fireball"></i><span>Icons</span></a>
                        <ul class="children">
                            <li><a href="font-awesome-icons.html" title="">Font Awesome Icons</a></li>
                            <li><a href="themify-icons.html" title="">Themify Icons</a></li>
                            <li><a href="ionicons.html" title="">Ionicons</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="#" title=""><i class="icon ion-ios-cog"></i><span>Form Stuff</span></a>
                        <ul class="children">
                            <li><a href="form-layout.html" title="">Form Layouts</a></li>
                            <li><a href="form-wizard.html" title="">Form Wizard</a></li>
                        </ul>
                    </li>
                    <li><a href="tables.html" title=""><i class="icon ion-ios-crop"></i><span>Table Styles</span></a></li>
                    <li class="menu-item-has-children"><a href="#" title=""><i class="icon ion-podium"></i><span>Charts</span></a>
                        <ul class="children">
                            <li><a href="chartjs.html" title="">ChartJS</a></li>
                            <li><a href="amcharts.html" title="">Am Charts</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="#" title=""><i class="icon ion-android-clipboard"></i><span>General</span></a>
                        <ul class="children">
                            <li><a href="404.html" title="">404</a></li>
                            <li><a href="505.html" title="">505</a></li>
                            <li><a href="contact.html" title="">Contact Us</a></li>
                            <li><a href="coming-soon.html" title="">Coming Soon</a></li>
                            <li><a href="maintenance.html" title="">User Maintenance</a></li>
                            <li><a href="register.html" title="">Register</a></li>
                            <li><a href="search-result.html" title="">Search Result</a></li>
                            <li><a href="faq.html" title="">Faq's</a></li>
                            <li><a href="services.html" title="">Services</a></li>
                            <li><a href="invoice.html" title="">Invoice Page</a></li>
                            <li><a href="typography.html" title="">Typography</a></li>
                            <li><a href="live-chat.html" title="">Live Chat</a></li>
                            <li><a href="timeline.html" title="">Timeline</a></li>
                            <li><a href="cropbox.html" title="">Cropbox</a></li>
                            <li><a href="calculator.html" title="">Calculator</a></li>
                            <li><a href="text-editor.html" title="">Text Editor</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="#" title=""><i class="icon ion-android-contact"></i><span>User</span></a>
                        <ul class="children">
                            <li><a href="profile.html" title="">Profile Page</a></li>
                            <li><a href="profile-edit.html" title="">Profile Edit</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="#" title=""><i class="icon ion-bag"></i><span>eCommerce</span></a>
                        <ul class="children">
                            <li><a href="product.html" title="">Products</a></li>
                            <li><a href="product-detail.html" title="">Product Details</a></li>
                            <li><a href="checkout.html" title="">Checkout</a></li>
                            <li><a href="order-received.html" title="">Order Received</a></li>
                        </ul>
                    </li>
                    <li><a href="maps.html" title=""><i class="icon ion-android-map"></i><span>Map Styles</a></li>
                    <li class="menu-item-has-children"><a href="#" title=""><i class="icon ion-email"></i><span>Email's</span></a>
                        <ul class="children">
                            <li><a href="email-compose.html" title="">Email Compose</a></li>
                            <li><a href="inbox.html" title="">Inbox</a></li>
                            <li><a href="email.html" title="">Email</a></li>
                        </ul>
                    </li>
                </ul>
            </nav><!-- Nav -->
        </header><!-- Header -->
        <div class="content-wrap">
            <div class="page-title">
                <h1>Form Layout</h1>
                <p>Management of Heading and Paragraph</p>
            </div>
            <div class="content-inner remove-ext5">
                <div class="row mrg20">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <div class="wdgt-box frm-wrp">
                            <div class="wdgt-titl">
                                <h4>Simple Form</h4>
                                <p>Please fill out the form below Form elements.</p>
                            </div>
                            <form class="cont-frm">
                                <div class="row mrg20">
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <input type="text" placeholder="First Name*">
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <input type="text" placeholder="Last Name*">
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                        <input type="text" placeholder="Company Name*">
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <input type="text" placeholder="Street Address*">
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <input type="text" placeholder="Street Address 2*">
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <input type="text" placeholder="Town/City*">
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <div class="slct-box2">
                                            <select>
                                                <option>State*</option>
                                                <option>State 1*</option>
                                                <option>State 2*</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <input type="text" placeholder="Zip/Postal Code*">
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <input type="email" placeholder="Email Address*">
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                        <div class="gender-box">
                                            <strong>Gender</strong>
                                            <span class="rdio-bx">
                                                <input type="radio" name="gender" id="male1">
                                                <label for="male1">Male</label>
                                            </span>
                                            <span class="rdio-bx">
                                                <input type="radio" name="gender" id="female1">
                                                <label for="female1">Female</label>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                        <div class="file-upload-box">
                                            <strong>File Input:</strong>
                                            <div class="file-box">
                                                <label class="fileContainer">
                                                    <span>Browse</span>
                                                    No File Selected.
                                                    <input type="file">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                        <button type="submit"><i class="fa fa-paper-plane"></i>Registration Completed</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="wdgt-box frm-wrp frm-wd-rd40">
                            <div class="wdgt-titl">
                                <h4>Trendy Form</h4>
                                <p>Please fill out the form below Form elements.</p>
                            </div>
                            <form class="cont-frm">
                                <div class="row mrg20">
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <input type="text" placeholder="First Name*">
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <input type="text" placeholder="Last Name*">
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                        <input type="text" placeholder="Company Name*">
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <input type="text" placeholder="Street Address*">
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <input type="text" placeholder="Street Address 2*">
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <input type="text" placeholder="Town/City*">
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <div class="slct-box2">
                                            <select>
                                                <option>State*</option>
                                                <option>State 1*</option>
                                                <option>State 2*</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <input type="text" placeholder="Zip/Postal Code*">
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                        <input type="email" placeholder="Email Address*">
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                        <div class="gender-box">
                                            <strong>Gender</strong>
                                            <span class="rdio-bx">
                                                <input type="radio" name="gender" id="male1">
                                                <label for="male1">Male</label>
                                            </span>
                                            <span class="rdio-bx">
                                                <input type="radio" name="gender" id="female1">
                                                <label for="female1">Female</label>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                        <div class="file-upload-box">
                                            <strong>File Input:</strong>
                                            <div class="file-box">
                                                <label class="fileContainer">
                                                    <span>Browse</span>
                                                    No File Selected.
                                                    <input type="file">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                        <button type="submit"><i class="fa fa-paper-plane"></i>Registration Completed</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- Contant Wrap -->
        <footer>
            <p>Copyright <a href="#" title="">Foxio</a> &copy; 2019</p>
            <ul class="btm-lnks">
                <li><a href="#" title="">Dashboard</a></li>
                <li><a href="#" title="">Widgets</a></li>
                <li><a href="#" title="">About us</a></li>
                <li><a href="#" title="">Contact us</a></li>
            </ul>
        </footer><!-- Footer -->
    </main><!-- Main Wrapper -->

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins.min.js"></script>
    <script src="assets/js/custom-scripts.js"></script>
</body>	
</html>