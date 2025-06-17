<?php
$page = basename($_SERVER['PHP_SELF'], '.php');
?>
<header class="header">
    <nav class="navbar navbar-expand-xl navbar-dark stroke bg-transparent">
        <div class="container">
            <a class="navbar-brand logo" href="#">
                <img src="assets/images/logo.png" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link <?php if ($page == 'index') {
                                                echo 'active';
                                            } ?>" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($page == 'about-us') {
                                                echo 'active';
                                            } ?>" href="about-us">About Us</a>
                    </li>
                    <li class="nav-item dropdown navdesktop">
                        <a class="nav-link <?php if ($page == '#') {
                                                echo 'active';
                                            } ?>" href="#">
                            Services <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-navdesktop" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Bike Report</a></li>
                            <li><a class="dropdown-item" href="#">Car Report</a></li>
                            <li><a class="dropdown-item" href="#">HD Truck Report</a></li>
                            <li><a class="dropdown-item" href="#">RV Report</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link <?php if ($page == 'faq') {
                                                echo 'active';
                                            } ?>" href="faq">
                            Faq
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link <?php if ($page == '#') {
                                                echo 'active';
                                            } ?>" href="#">
                            Contact Us
                        </a>
                    </li>
                </ul>
            </div>
            <!-- <div class="my-2 my-lg-0 d-xl-block d-none">
                <a href="#" class="btn btn-theme">Get Started</a>
            </div> -->
        </div>
    </nav>
</header>