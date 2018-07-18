<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Jordy Guntur | Software Engineer</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <?php include("header.php") ?>

    </head>
    <body id="page-top" data-spy="scroll" data-target=".navbar">

        <!-- ========== Preloader ========== -->

        <div class="preloader">
          <img src="assets/images/loader.svg" alt="Loading...">
        </div>

        <!-- ========== Navigation ========== -->

        <?php include("navigation.php") ?>

        <!-- ========== Hero Cover ========== -->

        <div id="home" class="freelancer-hero" style="background: url('assets/images/test-bg.jpeg');  ">
          <div class="bg-overlay">

            <!-- Hero Content -->
            <div class="hero-content-wrapper">
              <div class="hero-content">

                <h4 class="h-alt hero-subheading wow fadeIn" data-wow-duration="2s" data-wow-delay=".7s">Software Engineer</h4>
                <h1 class="hero-lead wow fadeInUp" data-wow-duration="1.5s">Jordy Guntur</h1>
                <a href="contact.php" class="btn btn-light btn-small wow fadeIn" data-wow-duration="2s" data-wow-delay="1s">Schedule Project</a>
                <div class="" style="margin: 5px;">
                  <a href="Guntur_Resume.pdf" class="btn btn-light btn-small wow fadeIn" data-wow-duration="2s" data-wow-delay="1s">View Resume</a>
                </div>


              </div>
            </div>

            <!-- Scroller -->
            <a href="#services" class="scroller">
              <span class="scroller-text">scroll down</span>
              <span class="linea-basic-magic-mouse"></span>
            </a>

          </div><!-- / .bg-overlay -->
        </div><!-- / .main-hero-2 -->


        <!-- ========== Services ========== -->

        <div class="gray-bg">
          <section id="services" class="container ft-cards">
            <div class="row section">

              <header class="sec-heading">
                <h2>What i do</h2>
                <span class="subheading">Build beautiful and functional products</span>
              </header>

              <!-- Item 1 -->
              <div class="col-lg-4 col-md-6 mb-sm-50">
                <div class="ft-item wow fadeInUp" data-wow-duration="1s" style="min-height: 440px;">
                  <span class="linea-basic-pencil-ruler"></span>
                  <h4>Mobile & Web Design</h4>
                  <p>Design storyboards, build mockups, and sketch wireframes. Concept and incorporate a brand's visual identity into features. </p>
                </div>
              </div>

              <!-- Item 2 -->
              <div class="col-lg-4 col-md-6 mb-sm-50">
                <div class="ft-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s" style="min-height: 440px;">
                  <span class="linea-basic-gear"></span>
                  <h4>Full Stack Development</h4>
                  <p>Convert designs into responsive, search engine and mobile-friendly applications. Build features such as e-commerce, custom CMS, and subscriptions.</p>
                </div>
              </div>

              <!-- Item 3 -->
              <div class="col-lg-4 col-md-6 mb-sm-50">
                <div class="ft-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s" style="min-height: 440px;">
                  <span class="et-linegraph"></span>
                  <h4>SEO</h4>
                  <p>Optimize metadata and images, research keywords, improve page/domain authority and SEO rankings. Track site traffic and provide monthly SEO progress reports. </p>
                </div>
              </div>

            </div><!-- / .row -->
          </section>
        </div><!-- / .gray-bg -->

        <!-- ========== Portfolio ========== -->

        <section id="portfolio" class="container-fluid portfolio-layout portfolio-columns-fw">
          <div class="row">
            <header class="sec-heading">
              <h2>Featured Projects</h2>
              <span class="subheading">See some of the work I've done</span>
            </header>

          <!-- Filters -->
          <div class="row">
            <ul id="pfolio-filters" class="portfolio-filters">
              <li class="active"><a href="#" data-filter="*">All</a></li>
              <li><a href="#" data-filter=".web">Development</a></li>
              <li><a href="#" data-filter=".design">Design</a></li>
            </ul>
          </div>

          <div class="row">
            <div id="pfolio">

              <div class="col-md-4 portfolio-item hover-bottom web">
                <figure>
                  <img src="assets/images/portfolio-ss.png" alt="SportStrata">
                  <figcaption>
                    <h4 class="hover-heading">SportStrata</h4>
                    <ul class="hover-btns">
                      <li><a class="open-gallery" href="assets/images/portfolio-ss.png"><i class="fa fa-arrows-alt"></i></a></li>
                      <li><a href="portfolio-ss.php"><i class="fa fa-share"></i></a></li>
                    </ul>
                  </figcaption>
                </figure>
              </div><!-- / .portfolio-item -->

              <div class="col-md-4 portfolio-item hover-bottom web">
                <figure>
                  <img src="assets/images/portfolio-gc.png" alt="Guntur Cabinetry">
                  <figcaption>
                    <h4 class="hover-heading">Guntur Cabinetry</h4>
                    <ul class="hover-btns">
                      <li><a class="open-gallery" href="assets/images/portfolio-gc.png"><i class="fa fa-arrows-alt"></i></a></li>
                      <li><a href="portfolio-gc.php"><i class="fa fa-share"></i></a></li>
                    </ul>
                  </figcaption>
                </figure>
              </div><!-- / .portfolio-item -->

              <div class="col-md-4 portfolio-item hover-bottom design">
                <figure>
                  <img src="assets/images/portfolio-spi.png" alt="Songbox App Design">
                  <figcaption>
                    <h4 class="hover-heading">SongBox Design</h4>
                    <ul class="hover-btns">
                      <li><a class="open-gallery" href="assets/images/portfolio-spi.png"><i class="fa fa-arrows-alt"></i></a></li>
                      <li><a href="portfolio-sb.php"><i class="fa fa-share"></i></a></li>
                    </ul>
                  </figcaption>
                </figure>
              </div><!-- / .portfolio-item -->

              <div class="col-md-4 portfolio-item hover-bottom web">
                <figure>
                  <img src="assets/images/portfolio-gc-2.png" alt="Guntur Cabinetry">
                  <figcaption>
                    <h4 class="hover-heading">Guntur Cabinetry V2</h4>
                    <ul class="hover-btns">
                      <li><a class="open-gallery" href="assets/images/gc2/gc2-1.png"><i class="fa fa-arrows-alt"></i></a></li>
                      <li><a href="portfolio-gc-2.php"><i class="fa fa-share"></i></a></li>
                    </ul>
                  </figcaption>
                </figure>
              </div><!-- / .portfolio-item -->
              
              <div class="col-md-4 portfolio-item hover-bottom web">
                <figure>
                  <img src="assets/images/portfolio-sf.png" alt="Sutton Funding">
                  <figcaption>
                    <h4 class="hover-heading">Sutton Funding</h4>
                    <ul class="hover-btns">
                      <li><a class="open-gallery" href="assets/images/portfolio-sf.png"><i class="fa fa-arrows-alt"></i></a></li>
                      <!-- todo: Add page for this ################################################################################################################### -->
                      <li><a href=""><i class="fa fa-share"></i></a></li>
                    </ul>
                  </figcaption>
                </figure>
              </div><!-- / .portfolio-item -->

              <div class="col-md-4 portfolio-item hover-bottom web">
                <figure>
                  <img src="assets/images/portfolio-repro.png" alt="Reproductive Psychiatry">
                  <figcaption>
                    <h4 class="hover-heading">USP Psychiatry</h4>
                    <ul class="hover-btns">
                      <li><a class="open-gallery" href="assets/images/portfolio-repro.png"><i class="fa fa-arrows-alt"></i></a></li>
                      <!-- todo: Add page for this ################################################################################################################### -->
                      <li><a href=""><i class="fa fa-share"></i></a></li>
                    </ul>
                  </figcaption>
                </figure>
              </div><!-- / .portfolio-item -->

              <div class="col-md-4 portfolio-item hover-bottom web">
                <figure>
                  <img src="assets/images/portfolio-sa.png" alt="University of Rochester - Student's Association">
                  <figcaption>
                    <h4 class="hover-heading">Student's Association</h4>
                    <ul class="hover-btns">
                      <li><a class="open-gallery" href="assets/images/portfolio-sa.png"><i class="fa fa-arrows-alt"></i></a></li>
                      <li><a href="portfolio-sa.php"><i class="fa fa-share"></i></a></li>
                    </ul>
                  </figcaption>
                </figure>
              </div><!-- / .portfolio-item -->

              <div class="col-md-4 portfolio-item hover-bottom web">
                <figure>
                  <img src="assets/images/portfolio-indec.png" alt="Indecision App React Redux">
                  <figcaption>
                    <h4 class="hover-heading">Indecision App (React & Redux)</h4>
                    <ul class="hover-btns">
                      <li><a class="open-gallery" href="assets/images/portfolio-indec.png"><i class="fa fa-arrows-alt"></i></a></li>
                      <li><a href=""><i class="fa fa-share"></i></a></li>
                    </ul>
                  </figcaption>
                </figure>
              </div><!-- / .portfolio-item -->

              <div class="col-md-4 portfolio-item hover-bottom web">
                <figure>
                  <img src="assets/images/portfolio-lucy.png" alt="Lucy Website">
                  <figcaption>
                    <h4 class="hover-heading">Lucy Personal Site</h4>
                    <ul class="hover-btns">
                      <li><a class="open-gallery" href="assets/images/portfolio-lucy.png"><i class="fa fa-arrows-alt"></i></a></li>
                      <li><a href=""><i class="fa fa-share"></i></a></li>
                    </ul>
                  </figcaption>
                </figure>
              </div><!-- / .portfolio-item -->

              <div class="col-md-4 portfolio-item hover-bottom web">
                <figure>
                  <img src="assets/images/portfolio-hc.png" alt="Startup Anonymous">
                  <figcaption>
                    <h4 class="hover-heading">Anonymous Startup</h4>
                    <ul class="hover-btns">
                      <li><a class="open-gallery" href="assets/images/portfolio-hc.png"><i class="fa fa-arrows-alt"></i></a></li>
                      <li><a href=""><i class="fa fa-share"></i></a></li>
                    </ul>
                  </figcaption>
                </figure>
              </div><!-- / .portfolio-item -->

              <div class="col-md-4 portfolio-item hover-bottom web">
                <figure>
                  <img src="assets/images/portfolio-hm.png" alt="HiveMind">
                  <figcaption>
                    <h4 class="hover-heading">HiveMind (Django / Python)</h4>
                    <ul class="hover-btns">
                      <li><a class="open-gallery" href="assets/images/portfolio-hm.png"><i class="fa fa-arrows-alt"></i></a></li>
                    </ul>
                  </figcaption>
                </figure>
              </div><!-- / .portfolio-item -->

              <div class="col-md-4 portfolio-item hover-bottom web">
                <figure>
                  <img src="assets/images/portfolio-mi.png" alt="Motivational Interviewing">
                  <figcaption>
                    <h4 class="hover-heading">MI (In Progress)</h4>
                    <ul class="hover-btns">
                      <li><a class="open-gallery" href="assets/images/portfolio-mi.png"><i class="fa fa-arrows-alt"></i></a></li>
                    </ul>
                  </figcaption>
                </figure>
              </div><!-- / .portfolio-item -->

            </div><!-- / #pfolio -->
          </div><!-- / .row -->

        </div><!-- / .row -->

        </section><!-- / .portfolio-columns-fw -->


        <!-- ========== Cricle Counters - Parallax ========== -->

        <div id="skillsCircles" class="circles-counters" style="background: url('assets/images/shattered.gif');">
          <div class="container">
            <div id="counters" class="row count-wrapper">

              <!-- Item 1 -->
              <div class="col-sm-6 col-lg-4 circle-item wow zoomIn" data-wow-duration=".6s" data-wow-delay=".3s">
                <div class="chart" data-percent="75"><span class="circle-icon linea-basic-gear"></span></div>
                <span class="circle-text">Development</span>
              </div>

              <!-- Item 2 -->
              <div class="col-sm-6 col-lg-4 circle-item wow zoomIn" data-wow-duration=".6s">
                <div class="chart" data-percent="66"><span class="circle-icon linea-basic-display"></span></div>
                <span class="circle-text">Design</span>
              </div>

              <!-- Item 3 -->
              <div class="col-sm-6 col-lg-4 circle-item wow zoomIn" data-wow-duration=".6s" data-wow-delay=".3s">
                <div class="chart" data-percent="60"><span class="circle-icon et-linegraph"></span></div>
                <span class="circle-text">SEO</span>
              </div>

            </div><!-- / .row -->
          </div><!-- / .container -->
        </div><!-- / .circles-counters -->

        <!-- ========== Feature - Steps Numbers ========== -->

        <section class="container ft-steps-numbers">
            <div class="row section">

              <header class="sec-heading ws-s">
                <h2>Work process</h2>
                <span class="subheading">Design, Develop and Deploy</span>
              </header>

              <!-- Step 1 -->
              <div class="col-lg-4 col-md-6 mb-sm-100 ft-item wow fadeIn" data-wow-duration="1s">
                <span class="ft-nbr">01</span>
                <h4>Design</h4>
                <p>From concept to sketch, bring an idea and visual identity to life.</p>
              </div>

              <!-- Step 2 -->
              <div class="col-lg-4 col-md-6 mb-sm-100 ft-item wow fadeIn" data-wow-duration="1s" data-wow-delay=".3s">
                <span class="ft-nbr">02</span>
                <h4>Develop</h4>
                <p>Write clean, scalable, documented and optimized code.</p>
              </div>

              <!-- Step 3 -->
              <div class="col-lg-4 col-md-6 ft-item wow fadeIn" data-wow-duration="1s" data-wow-delay=".6s">
                <span class="ft-nbr">03</span>
                <h4>Deploy</h4>
                <p>Test and receive feedback before deploying live.</p>
              </div>

            </div><!-- / .row -->

            <!-- CTA Button -->
            <div class="row ws-m">
              <div class="text-center">
                <a href="contact.php" class="btn">Get a free quote</a>
              </div>
            </div><!-- / .row -->

        </section><!-- / .container -->

        <!-- ========== About - Freelancer Layout ========== -->

        <div class="gray-bg">
          <section id="about" class="container freelancer-about">
            <div class="row section">

              <!-- Freelancer -->
              <div class="col-lg-offset-2 col-lg-4 col-md-6 mb-sm-50 img-wrapper">
                <div class="t-item">

                  <!-- Image -->
                  <div class="t-image">
                    <img src="assets/images/bio-pic2.png" alt="Jordy Guntur" class="img-responsive">
                  </div>

                  <!-- Info -->
                  <div class="t-info">
                    <h4 class="t-name">Jordy Guntur</h4>
                    <span class="t-role">Software Engineer</span>
                    <ul class="social-links">
                      <li><a href="https://www.linkedin.com/in/jordyguntur/"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                  </div>

                </div><!-- / .t-item -->
              </div><!-- / .col-md-4 -->

              <div class="col-lg-4 freelancer-about-content">
                <h2 class="t1-heading">About me</h2>
                <p>Caffeine dependent software engineer based in New York. Rising senior at the University of Rochester studying computer science.</p>
                <p>I like building things that help other people meet their goals. Whether it's an web app, mobile app, program or service - I'm game.</p>
                <p>Outside of work, I enjoy cooking, snowboarding, longboarding, working out and occasionally dabbling in caliligraphy.</p>
                <p>Let me know if you want to go out for coffee :)</p>
                <br />
              </div>

            </div><!-- / .row -->
          </section><!-- / .container -->
        </div><!-- / .gray-bg -->

        <!-- ========== Blog Preview ========== -->

        <div id="blog" class="gray-bg">
          <section id="blog" class="section container blog-columns blog-preview">
            <div class="row">

              <header class="sec-heading">
                <h2>Latest from the blog</h2>
                <span class="subheading">Check out the blog to see what I've been up to [Coming Soon]</span>
              </header>

            </div><!-- / .row -->
          </section><!-- / .container -->
        </div><!-- / .gray-bg -->

        <!-- ========== CTA - Newsletter Signup ========== -->

        <div class="cta-link">
          <div class="bg-overlay">

            <div class="cta-wrapper">
              <h3 class="h-alt wow fadeIn" data-wow-delay=".1s" data-wow-duration="1s">See what I can do for you</h3>
              <a href="contact.php" class="btn btn-light btn-large wow fadeIn" data-wow-delay=".3s" data-wow-duration="1s">Get in touch</a>
            </div>

          </div>
        </div><!-- / .dark-bg .cta-link -->

        <!-- ========== Footer ========== -->
        <?php include("footer.php") ?>


        <!-- ========== Scripts ========== -->

        <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
        <script src="assets/js/vendor/google-fonts.js"></script>
        <script src="assets/js/vendor/jquery.easing.js"></script>
        <script src="assets/js/vendor/jquery.waypoints.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>
        <script src="assets/js/vendor/bootstrap-hover-dropdown.min.js"></script>
        <script src="assets/js/vendor/smoothscroll.js"></script>
        <script src="assets/js/vendor/jquery.localScroll.min.js"></script>
        <script src="assets/js/vendor/jquery.scrollTo.min.js"></script>
        <script src="assets/js/vendor/jquery.stellar.min.js"></script>
        <script src="assets/js/vendor/jquery.parallax.js"></script>
        <script src="assets/js/vendor/slick.min.js"></script>
        <script src="assets/js/vendor/jquery.easypiechart.min.js"></script>
        <script src="assets/js/vendor/countup.min.js"></script>
        <script src="assets/js/vendor/isotope.min.js"></script>
        <script src="assets/js/vendor/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/vendor/wow.min.js"></script>
        <script src="assets/js/vendor/jquery.ajaxchimp.js"></script>

        <!-- Definity JS -->
        <script src="assets/js/main.js"></script>
    </body>
</html>
