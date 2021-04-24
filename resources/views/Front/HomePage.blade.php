@extends('layout.front_layout.main_desgin')
@section('content')

<section id="hero" class="d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1">
                <h1 class="ml15">
                    <span class="word">Bettter digital </span>
                    <span class="word">experience with WeBuild</span>
                  </h1>
                <h2>We are team of talented Developers making websites </h2>
                <a href="#about" class="btn-get-started scrollto">Get Started</a>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img">
                <img src="assets/svg/WEB-DESIGN-AND-BUILD.svg" class="img-fluid animated" alt="">
            </div>
        </div>
    </div>
</section>
<!-- End Hero -->

<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="row justify-content-between">
                <div class="col-lg-5 d-flex align-items-center justify-content-center about-img">
                    <img src="assets/img/about-img.svg" class="img-fluid" alt="" data-aos="zoom-in">
                </div>
                <div class="col-lg-6 pt-5 pt-lg-0">
                    <h3 data-aos="fade-up">About Us</h3>
                    <p data-aos="fade-up" data-aos-delay="100">
                        We are a group of programmers who work as freelancers. We offer a number of services to clients                    </p>
                    <div class="row">
                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <i class="bx bx-receipt"></i>
                            <h4>Mission</h4>
                            <p>Our mission is to delever a good qutaity serivces</p>
                        </div>
                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                            <i class="bx bx-cube-alt"></i>
                            <h4>Visoin</h4>
                            <p>here we put the vision</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Services</h2>
                <p>Check out the great services we offer</p>
            </div>

            <div class="row">
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><img src="{{ asset('assets/img/icon/SEO.png') }}" width="100px" height="100px" alt=""></div>
                        <h4 class="title"><a href="">Increase SEO</a></h4>
                        <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><img src="{{ asset('assets/img/icon/BuildFromSc.png') }}" width="100px" height="100px" alt=""></div>
                        <h4 class="title"><a href="">Build From Scratch</a></h4>
                        <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box">
                        <div class="icon"><img src="{{ asset('assets/img/icon/WordPress1.png') }}" width="100px" height="100px" alt=""></div>
                        <h4 class="title"><a href="">WordPress Websites</a></h4>
                        <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="400">
                    <div class="icon-box">
                        <div class="icon"><img src="{{ asset('assets/img/icon/maintain.png') }}" width="100px" height="100px" alt=""></div>
                        <h4 class="title"><a href="">maintenance websites</a></h4>
                        <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="400">
                    <div class="icon-box">
                        <div class="icon"><img src="{{ asset('assets/img/icon/Laravel.png') }}" width="100px" height="100px" alt=""></div>
                        <h4 class="title"><a href="">Build Laravel websites</a></h4>
                        <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="400">
                    <div class="icon-box">
                        <div class="icon"><img src="{{ asset('assets/img/icon/sql.png') }}" width="200px" height="100px" alt=""></div>
                        <h4 class="title"><a href="">Organize Database</a></h4>
                        <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="400">
                    <div class="icon-box">
                        <div class="icon"><img src="{{ asset('assets/img/icon/debugging.png') }}" width="100px" height="100px" alt=""></div>
                        <h4 class="title"><a href="">Debugging codes</a></h4>
                        <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="400">
                    <div class="icon-box">
                        <div class="icon"><img src="{{ asset('assets/img/icon/photoshop.png') }}" width="100px" height="100px" alt=""></div>
                        <h4 class="title"><a href="">Desgin your site</a></h4>
                        <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum</p>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->

    <section id="portfolio" class="portfolio">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Projects</h2>
                <p>Check out our beautifull Projects</p>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-12">
                    <ul id="portfolio-flters" style="color: #fff">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-app">Laravel</li>
                        <li data-filter=".filter-card">WordPress</li>
                        <li data-filter=".filter-web">From Scratch</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/E-commerce.png" width="100%"  height="250px" alt="e-commerce">
                        <div class="portfolio-links">
                            <a href="assets/img/portfolio/E-commerce.png" data-gall="portfolioGallery" class="venobox" title="E-commerce"><i class="icofont-plus-circle"></i></a>
                            <a href="portfolio-details.html" title="More Details"><i class="icofont-link"></i></a>
                        </div>
                        <div class="portfolio-info">
                            <h4>E-commerce</h4>
                            <p>This website created using <strong style="color: red">Laravel</strong></p></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/Admin-Laravel.png" width="100%"  height="250px" alt="Admin-Laravel">
                        <div class="portfolio-links">
                            <a href="assets/img/portfolio/Admin-Laravel.png" data-gall="portfolioGallery" class="venobox" title="Admin-Laravel"><i class="icofont-plus-circle"></i></a>
                            <a href="portfolio-details.html" title="More Details"><i class="icofont-link"></i></a>
                        </div>
                        <div class="portfolio-info">
                            <h4>Admin Panel</h4>
                            <p>This Admin Panel Careated using <strong style="color: red">Laravel</strong></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/healtopidea.png" width="100%"  height="250px" alt="healtopidea">
                        <div class="portfolio-links">
                            <a href="assets/img/portfolio/healtopidea.png" data-gall="portfolioGallery" class="venobox" title="healtopidea"><i class="icofont-plus-circle"></i></a>
                            <a href="portfolio-details.html" title="More Details"><i class="icofont-link"></i></a>
                        </div>
                        <div class="portfolio-info">
                            <h4>Admin Panel</h4>
                            <p>This Admin Panel Careated using <strong style="color: red">Pure PHP</strong></p></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/MP.jpg" width="100%"  height="250px" alt="Madreprela">
                        <div class="portfolio-links">
                            <a href="assets/img/portfolio/MP.jpg" data-gall="portfolioGallery" class="venobox" title="Madreprela"><i class="icofont-plus-circle"></i></a>
                            <a href="portfolio-details.html" title="More Details"><i class="icofont-link"></i></a>
                        </div>
                        <div class="portfolio-info">
                            <h4>Madreprela</h4>
                            <p>This Website Built using <strong style="color: red">opencart</strong></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web"style="height: 200px">
                    <div class="portfolio-wrap" style="height: 250px">
                        <img src="assets/img/portfolio/quranic.png" alt="quranic" width="100%"  height="250px">
                        <div class="portfolio-links">
                            <a href="assets/img/portfolio/quranic.png" data-gall="portfolioGallery" class="venobox" title="quranic"><i class="icofont-plus-circle"></i></a>
                            <a href="portfolio-details.html" title="More Details"><i class="icofont-link"></i></a>
                        </div>
                        <div class="portfolio-info">
                            <h4>quranic</h4>
                            <p>This website Created using <strong style="color: red">Pure PHP</strong></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/web_dev_image.png" width="100%"  height="250px" alt="Portfolio" >
                        <div class="portfolio-links">
                            <a href="assets/img/portfolio/web_dev_image.png" data-gall="portfolioGallery" class="venobox" title="Portfolio"><i class="icofont-plus-circle"></i></a>
                            <a href="portfolio-details.html" title="More Details"><i class="icofont-link"></i></a>
                        </div>
                        <div class="portfolio-info">
                            <h4>Portfolio</h4>
                            <p>This website Created using <strong style="color: red">Pure PHP</strong></p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Team</h2>
                <p>Our team is always here to help</p>
            </div>

            <div class="row">

                <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="member">
                        <img src="assets/img/team/Mohmmad.jpg" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>Mohammad ALSalamat</h4>
                                <span>Chief Executive Officer</span>
                            </div>
                            <div class="social">
                                <a href="#"><i class="icofont-github"></i></a>
                                <a href="https://www.facebook.com/alslmat.mohammad"><i class="icofont-facebook"></i></a>
                                <a href=""><i class="icofont-instagram"></i></a>
                                <a href="https://www.linkedin.com/in/mohammad-alsalamat-40712817b/"><i class="icofont-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
                    <div class="member">
                        <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>Sarah Jhonson</h4>
                                <span>Product Manager</span>
                            </div>
                            <div class="social">
                                <a href=""><i class="icofont-twitter"></i></a>
                                <a href=""><i class="icofont-facebook"></i></a>
                                <a href=""><i class="icofont-instagram"></i></a>
                                <a href=""><i class="icofont-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
                    <div class="member">
                        <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>William Anderson</h4>
                                <span>CTO</span>
                            </div>
                            <div class="social">
                                <a href=""><i class="icofont-twitter"></i></a>
                                <a href=""><i class="icofont-facebook"></i></a>
                                <a href=""><i class="icofont-instagram"></i></a>
                                <a href=""><i class="icofont-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
                    <div class="member">
                        <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4>Amanda Jepson</h4>
                                <span>Accountant</span>
                            </div>
                            <div class="social">
                                <a href=""><i class="icofont-twitter"></i></a>
                                <a href=""><i class="icofont-facebook"></i></a>
                                <a href=""><i class="icofont-instagram"></i></a>
                                <a href=""><i class="icofont-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End Team Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Clients</h2>
                <p>They trusted us</p>
            </div>

            <div class="owl-carousel clients-carousel" data-aos="fade-up" data-aos-delay="100">
                <img src="assets/img/clients/client-1.png" alt="">
                <img src="assets/img/clients/client-2.png" alt="">
                <img src="assets/img/clients/client-3.png" alt="">
                <img src="assets/img/clients/client-4.png" alt="">
                <img src="assets/img/clients/client-5.png" alt="">
                <img src="assets/img/clients/client-6.png" alt="">
                <img src="assets/img/clients/client-7.png" alt="">
                <img src="assets/img/clients/client-8.png" alt="">
            </div>

        </div>
    </section>
    <!-- End Clients Section -->

    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Contact Us</h2>
                <p>Contact us the get started</p>
            </div>

            <div class="row">

                <div class="col-lg-5 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="info">
                        <div class="address">
                            <i class="icofont-google-map"></i>
                            <h4>Location:</h4>
                            <p>A108 Adam Street, New York, NY 535022</p>
                        </div>

                        <div class="email">
                            <i class="icofont-envelope"></i>
                            <h4>Email:</h4>
                            <p>info@example.com</p>
                        </div>

                        <div class="phone">
                            <i class="icofont-phone"></i>
                            <h4>Call:</h4>
                            <p>+1 5589 55488 55s</p>
                        </div>

                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0"
                            style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                    </div>

                </div>

                <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="name">Your Name</label>
                                <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Your Email</label>
                                <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validate"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Subject</label>
                            <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validate"></div>
                        </div>
                        <div class="form-group">
                            <label for="name">Message</label>
                            <textarea class="form-control" name="message" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
                            <div class="validate"></div>
                        </div>
                        <div class="mb-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section>
    <!-- End Contact Us Section -->

</main>
@endsection

