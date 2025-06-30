<?php
$page = basename($_SERVER['PHP_SELF'], '.php');
?>
<header class="header">
    <nav class="navbar navbar-expand-xl navbar-dark stroke bg-transparent">
        <div class="container">
            <a class="navbar-brand logo" href="index" data-aos="zoom-in" data-aos-delay="0" data-aos-duration="500">
                <img src="assets/images/logo.png" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item" data-aos="fade-down" data-aos-delay="100" data-aos-duration="500">
                        <a class="nav-link <?php if ($page == 'index') {
                                                echo 'active';
                                            } ?>" href="index">Home</a>
                    </li>
                    <li class="nav-item" data-aos="fade-down" data-aos-delay="200" data-aos-duration="500">
                        <a class="nav-link <?php if ($page == 'about-us') {
                                                echo 'active';
                                            } ?>" href="about-us">About Us</a>
                    </li>
                    <li class="nav-item dropdown navdesktop" data-aos="fade-down" data-aos-delay="300" data-aos-duration="500">
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

                    <li class="nav-item" data-aos="fade-down" data-aos-delay="400" data-aos-duration="500">
                        <a class="nav-link <?php if ($page == 'faq') {
                                                echo 'active';
                                            } ?>" href="faq">
                            Faq
                        </a>
                    </li>

                    <li class="nav-item" data-aos="fade-down" data-aos-delay="500" data-aos-duration="500">
                        <a class="nav-link <?php if ($page == 'contact-us') {
                                                echo 'active';
                                            } ?>" href="contact-us">
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


<div class="modal fade" id="orderModal" tabindex="-1" aria-labelledby="orderModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 id="orderModalLabel" class="main-heading text-black mb-0">Place Your Order</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                    <i class="ri-close-line"></i>
                </button>
            </div>

            <form method="POST" action="submit_order.php" id="orderForm" novalidate>
                <div class="modal-body">
                    <div class="row g-3">
                        <!-- Full Name -->
                        <div class="col-lg-4 col-md-6">
                            <label class="form-label">Full Name</label>
                            <input type="text" name="full_name" class="form-control" placeholder="Enter your full name" required>
                            <div class="invalid-feedback">Full name is required.</div>
                        </div>

                        <!-- Email -->
                        <div class="col-lg-4 col-md-6">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Enter your email address" required>
                            <div class="invalid-feedback">Please enter a valid email address.</div>
                        </div>

                        <!-- Phone -->
                        <div class="col-lg-4 col-md-6">
                            <label class="form-label">Phone</label>
                            <input type="tel" name="phone" class="form-control" placeholder="e.g. 123-456-7890" pattern="[\d\s\-]+" required>
                            <div class="invalid-feedback">Please enter a valid phone number.</div>
                        </div>

                        <!-- Vehicle Name -->
                        <div class="col-lg-4 col-md-6">
                            <label class="form-label">Name of Vehicle</label>
                            <input type="text" name="vehicle_name" class="form-control" placeholder="Enter vehicle name or model" required>
                            <div class="invalid-feedback">Vehicle name is required.</div>
                        </div>

                        <!-- VIN Number -->
                        <div class="col-lg-4 col-md-6">
                            <label class="form-label">VIN Number</label>
                            <input type="text" name="vin_number" class="form-control" placeholder="Enter VIN number" required>
                            <div class="invalid-feedback">VIN number must be at least 5 characters.</div>
                        </div>

                        <!-- Select Plan -->
                        <div class="col-lg-4 col-md-6">
                            <label class="form-label">Select Package</label>
                            <select id="planSelect" name="package" class="form-select form-control" required>
                                <option selected disabled value="">Choose a package</option>
                                <option value="Instant Elite">Instant Elite – $50.99</option>
                                <option value="Premium">Premium – $65.99</option>
                                <option value="Basic Insight">Basic Insight – $45.99</option>
                            </select>
                            <div class="invalid-feedback">Please select a package.</div>
                        </div>
                    </div>

                    <!-- Terms -->
                    <div class="mt-4">
                        <h6 class="mb-2">Terms & Conditions</h6>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="term1" name="agree_privacy" required>
                            <label class="form-check-label" for="term1">I agree to the privacy policy.</label>
                            <div class="invalid-feedback">You must agree to the privacy policy.</div>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="term2" name="confirm_info" required>
                            <label class="form-check-label" for="term2">I confirm all information is accurate.</label>
                            <div class="invalid-feedback">You must confirm your information is accurate.</div>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="term3" name="accept_terms" required>
                            <label class="form-check-label" for="term3">I accept the terms of service.</label>
                            <div class="invalid-feedback">You must accept the terms of service.</div>
                        </div>
                    </div>

                    <!-- Submit -->



                </div>
                <div class="modal-footer justify-content-center">
                    <button type="submit" form="orderForm" class="btn-theme">Submit Order</button> <!-- Button outside form -->
                </div>
            </form>
        </div>
    </div>
</div>