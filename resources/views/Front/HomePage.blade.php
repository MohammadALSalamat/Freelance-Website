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
                <img src="assets/img/general/img-slider-01.png" class="img-fluid animated" alt="">
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
                    <img src="assets/img/general/img-isometric-02.png" class="img-fluid" alt="" data-aos="zoom-in">
                </div>
                <div class="col-lg-6 pt-5 pt-lg-0">
                    <h3 data-aos="fade-up">About Us</h3>
                    <p data-aos="fade-up" data-aos-delay="100">
                        We create websites which delight visually and functionally and you will not believe the number
                        of amazing options available inside. With all mind, creation and passion. We are busy as a bee,
                        we let our mind free to expand imagination to make masterpieces.
                        With the new era of high technology, we know what you need you boost your business and to get
                        high traffic, so, we – specialists in high techno field are a great team that fully helps you,
                        your business to achieve big success and set a foot in market as well an image in customer mind.
                    </p>
                    <div class="row">
                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <i class="bx bx-receipt"></i>
                            <h4>With WeBuild,</h4>
                            <p> you can do anything you want. WeBuild does not limit your creative mind but motivate you
                                to improve it all the time</p>
                        </div>
                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                            <i class="bx bx-cube-alt"></i>
                            <h4>With WeBuild,</h4>
                            <p> you will get super easy website to work with highly flexible along with a lot of responsive
                                features.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section id="services" class="services section-bg">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Services</h2>
                <p>Check out the great services we offer</p>
            </div>

            <div class="row">
                <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><img src="{{ asset('assets/img/icon/SEO.png') }}" width="100px" height="100px"
                                alt=""></div>
                        <h4 class="title"><a href="">Increase SEO</a></h4>
                        <p class="description">Your site will be easily found across all search engines. Free change and
                            transform every aspect of design using preview for monitoring your changes.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><img src="{{ asset('assets/img/icon/BuildFromSc.png') }}" width="100px"
                                height="100px" alt=""></div>
                        <h4 class="title"><a href="">Build From Scratch</a></h4>
                        <p class="description">Looking for a website refresh and don’t know where to start? Some of the
                            trendiest elements in web design right now are fun aesthetically and pretty easy to use. you
                            are in the right place hit us up to get whatever you want</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box">
                        <div class="icon"><img src="{{ asset('assets/img/icon/WordPress1.png') }}" width="100px"
                                height="100px" alt=""></div>
                        <h4 class="title"><a href="">WordPress Websites</a></h4>
                        <p class="description">Building a beautiful website for your business begins with choosing a
                            theme — a design that controls page layout, widget areas, and default style.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="400">
                    <div class="icon-box">
                        <div class="icon"><img src="{{ asset('assets/img/icon/maintain.png') }}" width="100px"
                                height="100px" alt=""></div>
                        <h4 class="title"><a href="">maintenance websites</a></h4>
                        <p class="description">Adding a trendy feature to your current design, or new build, can help
                            create a modern vibe that can help drive visitors to your site. And what’s particularly nice
                            about this tri of trends is that you can use them with existing elements, color and
                            typography palettes and branding.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="400">
                    <div class="icon-box">
                        <div class="icon"><img src="{{ asset('assets/img/icon/Laravel.png') }}" width="100px"
                                height="100px" alt=""></div>
                        <h4 class="title"><a href="">Build Laravel websites</a></h4>
                        <p class="description">Looking for a website refresh and don’t know where to start? Some of the
                            trendiest elements in web design right now are fun aesthetically and pretty easy to use. you
                            are in the right place hit us up to get whatever you want</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="400">
                    <div class="icon-box">
                        <div class="icon"><img src="{{ asset('assets/img/icon/sql.png') }}" width="200px" height="100px"
                                alt="sql image"></div>
                        <h4 class="title"><a href="">Organize Database</a></h4>
                        <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                            praesentium voluptatum</p>
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
                        <img src="assets/img/portfolio/E-commerce.png" width="100%" height="250px" alt="e-commerce">
                        <div class="portfolio-links">
                            <a href="assets/img/portfolio/E-commerce.png" data-gall="portfolioGallery" class="venobox"
                                title="E-commerce"><i class="icofont-plus-circle"></i></a>
                            <a href="portfolio-details.html" title="More Details"><i class="icofont-link"></i></a>
                        </div>
                        <div class="portfolio-info">
                            <h4>E-commerce</h4>
                            <p>This website created using <strong style="color: red">Laravel</strong></p>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="{{ asset('assets/img/portfolio/Admin-Laravel.png') }}" width="100%" height="250px"
                            alt="Admin-Laravel">
                        <div class="portfolio-links">
                            <a href="{{ asset('assets/img/portfolio/admin-laravel.png') }}" data-gall="portfolioGallery"
                                class="venobox" title="Admin-Laravel"><i class="icofont-plus-circle"></i></a>
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
                        <img src="assets/img/portfolio/healtopidea.png" width="100%" height="250px" alt="healtopidea">
                        <div class="portfolio-links">
                            <a href="assets/img/portfolio/healtopidea.png" data-gall="portfolioGallery" class="venobox"
                                title="healtopidea"><i class="icofont-plus-circle"></i></a>
                            <a href="portfolio-details.html" title="More Details"><i class="icofont-link"></i></a>
                        </div>
                        <div class="portfolio-info">
                            <h4>Admin Panel</h4>
                            <p>This Admin Panel Careated using <strong style="color: red">Pure PHP</strong></p>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                    <div class="portfolio-wrap">
                        <img src="assets/img/portfolio/MP.jpg" width="100%" height="250px" alt="Madreprela">
                        <div class="portfolio-links">
                            <a href="assets/img/portfolio/MP.jpg" data-gall="portfolioGallery" class="venobox"
                                title="Madreprela"><i class="icofont-plus-circle"></i></a>
                            <a href="portfolio-details.html" title="More Details"><i class="icofont-link"></i></a>
                        </div>
                        <div class="portfolio-info">
                            <h4>Madreprela</h4>
                            <p>This Website Built using <strong style="color: red">opencart</strong></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web" style="height: 200px">
                    <div class="portfolio-wrap" style="height: 250px">
                        <img src="assets/img/portfolio/quranic.png" alt="quranic" width="100%" height="250px">
                        <div class="portfolio-links">
                            <a href="assets/img/portfolio/quranic.png" data-gall="portfolioGallery" class="venobox"
                                title="quranic"><i class="icofont-plus-circle"></i></a>
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
                        <img src="assets/img/portfolio/web_dev_image.png" width="100%" height="250px" alt="Portfolio">
                        <div class="portfolio-links">
                            <a href="assets/img/portfolio/web_dev_image.png" data-gall="portfolioGallery"
                                class="venobox" title="Portfolio"><i class="icofont-plus-circle"></i></a>
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
                                <a href="https://www.linkedin.com/in/mohammad-alsalamat-40712817b/"><i
                                        class="icofont-linkedin"></i></a>
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

                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                            frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
                    </div>

                </div>

                <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="name">Your Name</label>
                                <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4"
                                    data-msg="Please enter at least 4 chars" />
                                <div class="validate"></div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name">Your Email</label>
                                <input type="email" class="form-control" name="email" id="email" data-rule="email"
                                    data-msg="Please enter a valid email" />
                                <div class="validate"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Subject</label>
                            <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4"
                                data-msg="Please enter at least 8 chars of subject" />
                            <div class="validate"></div>
                        </div>
                        <div class="form-group">
                            <label for="name">Message</label>
                            <textarea class="form-control" name="message" rows="10" data-rule="required"
                                data-msg="Please write something for us"></textarea>
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

