<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Contact | Jordy Guntur</title>
  <meta name="description" content="Contact Jordy Guntur">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php include("header.php") ?>

</head>
<body id="page-top">


  <!-- ========== Preloader ========== -->

  <div class="preloader">
    <img src="../assets/images/loader.svg" alt="Loading...">
  </div>

  <!-- ========== Page Title ========== -->

  <header class="page-title pt-large pt-light pt-parallax pt-plax-lg-light" data-stellar-background-ratio="0.4">
    <div class="container">
      <div class="row">

        <div class="col-sm-6">
          <h1>Contact</h1>
          <span class="subheading">Love to hear from you</span>
        </div>
        <ol class="col-sm-6 text-right breadcrumb">
          <li><a href="index.php">Home</a></li>
        </ol>

      </div>
    </div>
  </header>



  <!-- ========== Contact ========== -->

  <section id="contact" class="contact-3">
    <div class="container">
      <div class="row">

        <div class="col-md-12 col-lg-offset-2 col-lg-8">
          <div class="form-wrapper">
            <div class="from-header">
              <h2>Get in touch</h2>
              <p>Have a project you have in mind or just want to say hello? I'd love to hear from you. Use the form below to describe your project and contact me. I promise to get in touch with you shortly.</p>
            </div>

            <?php
            if (!empty($errors)) {
              foreach($errors as $key=>$value) {
                print('
                <div class="alert alert-danger">
                <strong>Error!</strong> An unexpected error occurred.
                ');
                echo $value;
                print("</div>");
              }
            }

            if(isset($_GET['success'])) {
              if (strcmp($_GET['success'], "true") == 0) {
                print('
                <div class="alert alert-success">
                <strong>Success!</strong> Your message has been sent.
                ');
                print("</div>");

              }
            }

            ?>

            <form id="quick-contact-form" name="quick-contact-form" action="/assets/contact-form/contact-form.php" method="post" class="form-minimal">

              <div class="form-process"></div>

              <div class="form-group">
                <input type="text" name="quick-contact-form-name" id="quick-contact-form-name" class="form-control validate-locally sm-form-control required" value="">
                <label for="name-contact-3">Name *</label>
              </div>

              <div class="form-group">
                <input type="email" id="quick-contact-form-email" name="quick-contact-form-email" value="" class="form-control required email sm-form-control" />
                <label for="email-contact-3">Email *</label>
              </div>

              <div class="form-group ws-s">
                <input type="tel" id="quick-contact-form-phone" name="quick-contact-form-phone" value="" class="form-control" />
                <label for="template-contactform-phone">Phone</label>
              </div>

              <div class="form-group">
                <p>Just say hello, or tell me about your project</p>
                <textarea class="form-control" name="quick-contact-form-message" id="message-contact-1" rows="5"></textarea>
                <label for="message-contact-1">Message *</label>
              </div>

              <input type="submit" class="btn-text" value="Send Message">

            </form>
          </div>
        </div>
      </div>
    </div><!-- / .container -->
  </section><!-- / .contact-3 -->



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

  <!-- Definity JS -->
  <script src="assets/js/main.js"></script>
</body>
</html>
