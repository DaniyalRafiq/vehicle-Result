<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Car Report</title>
    <?php include 'links.php' ?>
</head>

<body>
    <!-- header -->
    <?php include 'header.php' ?>
    <!-- End header -->

    <!-- section banner -->
    <section class="hero other-page-hero about-us-hero">
        <div class="container">
            <div class="hero-content" data-aos="zoom-in" data-aos-delay="600" data-aos-duration="500">
                <h1>Get Bike <br> <span>Vehicle Report</span></h1>
            </div>
        </div>
    </section>
    <!-- End section -->



    <!-- Result  -->
    <section class="result ser-page">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="result-content ser-page-content" data-aos="fade-right" data-aos-delay="0" data-aos-duration="500">
                        <span>FEEL THE SATISFACTION</span>
                        <h2 class="main-heading"><span>Get VEHICLER RESULT </span> to save <br> your money before buying and selling</h2>
                        <p>Gain access to comprehensive local and international vehicle histories with just a click – don’t let hidden surprises compromise your investment in a used car.</p>
                        <strong>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas, illo.</strong>
                        <a href="contact-us" class="btn-theme mt-4">Contact Us</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="resul-mask" data-aos="fade-left" data-aos-delay="400" data-aos-duration="500">

                        <div class="result-swiper swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="img-box-content">
                                        <img src="assets/images/bike-report-1.png" alt="">

                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="img-box-content">
                                        <img src="assets/images/bike-report-2.png" alt="">

                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="img-box-content">
                                        <img src="assets/images/bike-report-1.png" alt="">

                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="img-box-content">
                                        <img src="assets/images/bike-report-2.png" alt="">

                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Result End -->

    <section class="find-out">
        <div class="container">
            <div class="find-out-heading" data-aos="fade-up" data-aos-delay="00" data-aos-duration="500">
                <h2 class="main-heading text-white text-center">How to find out how <br> much your Bike is worth</h2>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="find-out-card" data-aos="fade-right" data-aos-delay="00" data-aos-duration="500">
                        <h4>Tell us about your Bike</h4>
                        <p>By leveraging our cutting-edge data analysis, we can accurately identify your vehicle and provide a market value estimate based on the latest sales trends for your specific model.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="img-box-content" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="500">
                        <img src="assets/images/find-out-card-img-1.png" alt="">
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-8 col-md-12">
                    <div class="find-out-card" data-aos="fade-right" data-aos-delay="00" data-aos-duration="500">
                        <h4>Discover insights about your bike’s value</h4>
                        <p>Vehicleresult analyzes recent trends and patterns from similar vehicles sold in the past few months, providing you with a more accurate and up-to-date market value assessment for your bike model.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="img-box-content" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="500">
                        <img src="assets/images/find-out-card-img-2.png" alt="">
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-8 col-md-12">
                    <div class="find-out-card" data-aos="fade-right" data-aos-delay="00" data-aos-duration="500">
                        <h4>We offer more than just market value</h4>
                        <p>Our model-specific trade-in values help you determine the best possible price for your vehicle, whether you’re selling privately or to dealerships, ensuring you get the most value for your bike.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="img-box-content" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="500">
                        <img src="assets/images/find-out-card-img-3.png" alt="">
                    </div>
                </div>
            </div>

        </div>
    </section>


    <section class="plan">
        <div class="container">
            <div class="plan-heading">
                <h2 class="main-heading" data-aos="fade-up" data-aos-delay="00" data-aos-duration="500">
                    Choose the best plan that fit for you
                </h2>
            </div>
            <div class="row justify-content-center">
                <?php
                $plans = [
                    [
                        'name' => 'Silver Elite',
                        'price' => '$50.99',
                        'delivery' => '2-4 HOURS',
                        'features' => [
                            'Vehicle Overview',
                            'Market Value',
                            'Vehicle Specifications',
                            'Salvage',
                            'Exports',
                            'Impounds',
                            'Sales listing'
                        ]
                    ],
                    [
                        'name' => 'Gold Deluxe',
                        'price' => '$65.99',
                        'delivery' => '60 minutes',
                        'features' => [
                            'Vehicle Overview',
                            'Open Recalls',
                            'Market Value',
                            'Impounds',
                            'Exports',
                            'Vehicle Specifications',
                            'Salvage',
                            'Accident Record'
                        ]
                    ],
                    [
                        'name' => 'Platinum',
                        'price' => '$45.99',
                        'delivery' => '12-24 HOURS',
                        'features' => [
                            '2 Buyers Numbers from our Directory',
                            'Vehicle Specifications',
                            'Vehicle Overview',
                            'Exports',
                            'HQ Bike Images',
                            'Sales Listing',
                            'Salvage',
                            'Impounds',
                            'Installed Options and Packages',
                            'Title Brand',
                            'Active Warranties',
                            'Open Recalls'
                        ]
                    ]
                ];

                foreach ($plans as $plan):
                    $id = strtolower(str_replace(' ', '-', $plan['name']));
                ?>
                    <div class="col-lg-4 col-md-12">
                        <div class="plan-card" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="500">
                            <div class="plan-card-top"
                                data-bs-toggle="modal"
                                data-bs-target="#orderModal"
                                data-plan="<?= htmlspecialchars($plan['name']) ?>"
                                data-price="<?= htmlspecialchars($plan['price']) ?>">
                                <h4><?= $plan['name'] ?> <br> <?= $plan['price'] ?></h4>
                            </div>
                            <div class="plan-card-content">
                                <strong>Delivery Time: <?= $plan['delivery'] ?></strong>
                                <ul>
                                    <?php foreach ($plan['features'] as $feature): ?>
                                        <li>
                                            <div class="icon"><i class="ri-check-line"></i></div>
                                            <span><?= $feature ?></span>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                                <button class="btn-theme mt-3"
                                    data-bs-toggle="modal"
                                    data-bs-target="#orderModal"
                                    data-plan="<?= htmlspecialchars($plan['name']) ?>"
                                    data-price="<?= htmlspecialchars($plan['price']) ?>">
                                    Order Now
                                </button>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </section>


    <section class="find-out value">
        <div class="container">
            <div class="value-heading" data-aos="fade-up" data-aos-delay="0" data-aos-duration="500">
                <h2 class="main-heading">Why is Your Bike's Market Value Important?</h2>
                <p>Knowing a vehicle’s worth is important for both buyers and sellers alike.</p>
            </div>
            <div class="sec-01-main value-main">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="sec-01-card" data-aos="zoom-in" data-aos-delay="400" data-aos-duration="500">
                            <i class="ri-riding-line"></i>
                            <p>
                                Avoid overpaying for your next vehicle purchase. Having an accurate market value estimate equips you with the leverage you need to negotiate confidently.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="sec-01-card" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="500">
                            <i class="ri-money-dollar-circle-fill"></i>
                            <p>
                                Don't risk losing potential buyers by overpricing your vehicle. A market value estimate ensures you sell quickly at a fair and competitive price.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <div class="sec-01-card" data-aos="zoom-in" data-aos-delay="400" data-aos-duration="500">
                            <i class="ri-key-fill"></i>
                            <p>
                                Your car is one of your most valuable assets. By monitoring its value over time, you stay informed about market fluctuations and can make smarter decisions regarding its future.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!-- Testi Start -->
    <section class="testi service-section">
        <div class="container">
            <div class="test-heading" data-aos="fade-up" data-aos-delay="0" data-aos-duration="500">
                <h2 class="main-heading">WHAT OUR CLIENTS SAY</h2>
                <p>Find out what our respected customers think about their interaction with Vehicle Result. From new car owners to experienced car lovers, our customers talk about their feelings of assurance, reliability, and contentment.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="testi-card" data-aos="zoom-in" data-aos-delay="400" data-aos-duration="500">
                        <p>
                            "VehicleResult made my car buying experience so much easier! The report was detailed and accurate, helping me avoid potential pitfalls. I felt confident in my purchase." </p>
                        <div class="testi-card-name">
                            <strong>Sarah M.</strong>
                            <span>New Car Owner</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="testi-card" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="500">
                        <p>
                            "VehicleResult made my car buying experience so much easier! The report was detailed and accurate, helping me avoid potential pitfalls. I felt confident in my purchase." </p>
                        <div class="testi-card-name">
                            <strong>Sarah M.</strong>
                            <span>New Car Owner</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="testi-card" data-aos="zoom-in" data-aos-delay="400" data-aos-duration="500">
                        <p>
                            "VehicleResult made my car buying experience so much easier! The report was detailed and accurate, helping me avoid potential pitfalls. I felt confident in my purchase." </p>
                        <div class="testi-card-name">
                            <strong>Sarah M.</strong>
                            <span>New Car Owner</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="testi-card" data-aos="zoom-in" data-aos-delay="400" data-aos-duration="500">
                        <p>
                            "VehicleResult made my car buying experience so much easier! The report was detailed and accurate, helping me avoid potential pitfalls. I felt confident in my purchase." </p>
                        <div class="testi-card-name">
                            <strong>Sarah M.</strong>
                            <span>New Car Owner</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="testi-card" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="500">
                        <p>
                            "VehicleResult made my car buying experience so much easier! The report was detailed and accurate, helping me avoid potential pitfalls. I felt confident in my purchase." </p>
                        <div class="testi-card-name">
                            <strong>Sarah M.</strong>
                            <span>New Car Owner</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="testi-card" data-aos="zoom-in" data-aos-delay="400" data-aos-duration="500">
                        <p>
                            "VehicleResult made my car buying experience so much easier! The report was detailed and accurate, helping me avoid potential pitfalls. I felt confident in my purchase." </p>
                        <div class="testi-card-name">
                            <strong>Sarah M.</strong>
                            <span>New Car Owner</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testi  end-->



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