<footer class="footer">
    <div class="container">
        <div class="row mt-0 pt-4 pb-4">
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12">
                <div class="footer-logo">
                    <a class="navbar-brand logo" href="#">
                        <img src="assets/images/logo.png" />
                    </a>

                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-12 col-sm-12 col-xs-12">
                <div class="footer-links m-mt-40">
                    <h6>Quick Links</h6>
                    <ul class="list-unstyled">
                        <li><a href="#"> Home</a></li>
                        <li><a href="#"> About Us</a></li>
                        <li><a href="#"> Vehicle Report</a></li>
                        <li><a href="#"> FAQ'S</a></li>
                        <li><a href="#"> Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-xs-12">
                <div class="footer-links m-mt-40">
                    <h6>Services</h6>
                    <ul class="list-unstyled">
                        <li><a href="#"> Bike Report</a></li>
                        <li><a href="#"> Car Report</a></li>
                        <li><a href="mailto:info@example.com">HD Truck Report</a></li>
                        <li><a href="#">RV Report</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-xs-12">
                <div class="footer-links m-mt-40">
                    <h6>Contact us</h6>
                    <ul class="list-unstyled">
                        <li><a href="#"> support@vehicleresult.com</a></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</footer>
<div class="footer-bootom">
    <div class="container">
        <div class="footer-bootom-main">
            <p>VehicleResult.com All Right Reserved 2024 Copyright</p>
            <div class="footer-bottom-links">
                <a href="">Privacy Policy</a>
                <a href="">Terms & conditions</a>
                <a href="">Disclaimer</a>
            </div>
        </div>
    </div>
</div>
<!-- end -->

<!-- Website JS -->
<script src="assets/js/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.10.2/umd/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<!-- Slick Carousel JS-->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<!-- Custom JS -->
<script src="assets/js/main.js"></script>
<!-- AOS JS -->
<script src="assets/js/aos.js"></script>
<script>
    AOS.init({
        duration: 1000
    });
</script>

<!-- Offcanvas Side Bar -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
    <div class="offcanvas-header">
        <a class="navbar-brand logo" href="#">
            <img src="assets/images/logo.png">
        </a>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close">
            <i class="ri-close-line"></i>
        </button>
    </div>
    <div class="offcanvas-body">
        <?php
        // Example: Set this at the top of each page before including the header
        // $page = 'bike-report'; // for example
        ?>

        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link <?php if ($page == 'index') echo 'active'; ?>" href="index">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ($page == 'about-us') echo 'active'; ?>" href="about-us">About Us</a>
            </li>

            <li class="nav-item dropdown navdesktop">
                <?php
                $servicesPages = ['bike-report', 'car-report', 'hd-truck-report', 'rv-report'];
                $isServicesActive = in_array($page, $servicesPages);
                ?>
                <a class="nav-link dropdown-toggle <?php if ($isServicesActive) echo 'active'; ?>"
                    href="#"
                    id="navbarDropdown"
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Services <i class="ri-arrow-down-s-fill"></i>
                </a>

                <ul class="dropdown-menu dropdown-navdesktop" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item <?php if ($page == 'bike-report') echo 'active'; ?>" href="bike-report">Bike Report</a></li>
                    <li><a class="dropdown-item <?php if ($page == 'car-report') echo 'active'; ?>" href="car-report">Car Report</a></li>
                    <li><a class="dropdown-item <?php if ($page == 'hd-truck-report') echo 'active'; ?>" href="hd-truck-report">HD Truck Report</a></li>
                    <li><a class="dropdown-item <?php if ($page == 'rv-report') echo 'active'; ?>" href="rv-report">RV Report</a></li>
                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link <?php if ($page == 'faq') echo 'active'; ?>" href="faq">Faq</a>
            </li>


        </ul>

        <div class="mt-5">
            <a href="contact-us" class="btn btn-theme">Contact Us</a>
        </div>
    </div>
</div>
<!-- end -->