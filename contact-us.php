<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us</title>
    <?php include 'links.php' ?>
</head>

<body>
    <!-- header -->
    <?php include 'header.php' ?>
    <!-- End header -->

    <!-- section banner -->
    <section class="hero other-page-hero contact-hero">
        <div class="container">
            <div class="hero-content" data-aos="zoom-in" data-aos-delay="600" data-aos-duration="500">
                <h1>CONTACT<span> US</span></h1>
            </div>
        </div>
    </section>
    <!-- End section -->
    <section class="get-quote">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8 col-md-10">
                    <div class="center-heading" data-aos="fade-up" data-aos-delay="0" data-aos-duration="500">
                        <h2 class="main-heading">Get In Touch</h2>
                        <p>Fringilla placerat condimentum facilisis mauris nibh cursus feugiat libero nulla. Consectetur
                            eget tempor nulla dolor pellentesque et eu proin. Augue nulla ipsum sed aliquam. </p>
                    </div>
                </div>
            </div>
            <div class="get-quote-bg" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="500">
                <div class="row justify-content-center align-items-center">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="left-col" data-aos="fade-right" data-aos-delay="400" data-aos-duration="500">
                            <h3>Contact Information</h3>
                            <div class="info-innner">
                                <i class="ri-phone-fill"></i>
                                <span><a href="tel:(813) 565-7710">(813) 565-7710</a></span>
                            </div>
                            <div class="info-innner">
                                <i class="ri-mail-fill"></i>
                                <span><a href="mailto:info@example.com">info@example.com</a></span>
                            </div>
                            <div class="info-innner">
                                <i class="ri-map-pin-fill"></i>
                                <span>7901 4th St N # 21187 St. Petersburg, FL 33702</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="right-col" data-aos="fade-left" data-aos-delay="600" data-aos-duration="500">
                            <form method="POST" action="signup" class="needs-validation" novalidate="">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Your Name*</label>
                                            <input type="text" class="form-control" name="name" pattern="[A-Za-z ]+" placeholder="Enter your name" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Your Email*</label>
                                            <input type="email" class="form-control" name="email" pattern="[^\s@]+@[a-zA-Z]+[^0-9@]+\.[cC][oO][mM]$" placeholder="Enter email here" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Contact No*</label>
                                            <input type="number" class="form-control" name="phone" onkeypress="if(this.value.length==12) return false;" placeholder="Enter Contact No" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Message</label>
                                            <textarea class="form-control" onkeypress="if(this.value.length==250) return false;" name="message" rows="3" cols="50" placeholder="Enter Your Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-end">
                                        <button type="submit" class="btn btn-theme mt-4">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- section partner -->
    <?php //include "partners.php"
    ?>
    <!-- end -->

    <!-- Get Quote Model -->
    <?php  // include 'get-quote.php'
    ?>
    <!-- end -->



    <!-- footer -->
    <?php include 'footer.php' ?>
    <!-- end -->


</body>

</html>