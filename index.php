<?php include("includes/db.php"); ?>
<!DOCTYPE html>
<html lang="en">
<?php include("includes/header.php") ?>
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
        <?php include("includes/topbar.php") ?>
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
            <?php include("includes/sidebar.php") ?>
        </header><!-- Header -->
        <?php
            if(isset($_GET['dashboard'])) {
                include("dashboard.php");
            }
            if(isset($_GET['view_staffs'])) {
                include("view_staffs.php");
            }
        ?>
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
    <script src="assets/js/chart-core.js"></script>
    <script src="assets/js/charts.js"></script>
    <script src="assets/js/animated.js"></script>
    <script src="assets/js/chart4.js"></script>
    <script src="assets/js/plugins.min.js"></script>
    <script src="assets/js/jquery.vmap.min.js"></script>
    <script src="assets/js/custom-scripts.js"></script>
</body>	
</html>