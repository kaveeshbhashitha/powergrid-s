<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        include('./components/header-links.php'); 
    ?>
</head>

<body class="index-page">

    <?php 
        include('./components/top-nav.php');
    ?>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up">
            <h1>Elegant and Sustainable Power Solutions</h1>
            <p>We deliver innovative, eco-friendly energy solutions that combine efficiency with sustainability for a greener future.</p>
            <div class="d-flex">
              <a href="#about" class="btn-get-started">Get Started</a>
              <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="100">
            <img src="assets/img/power-back.jpg" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>

    </section><!-- /Hero Section  -->

    <!-- Featured Services Section -->
    <section id="featured-services" class="featured-services section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-activity icon"></i></div>
              <h4><a href="" class="stretched-link">Expert Consultants</a></h4>
              <p>Our seasoned professionals provide expert guidance to optimize your business processes and drive success</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-bounding-box-circles icon"></i></div>
              <h4><a href="" class="stretched-link">Standards Compliance</a></h4>
              <p>We ensure your organization meets industry regulations and international standards with precision</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-calendar4-week icon"></i></div>
              <h4><a href="" class="stretched-link">Quality Management System</a></h4>
              <p>Our robust QMS solutions enhance efficiency, consistency, and continuous improvement</p>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section>
    <!-- /Featured Services Section -->

    <!-- Services Section -->
    <?php 
        include('./components/service.php');
    ?>

    <!-- /Services Section -->

    
    <!-- Testimonials Section -->
    <?php 
        include('./components/testimonials.php');
    ?>

    <!-- /Testimonials Section -->

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section accent-background">

      <div class="container">
        <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-xl-10">
            <div class="text-center">
              <h3>Call To Action</h3>
              <p>Empower your business with cutting-edge electrical solutions! Whether you need industrial maintenance, smart automation, or sustainable energy systems, we’re here to help. Contact us today to discuss your next project and take the first step toward efficiency and innovation!</p>
              <a class="cta-btn" href="https://wa.me/94712437010" target="_blank">
                  <i class="bi bi-whatsapp"></i> Instant WhatsApp Chat
              </a>
            </div>
          </div>
        </div>
      </div>

    </section><!-- /Call To Action Section -->

    <!-- Team Section -->
    <section id="team" class="team section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span>Section Title</span>
        <h2>Team</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-5">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="pic"><img src="assets/img/team/hasitha.png" class="img-fluid" alt="team" style="height:auto; width:450px"></div>
              <div class="member-info">
                <h4>W.H. Eranga</h4>
                <span>Our Director</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="pic"><img src="assets/img/team/njith.png" class="img-fluid" alt="" style="height:420px; width:450px"></div>
              <div class="member-info">
                <h4>N. Kurakulasooriya</h4>
                <span>Product Manager</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="pic"><img src="assets/img/team/charith.png" class="img-fluid" alt="" style="height:auto; width:450px"></div>
              <div class="member-info">
                <h4>W.C. Madhuranga</h4>
                <span>CTO</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter-x"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>

    </section><!-- /Team Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span>Section Title</span>
        <h2>Contact</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-6">
            <div class="info-wrap">
              <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3961.669125670864!2d79.93204399999999!3d6.810040999999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNsKwNDgnMzYuMiJOIDc5wrA1NSc1NS40IkU!5e0!3m2!1sen!2slk!4v1743263180484!5m2!1sen!2slk" width="100%" height="300px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
          <div class="col-lg-6">
              <iframe src="contact.html" frameborder="0" style="height:100%; width:100%; overflow:hidden;" scrolling="no"></iframe>

          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

<?php 
    include('./components/footer.php');
?>

  <!-- Scroll Top -->
<?php 
    include('./components/footer-link.php');
?>

</body>

</html>