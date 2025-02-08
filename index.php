<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Rahat Parvej- Web Designer &amp; Developer</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/favicon.png" rel="apple-touch-icon">
  

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- Disable Right click -->
  <script>
    function disableRightClick(event) {
      if (event.button == 2) {
        event.preventDefault(); // Prevent the default right-click behavior
        // alert("Right click disabled!");
        return false;
      }
    }
  </script>
    

</head>

 <body class="index-page" oncontextmenu="disableRightClick(event)"> 
<!--<body class="index-page">-->

  <header id="header" class="header dark-background d-flex flex-column">
    <i class="header-toggle d-xl-none bi bi-list"></i>

    <div class="profile-img">
      <img src="assets/img/my-profile-img.jpg" alt="" class="img-fluid rounded-circle">
    </div>

    <a href="index.html" class="logo d-flex align-items-center justify-content-center">
      <!-- Uncomment the line below if you also wish to use an image logo -->
      <!-- <img src="assets/img/logo.png" alt=""> -->
      <h1 class="sitename">Rahat Parvej</h1>
    </a>

    <div class="social-links text-center">
      <a href="www.linkedin.com/in/rahatparvej2" class="linkedin" target="_blank"><i class="bi bi-linkedin"></i></a>
      <a href="https://www.facebook.com/rahat.parvej.184/" class="facebook" target="_blank"><i class="bi bi-facebook"></i></a>
      <a href="https://join.skype.com/invite/yeYVWzyAmDu7" class="google-plus" target="_blank"><i class="bi bi-skype"></i></a>
      <a href="https://x.com/Rahat_parvej_r" class="twitter" target="_blank"><i class="bi bi-twitter-x"></i></a>
      <a href="https://www.instagram.com/rahat_parvej/" class="instagram" target="_blank"><i class="bi bi-instagram"></i></a>
      
      
    </div>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="#hero" class="active"><i class="bi bi-house navicon"></i>Home</a></li>
        <li><a href="#about"><i class="bi bi-person navicon"></i> About</a></li>
        <li><a href="#resume"><i class="bi bi-file-earmark-text navicon"></i> Resume</a></li>
        <li><a href="#portfolio"><i class="bi bi-images navicon"></i> Portfolio</a></li>
        <li><a href="#services"><i class="bi bi-hdd-stack navicon"></i> Services</a></li>
        <!-- <li class="dropdown"><a href="#"><i class="bi bi-menu-button navicon"></i> <span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
          <ul>
            <li><a href="#">Dropdown 1</a></li>
            <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="#">Deep Dropdown 1</a></li>
                <li><a href="#">Deep Dropdown 2</a></li>
                <li><a href="#">Deep Dropdown 3</a></li>
                <li><a href="#">Deep Dropdown 4</a></li>
                <li><a href="#">Deep Dropdown 5</a></li>
              </ul>
            </li>
            <li><a href="#">Dropdown 2</a></li>
            <li><a href="#">Dropdown 3</a></li>
            <li><a href="#">Dropdown 4</a></li>
          </ul>
        </li> -->
        <li><a href="#contact"><i class="bi bi-envelope navicon"></i> Contact</a></li>
      </ul>
    </nav>

  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <img src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in" class="">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <h2>Rahat Parvej</h2>
        <p>I'm <span class="typed" data-typed-items="Web Designer and Developer, Software Engineer, Wordpress Designer"></span><span class="typed-cursor typed-cursor--blink" aria-hidden="true"></span><span class="typed-cursor typed-cursor--blink" aria-hidden="true"></span></p>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>About</h2>
        <p>I am Rahat Parvej, a confident Computer Science and Engineering graduate with strong expertise in web development, machine learning, and data analysis. I create high-performance, responsive websites, specializing in custom WordPress themes and plugins.
        </p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 justify-content-center">
          <div class="col-lg-4">
            <img src="assets/img/my-profile-img.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 content">
            <h2>Web Designer &amp; Developer.</h2>
            <p class="fst-italic py-3">
              I am eager to embrace new opportunities where I can apply my skills, learn new technologies, and collaborate on impactful projects.
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>4 September 1999</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span><a href="https://www.raurco.com" class="text-black">www.raurco.com</a></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span><a href="tel:+8801741462787" class="text-black">+880 1741-462787</a></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span><a href="https://maps.app.goo.gl/taTjuNovZJuSyQQVA" target="_blank" rel="noopener noreferrer" class="text-black"><address class="mb-0">Vill.: Haripur, P.O.: Dasnagar - 6530, Patnitala, Naogaon, Bangladesh</address></a></span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>25</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Master of Science </span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span><a href="mailto:rahatparvej2@gmail.com" class="text-black">rahatparvej2@gmail.com</a></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span><a href="https://www.fiverr.com/rahatparvej2" target="_blank" rel="noopener noreferrer" class="text-black">Available</a></span></li>
                </ul>
              </div>
            </div>
            <p class="py-3">
              I have received the ICTD Fellowship from the Ministry of Post, Telecommunication, and Information Technology for my research in data analysis and machine learning. My skill set includes programming languages like C++, Python, PHP, and JavaScript, as well as frameworks such as Django and TensorFlow.
            </p>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-3">

          <div class="col-lg-4 col-md-4">
            <div class="stats-item">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="30" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Happy Clients</strong> <span><a href="https://www.fiverr.com/rahatparvej2" target="_blank" rel="noopener noreferrer">Fiveer</a></span></p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-4 col-md-4">
            <div class="stats-item">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="42" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Sucessfull Projects</strong> <span></span></p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-4 col-md-4">
            <div class="stats-item">
              <i class="bi bi-headset"></i> 
              <span data-purecounter-start="0" data-purecounter-end="1" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Level </strong> <span>Seller</span></p>
            </div>
          </div><!-- End Stats Item -->

          <!-- <div class="col-lg-3 col-md-6">
            <div class="stats-item">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Hard Workers</strong> <span>rerum asperiores dolor</span></p>
            </div>
          </div>End Stats Item -->

        </div>

      </div>

    </section><!-- /Stats Section -->

    <!-- Skills Section -->
    <section id="skills" class="skills section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Skills</h2>
        <p>Why Choose me?</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row skills-content skills-animation">

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill"><span>HTML</span> <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

            <div class="progress">
              <span class="skill"><span>CSS</span> <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

            <div class="progress">
              <span class="skill"><span>JavaScript</span> <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

            <div class="progress">
              <span class="skill"><span>WordPress/CMS</span> <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->
            <div class="progress">
              <span class="skill"><span>Bootstrap</span> <i class="val">95%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

          </div>

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill"><span>PHP</span> <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

            <div class="progress">
              <span class="skill"><span>Python</span> <i class="val">55%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

            <div class="progress">
              <span class="skill"><span>C/C++</span> <i class="val">85%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

            <div class="progress">
              <span class="skill"><span>Machine Learning</span> <i class="val">70%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

            <div class="progress">
              <span class="skill"><span>Django</span> <i class="val">50%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

          </div>

        </div>

      </div>

    </section><!-- /Skills Section -->

    <!-- Resume Section -->
    <section id="resume" class="resume section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Resume</h2>
        <h5 class="card-title placeholder-glow mb-3 text-center">
          <span class="placeholder col-12 mb-3 rounded-5 bg-success"></span>
          <a href="assets/Rahat_Parvej_CV_Web.pdf" target="_blank" rel="noopener noreferrer" class="btn btn-outline-dark">DOWNLOAD CV</a>
        </h5>
        
        
       
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            

            <h3 class="resume-title">Education</h3>
            <div class="resume-item">
              <div class="row">
                <div class="col-12 col-md-8 text-black fw-bolder"><h4>Master of Science</h4></div>
                <div class="col-12 col-md-4 text-end"><h6>2022(held in 2024)</h6></div>
              </div>
              <div class="ps-3">
                <p class="mb-0 fs-5">Computer Science &amp; Engineering</p>
                <span class="fs-6 d-block"><em>Jatiya Kabi Kazi Nazrul Islam University</em></span>
                <span class="mb-1">Trishal, Mymensingh, Bangladesh</span>
                <p class="mb-0"><strong>Grade: </strong>3.71(out of 4.00)</p>
              </div>
              

              
            </div><!-- Edn Resume Item -->

            <div class="resume-item">
              <div class="row">
                <div class="col-12 col-md-9 text-black fw-bolder"><h4>Bachelor of Science and Engineering </h4></div>
                  <div class="col-12 col-md-3 ps-0 text-end"><h6>2021(held in 2023)</h6></div>
              </div>
              <div class="ps-3">
                <p class="mb-0 fs-5">Computer Science &amp; Engineering</p>
                <span class="fs-6 d-block"><em>Jatiya Kabi Kazi Nazrul Islam University</em></span>
                <span class="mb-1">Trishal, Mymensingh, Bangladesh</span>
                <p class="mb-0"><strong>Grade: </strong>3.04(out of 4.00)</p>
              </div>
            </div>

          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <h3 class="resume-title">Professional Experience</h3>
            <div class="resume-item">
              <div class="row">
                <div class="col-6"><h4>Junior Web Developer</h4></div>
                <div class="col-6 text-end"><h6>October, 2024 - Present</h6></div>
              </div>
              <a href="https://pixable.co/" target="_blank" rel="noopener noreferrer" class="fs-5 ps-3 text-black mb-2">Pixable Limited</a>
              <address class="ps-3">30 Churchill Place, London, E14 5RE, United Kingdom </address>
              <ul class="fs-6" style="text-align:justify;">
                <li>Develop and maintain custom WordPress themes and plugins.</li>
                <li>Convert PSD/Sketch/Figma designs into fully functional WordPress sites.</li>
                <li>Collaborate with designers, project managers, and other developers to ensure project requirements are met.</li>
                <li>Implement responsive design principles to ensure websites are mobile-friendly.</li>
                <li>Optimise website performance, ensuring fast load times and high performance.</li>
                <li>Troubleshoot and resolve issues related to existing WordPress websites.Ensure all websites adhere to SEO best practices and are optimised for search engines.</li>
                <li>Stay up-to-date with the latest industry trends and technologies to ensure our projects are cutting-edge.</li>
                </ul>
            </div><!-- Edn Resume Item -->
          </div>

        </div>

      </div>

    </section><!-- /Resume Section -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Portfolio</h2>
        <p>Check My Wonderful Works</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">Web Development</li>
            <li data-filter=".filter-product">PSD to HTML</li>
            <li data-filter=".filter-branding">WordPress</li>
            <!-- <li data-filter=".filter-books">Books</li> -->
          </ul><!-- End Portfolio Filters -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/app-1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Django Project</h4>
                  <p>Web Based Prediction of Target Disease on Distributed Data Using A Privacy-Preserving Federated Learning Approach</p>
                  <a href="assets/img/portfolio/app-1.jpg" title="Django Project" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="https://raurco.com/mdd/" title="More Details" class="details-link" target="_blank"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->
            
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/app-2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>PHP Project</h4>
                  <p> A website for analyzing child abortion statistics</p>
                  <a href="assets/img/portfolio/app-2.jpg" title="PHP Project" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="https://www.raurco.com/abortion/" title="More Details" class="details-link" target="_blank"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/product-1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>PSD to HTML</h4>
                  <p>Cuda Desight convertion PSD to HTML</p>
                  <a href="assets/img/portfolio/product-1.jpg" title="Cuda Desigh" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="https://raurco.com/Home/PSD%20to%20HTML%20Cuda-Single-Page-Portfolio/" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/branding-1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>WordPress Website</h4>
                  <p>Functional Website for Moira Resturant</p>
                  <a href="assets/img/portfolio/branding-1.jpg" title="Moira Website" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="#" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/product-2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>PSD to HTML</h4>
                  <p>Dark Delight Desight convertion PSD to HTML</p>
                  <a href="assets/img/portfolio/product-2.jpg" title="DarkDelight Design" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="https://raurco.com/Home/PSD%20to%20HTML%20DarkDelight/" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item -->
            
            <!-- <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/books-2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Books 2</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/portfolio/books-2.jpg" title="Branding 2" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div> -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Services</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100" style="cursor: -webkit-grab; cursor: grab;">
            <div class="icon flex-shrink-0"><i class="bi bi-pc-display-horizontal"></i></div>
            <div>
              <h4 class="title">Web Design &amp; Development</h4>
              <p class="description">Create great and user friendly fully responsive website with HTML, CSS, JavaScript, PHP, Python, Bootstrap, Django</p>
            </div>
          </div>
          <!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200" style="cursor: -webkit-grab; cursor: grab;">
            <div class="icon flex-shrink-0"><i class="bi bi-wordpress"></i></div>
            <div>
              <!-- <h4 class="title"><a href="service-details.html" class="stretched-link">Dolor Sitema</a></h4> -->
              <h4 class="title">Wordpress Customization</h4>
              <p class="description">Create great and user friendly fully responsive website by customizing WordPress theme amd plugin</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300" style="cursor: -webkit-grab; cursor: grab;">
            <div class="icon flex-shrink-0"><i class="bi bi-file-earmark-richtext-fill"></i></div>
            <div>
              <h4 class="title">Landing Page Design</h4>
              <p class="description">Design pixel perfect fully responsive landing page using HTML, CSS, JavaScript or using WordPress</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="400" style="cursor: -webkit-grab; cursor: grab;">
            <div class="icon flex-shrink-0"><i class="bi bi-file-earmark-code-fill"></i></div>
            <div>
              <h4 class="title">PSD to HTML Convertion</h4>
              <p class="description">Converts Photoshop/Illustrator/Figma Design to pixel perfect and responsive HTML web page</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="500" style="cursor: -webkit-grab; cursor: grab;">
            <div class="icon flex-shrink-0"><i class="bi bi-speedometer2"></i></div>
            <div>
              <h4 class="title">Website SpeedUp</h4>
              <p class="description">Increase website performance and speed to get higher ranking in <a href="https://pagespeed.web.dev/" target="_blank" rel="noopener noreferrer">PageSpeed Insight</a>/<a href="https://gtmetrix.com/" target="_blank" rel="noopener noreferrer">GTmetrix</a> </p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="600" style="cursor: -webkit-grab; cursor: grab;">
            <div class="icon flex-shrink-0"><i class="bi bi-envelope-at-fill"></i></div>
            <div>
              <h4 class="title">Email Signature &amp; Template</h4>
              <p class="description">Create mobile friendly, clickable and editable email signature which will reflect the pofessionalism of your bussiness</p>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Testimonials</h2>
        <p>What People Say About Me</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 1
                }
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Rahat did some great work on my website, and now stats shows a lot of imrovement and when browsing, the website is much faster and smoother. Thank you</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Badrsaber</h3>
                <h4>Morocco</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>He did an amazing job and was able to do everything asked perfectly.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Canada</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Awesome work, fast and quick service, and his communication was awesome, perfect service, I will come back to you again. Thanks</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>United State</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Great experience, superfast delivery and high quality of work. The signature works on all platforms and is really nice. Thanks for your fast and professional help. I can just recommend the service and i will make sure to order again. Have a great day.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Germany</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Great final outcome. Helped with some installation issues and was happy to work to get it right.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Greece</h4>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Contact with me or just send a message</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-5">

            <div class="info-wrap">
              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h3>Address</h3>
                  <a href="https://maps.app.goo.gl/taTjuNovZJuSyQQVA" target="_blank" rel="noopener noreferrer" class="text-black"><address class="mb-0">Vill.: Haripur, P.O.: Dasnagar - 6530, Patnitala, Naogaon, Bangladesh</address></a>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-telephone flex-shrink-0"></i>
                <div>
                  <h3>Call Us</h3>
                  <a href="tel:+8801741462787" class="text-black">+880 1741-462787</a>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h3>Email Us</h3>
                  <a href="mailto:rahatparvej2@gmail.com" class="text-black">rahatparvej2@gmail.com</a>
                </div>
              </div><!-- End Info Item -->

              <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d2899.989312923677!2d88.85704869589397!3d25.016840526871974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjXCsDAxJzAzLjMiTiA4OMKwNTEnMjcuNyJF!5e1!3m2!1sen!2sbd!4v1730530531033!5m2!1sen!2sbd" frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                
            </div>
          </div>

          <div class="col-lg-7">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                <div class="row gy-4">

                    <div class="col-md-6">
                      <label for="name-field" class="pb-2">Your Name</label>
                      <input type="text" name="name" id="name-field" class="form-control" placeholder="Please Enter Your Full Name" required>
                    </div>
    
                    <div class="col-md-6">
                      <label for="email-field" class="pb-2">Your Email</label>
                      <input type="email" class="form-control" name="email" id="email-field" placeholder="Please Enter Your Email Address" required>
                    </div>
    
                    <div class="col-md-12">
                      <label for="subject-field" class="pb-2">Subject</label>
                      <input type="text" class="form-control" name="subject" id="subject-field" placeholder="Please Give a Subject for Your Message" required>
                    </div>
    
                    <div class="col-md-12">
                      <label for="message-field" class="pb-2">Message</label>
                      <textarea class="form-control" name="message" rows="10" id="message-field" placeholder="Type Your Message Here" required></textarea>
                    </div>
    
                    <div class="loading">Sending...</div>
                    <div class="error-message">Wrong</div>
                    <div class="sent-message">Your message was sent successfully!</div>
    
                     <button type="submit">Send Message</button>
                    </div>

                </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer position-relative light-background">

    <div class="container">
      <div class="copyright text-center ">
        <p>&copy; <?php echo date('Y');?> <strong class="px-1 sitename">Rahat Parvej</strong> <span>All Rights Reserved</span></p>
      </div>
      <div class="credits">
        <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/typed.js/typed.umd.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>