<?php $__env->startSection('title', 'Portfolio Details - FolioOne'); ?>
<?php $__env->startSection('body-class', 'portfolio-details-page'); ?>

<?php $__env->startSection('content'); ?>

<!-- Portfolio Details Section -->
<section id="portfolio-details" class="portfolio-details section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Portfolio Details</h2>
    <p>Explore my projects showcasing practical solutions, creative ideas, and technical skills developed through various professional and academic experiences.</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    
    <?php if($id == 1): ?>
    <div class="row gy-4">
      <div class="col-lg-6" data-aos="fade-right">
        <div class="portfolio-details-media">
          <div class="main-image">
            <div class="portfolio-details-slider swiper init-swiper" data-aos="zoom-in">
              <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 1000,
                  "autoplay": { "delay": 6000 },
                  "effect": "creative",
                  "creativeEffect": {
                    "prev": { "shadow": true, "translate": [0,0,-400] },
                    "next": { "translate": ["100%",0,0] }
                  },
                  "slidesPerView": 1,
                  "navigation": { "nextEl": ".swiper-button-next", "prevEl": ".swiper-button-prev" }
                }
              </script>
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="<?php echo e(asset('img/portfolio/d1.png')); ?>" alt="Dashboard" class="img-fluid">
                </div>
                <div class="swiper-slide">
                  <img src="<?php echo e(asset('img/portfolio/d2.png')); ?>" alt="Dashboard" class="img-fluid">
                </div>
                <div class="swiper-slide">
                  <img src="<?php echo e(asset('img/portfolio/ud1.png')); ?>" alt="Portfolio Image" class="img-fluid">
                </div>
              </div>
              <div class="swiper-button-prev"></div>
              <div class="swiper-button-next"></div>
            </div>
          </div>

          <div class="thumbnail-grid" data-aos="fade-up" data-aos-delay="200">
            <div class="row g-2 mt-3">
              <div class="col-3">
                <img src="<?php echo e(asset('img/portfolio/login.png')); ?>" alt="Login Page" class="img-fluid glightbox">
              </div>
              <div class="col-3">
                <img src="<?php echo e(asset('img/portfolio/ud2.png')); ?>" alt="Upload data Page (notification)" class="img-fluid glightbox">
              </div>
              <div class="col-3">
                <img src="<?php echo e(asset('img/portfolio/d3.png')); ?>" alt="Gallery Image" class="img-fluid glightbox">
              </div>
              <div class="col-3">
                <img src="<?php echo e(asset('img/portfolio/ua1.png')); ?>" alt="Update Admin Page" class="img-fluid glightbox">
              </div>
            </div>
          </div>

          <div class="tech-stack-badges" data-aos="fade-up" data-aos-delay="300">
            <span>Ionic</span>
            <span>Angular</span>
            <span>FastAPI</span>
            <span>PostgreSQL</span>
          </div>
        </div>
      </div>

      <div class="col-lg-6" data-aos="fade-left">
        <div class="portfolio-details-content">
          <div class="project-meta">
            <div class="badge-wrapper">
              <span class="project-badge">Dashboard</span>
            </div>
            <div class="date-client">
              <div class="meta-item">
                <i class="bi bi-calendar-check"></i>
                <span>2026</span>
              </div>
              <div class="meta-item">
                <i class="bi bi-buildings"></i>
                <span>Senai-Desaru Express Berhad</span>
              </div>
            </div>
          </div>

          <h2 class="project-title">Innovative Traffic Dashboard Web Based</h2>

          <div class="project-website">
            <i class="bi bi-link-45deg"></i>
            <a href="#" target="_blank">sde22-dashboard.onrender.com</a>
          </div>

          <div class="project-overview">
            <p class="lead">
            One of the main challenges was thinking critically to design and develop the algorithm flow independently. I had to analyze the data structure, determine the correct processing logic, and ensure the workflow produced accurate and meaningful analytical results without relying on predefined templates or solutions.
            </p>
            <div class="accordion project-accordion" id="portfolio-details-projectAccordion">
              <div class="accordion-item" data-aos="fade-up">
                <h2 class="accordion-header">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#portfolio-details-collapse-1" aria-expanded="true" aria-controls="collapseOne">
                    <i class="bi bi-clipboard-data me-2"></i> Project Overview
                  </button>
                </h2>
                <div id="portfolio-details-collapse-1" class="accordion-collapse collapse show" data-bs-parent="#portfolio-details-projectAccordion">
                  <div class="accordion-body">
                    <p>
                    A full-stack analytics dashboard system that processes operational data and generates interactive daily and executive reports. It enables management to monitor KPIs and make data-driven decisions efficiently.
                    </p>
                  </div>
                </div>
              </div>

              <div class="accordion-item" data-aos="fade-up" data-aos-delay="100">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#portfolio-details-collapse-2" aria-expanded="false" aria-controls="collapseTwo">
                    <i class="bi bi-exclamation-diamond me-2"></i> The Challenge
                  </button>
                </h2>
                <div id="portfolio-details-collapse-2" class="accordion-collapse collapse" data-bs-parent="#portfolio-details-projectAccordion">
                  <div class="accordion-body">
                    <p>
                    One of the main challenges was thinking critically to design and develop the algorithm flow independently. I had to analyze the data structure, determine the correct processing logic, and ensure the workflow produced accurate and meaningful analytical results without relying on predefined templates or solutions.                    </p>
                  </div>
                </div>
              </div>

              <div class="accordion-item" data-aos="fade-up" data-aos-delay="200">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#portfolio-details-collapse-3" aria-expanded="false" aria-controls="collapseThree">
                    <i class="bi bi-award me-2"></i> The Solution
                  </button>
                </h2>
                <div id="portfolio-details-collapse-3" class="accordion-collapse collapse" data-bs-parent="#portfolio-details-projectAccordion">
                  <div class="accordion-body">
                    <p>
                    To overcome this, I broke down the problem into smaller steps, carefully analyzed the data patterns, and designed a custom algorithm flow. I tested and iterated each part to ensure accuracy and efficiency, gradually building a fully functional workflow that automated data processing and report generation.
                    </p>
                </div>
                </div>
              </div>
            </div>
          </div>

          <div class="project-features" data-aos="fade-up" data-aos-delay="300">
            <h3><i class="bi bi-stars"></i> Key Features</h3>
            <div class="row g-3">
              <div class="col-md-6">
                <ul class="feature-list">
                  <li><i class="bi bi-check2-circle"></i> Data Visualization</li>
                  <li><i class="bi bi-check2-circle"></i> User Role Management</li>
                  <li><i class="bi bi-check2-circle"></i> Secure Authentication</li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="feature-list">
                  <li><i class="bi bi-check2-circle"></i> Customizable Dashboards</li>
                  <li><i class="bi bi-check2-circle"></i> Data Export Options</li>
                  <li><i class="bi bi-check2-circle"></i> Multi-device Support</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="cta-buttons" data-aos="fade-up" data-aos-delay="400">
            <a href="#" class="btn-view-project">View Live Project</a>
            <a href="#" class="btn-next-project">Next Project <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>
    <?php endif; ?>
    

    
    <?php if($id == 2): ?>
    <div class="row gy-4">
      
      <div class="col-lg-6" data-aos="fade-right">
        <div class="portfolio-details-media">
          <div class="main-image">
            <div class="portfolio-details-slider swiper init-swiper" data-aos="zoom-in">
              <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 1000,
                  "autoplay": { "delay": 6000 },
                  "effect": "creative",
                  "creativeEffect": {
                    "prev": { "shadow": true, "translate": [0,0,-400] },
                    "next": { "translate": ["100%",0,0] }
                  },
                  "slidesPerView": 1,
                  "navigation": { "nextEl": ".swiper-button-next", "prevEl": ".swiper-button-prev" }
                }
              </script>
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="<?php echo e(asset('img/portfolio/uniszar.png')); ?>" alt="Portfolio Image" class="img-fluid">
                </div>
                <div class="swiper-slide">
                  <img src="<?php echo e(asset('img/portfolio/4.png')); ?>" alt="Portfolio Image" class="img-fluid">
                </div>
                <div class="swiper-slide">
                  <img src="<?php echo e(asset('img/portfolio/2.png')); ?>" alt="Portfolio Image" class="img-fluid">
                </div>
                <div class="swiper-slide">
                  <img src="<?php echo e(asset('img/portfolio/3.png')); ?>" alt="Portfolio Image" class="img-fluid">
                </div>
              </div>
              <div class="swiper-button-prev"></div>
              <div class="swiper-button-next"></div>
            </div>
          </div>

          <div class="thumbnail-grid" data-aos="fade-up" data-aos-delay="200">
            <div class="row g-2 mt-3">
              <div class="col-3">
                <img src="<?php echo e(asset('img/portfolio/MQTT.png')); ?>" alt="Flowgorithm" class="img-fluid glightbox">
              </div>
              <div class="col-3">
                <img src="<?php echo e(asset('img/portfolio/5.png')); ?>" alt="Gallery Image" class="img-fluid glightbox">
              </div>
              <div class="col-3">
                <img src="<?php echo e(asset('img/portfolio/3.png')); ?>" alt="Gallery Image" class="img-fluid glightbox">
              </div>
              <div class="col-3">
                <img src="<?php echo e(asset('img/portfolio/2.png')); ?>" alt="Gallery Image" class="img-fluid glightbox">
              </div>
            </div>
          </div>

          <div class="tech-stack-badges" data-aos="fade-up" data-aos-delay="300">
            <span>Flutter</span>
            <span>HiveMQ</span>
            <span>Firebase</span>
            <span>IoT</span>
            <span>Android</span>
          </div>
        </div>
      </div>

      <div class="col-lg-6" data-aos="fade-left">
        <div-- class="portfolio-details-content">
          <div class="project-meta">
            <div class="badge-wrapper">
              <span class="project-badge">Android & IoT</span>
            </div>
            <div class="date-client">
              <div class="meta-item">
                <i class="bi bi-calendar-check"></i>
                <span>September 2024</span>
              </div>
              <div class="meta-item">
                <i class="bi bi-buildings"></i>
                <span>UniSZA</span>
              </div>
            </div>
          </div>

          <h2 class="project-title">S.P.A.D.E</h2>

          <!--div class="project-website">
            <i class="bi bi-link-45deg"></i>
            <a href="#" target="_blank">projectwebsite.example.com</a>
          </div-->

          <div class="project-overview">
            <p class="lead">
                Sport Performance And Dietary Evaluation (S.P.A.D.E) is a mobile application designed to help athletes and fitness enthusiasts track their performance and dietary habits. The app integrates with IoT devices to monitor real-time biometric data, providing users with insights into their training effectiveness and nutritional intake. With features like personalized workout plans, meal tracking, and performance analytics, S.P.A.D.E empowers users to optimize their fitness journey and achieve their health goals.
            </p>
            <p class="lead">
                Participated in the 3rd Research in High Performance Sports Colloquium 2024 at Institut Sukan Negara, gaining insights into sports analytics and performance research.
            </p>
          </div>

          <div class="project-features" data-aos="fade-up" data-aos-delay="300">
            <h3><i class="bi bi-stars"></i> Key Features</h3>
            <div class="row g-3">
              <div class="col-md-6">
                <ul class="feature-list">
                  <li><i class="bi bi-check2-circle"></i> Real-time Data Visualization</li>
                  <li><i class="bi bi-check2-circle"></i> User Role Management</li>
                  <li><i class="bi bi-check2-circle"></i> Authentication</li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="feature-list">
                  <li><i class="bi bi-check2-circle"></i> Activity Dashboards</li>
                  <li><i class="bi bi-check2-circle"></i> Monitoring Athlete Performance</li>

                </ul>
              </div>
            </div>
          </div>

          <div class="cta-buttons" data-aos="fade-up" data-aos-delay="400">
            <a href="#" class="btn-view-project">View Live Project</a>
            <a href="#" class="btn-next-project">Next Project <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>
    <?php endif; ?>
    

    
    <?php if($id == 3): ?>
    <div class="row gy-4">
      
      <div class="col-lg-6" data-aos="fade-right">
        <div class="portfolio-details-media">
          <div class="main-image">
            <div class="portfolio-details-slider swiper init-swiper" data-aos="zoom-in">
              <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 1000,
                  "autoplay": { "delay": 6000 },
                  "effect": "creative",
                  "creativeEffect": {
                    "prev": { "shadow": true, "translate": [0,0,-400] },
                    "next": { "translate": ["100%",0,0] }
                  },
                  "slidesPerView": 1,
                  "navigation": { "nextEl": ".swiper-button-next", "prevEl": ".swiper-button-prev" }
                }
              </script>
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="<?php echo e(asset('img/portfolio/i2.png')); ?>" alt="Portfolio Image" class="img-fluid">
                </div>
                <div class="swiper-slide">
                  <img src="<?php echo e(asset('img/portfolio/i3.png')); ?>" alt="Portfolio Image" class="img-fluid">
                </div>
                <div class="swiper-slide">
                  <img src="<?php echo e(asset('img/portfolio/i4.png')); ?>" alt="Portfolio Image" class="img-fluid">
                </div>
              </div>
              <div class="swiper-button-prev"></div>
              <div class="swiper-button-next"></div>
            </div>
          </div>

          <div class="thumbnail-grid" data-aos="fade-up" data-aos-delay="200">
            <div class="row g-2 mt-3">
                <div class="col-3">
                <img src="<?php echo e(asset('img/portfolio/i5.png')); ?>" alt="Flowgorithm" class="img-fluid glightbox">
                </div>
                <div class="col-3">
                <img src="<?php echo e(asset('img/portfolio/i6.png')); ?>" alt="Gallery Image" class="img-fluid glightbox">
                </div>
                <div class="col-3">
                <img src="<?php echo e(asset('img/portfolio/i7.png')); ?>" alt="Gallery Image" class="img-fluid glightbox">
                </div>
                <div class="col-3">
                <img src="<?php echo e(asset('img/portfolio/i8.png')); ?>" alt="Gallery Image" class="img-fluid glightbox">
                </div>
                <div class="col-3">
                <img src="<?php echo e(asset('img/portfolio/i9.png')); ?>" alt="Gallery Image" class="img-fluid glightbox">
                </div>
                <div class="col-3">
                <img src="<?php echo e(asset('img/portfolio/i10.png')); ?>" alt="Gallery Image" class="img-fluid glightbox">
                </div>
                <div class="col-3">
                <img src="<?php echo e(asset('img/portfolio/i11.png')); ?>" alt="Gallery Image" class="img-fluid glightbox">
                </div>
                <div class="col-3">
                <img src="<?php echo e(asset('img/portfolio/i12.png')); ?>" alt="Gallery Image" class="img-fluid glightbox">
                </div>
            </div>
        </div>

          <div class="tech-stack-badges" data-aos="fade-up" data-aos-delay="300">
            <span>Ionic</span>
            <span>Angular</span>
            <span>Firebase</span>
            <span>IOS</span>
            <span>Android</span>
          </div>
        </div>
      </div>

      <div class="col-lg-6" data-aos="fade-left">
        <div-- class="portfolio-details-content">
          <div class="project-meta">
            <div class="badge-wrapper">
              <span class="project-badge">Android & IoT</span>
            </div>
            <div class="date-client">
              <div class="meta-item">
                <i class="bi bi-calendar-check"></i>
                <span>December 2024</span>
              </div>
              <div class="meta-item">
                <i class="bi bi-buildings"></i>
                <span>UniSZA</span>
              </div>
            </div>
          </div>

          <h2 class="project-title">My Deen List</h2>

          <!--div class="project-website">
            <i class="bi bi-link-45deg"></i>
            <a href="#" target="_blank">projectwebsite.example.com</a>
          </div-->

          <div class="project-overview">
            <p class="lead">
                My Deen List is a mobile application designed to help users track their daily religious activities and habits. The app allows users to set goals, log their daily prayers, Quran recitations, and other religious practices. With features like progress tracking, reminders, and motivational messages, My Deen List helps users maintain consistency in their spiritual journey.
            </p>
          </div>

          <div class="project-features" data-aos="fade-up" data-aos-delay="300">
            <h3><i class="bi bi-stars"></i> Key Features</h3>
            <div class="row g-3">
              <div class="col-md-6">
                <ul class="feature-list">
                <li><i class="bi bi-check2-circle"></i>Progress tracking</li>
                <li><i class="bi bi-check2-circle"></i> Set daily goals for prayers and Quran recitations</li>
                <li><i class="bi bi-check2-circle"></i> Log and track daily religious activities</li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="feature-list">
                <li><i class="bi bi-check2-circle"></i>Notifications Reminder to encourage consistency</li>
                <li><i class="bi bi-check2-circle"></i> Colorful and kid-friendly dashboards</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="cta-buttons" data-aos="fade-up" data-aos-delay="400">
            <a href="#" class="btn-view-project">View Live Project</a>
            <a href="#" class="btn-next-project">Next Project <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>
    <?php endif; ?>
    

  </div>

</section><!-- /Portfolio Details Section -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampps\htdocs\Awang\resources\views/portfolio-details.blade.php ENDPATH**/ ?>