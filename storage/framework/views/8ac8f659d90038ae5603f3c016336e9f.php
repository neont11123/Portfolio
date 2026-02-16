<?php $__env->startSection('title', 'Portfolio - FolioOne'); ?>
<?php $__env->startSection('body-class', 'portfolio-page'); ?>
<?php $__env->startSection('content'); ?>

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Portfolio</h2>
        <p>Explore my projects showcasing practical solutions, creative ideas, and technical skills developed through various professional and academic experiences.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="200">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-strategy">Strategy</li>
            <li data-filter=".filter-finance">Finance</li>
            <li data-filter=".filter-operations">Operations</li>
            <li data-filter=".filter-technology">Technology</li>
          </ul><!-- End Portfolio Filters -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="300">
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-strategy">
              <div class="portfolio-card">
                <div class="portfolio-img">
                  <img src="img/portfolio/f1.png" alt="Portfolio Item" class="img-fluid">
                  <div class="portfolio-overlay">
                    <a href="img/portfolio/f1.png" class="glightbox portfolio-lightbox"><i class="bi bi-plus"></i></a>
                    <a href="<?php echo e(url('/portfolio-details/1')); ?>" class="portfolio-details-link"><i class="bi bi-link"></i></a>
                  </div>
                </div>
                <div class="portfolio-info">
                <h4>Dashboard Analytics - SDE berhad </h4>
                <p>Created an analytics dashboard to track operations and generate reports for management.</p>
                <div class="portfolio-tags">
                    <span>Web Development</span>
                    <span>Data Analysis</span>
                    <span>Reporting</span>
                </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-operations">
              <div class="portfolio-card">
                <div class="portfolio-img">
                  <img src="img/portfolio/mainapp.png" alt="Portfolio Item" class="img-fluid">
                  <div class="portfolio-overlay">
                    <a href="img/portfolio/mainapp.png" class="glightbox portfolio-lightbox"><i class="bi bi-plus"></i></a>
                    <a href="<?php echo e(url('/portfolio-details/2')); ?>" class="portfolio-details-link"><i class="bi bi-link"></i></a>
                  </div>
                </div>
                <div class="portfolio-info">
                  <h4>Android Apps with IoT Integration</h4>
                    <p>Built an Android app to monitor and control IoT devices in real-time.</p>
                  <div class="portfolio-tags">
                    <span>IoT</span>
                    <span>Mobile Apps</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-finance">
              <div class="portfolio-card">
                <div class="portfolio-img">
                  <img src="img/portfolio/i1.png" alt="Portfolio Item" class="img-fluid">
                  <div class="portfolio-overlay">
                    <a href="img/portfolio/i1.png" class="glightbox portfolio-lightbox"><i class="bi bi-plus"></i></a>
                    <a href="<?php echo e(url('/portfolio-details/3')); ?>" class="portfolio-details-link"><i class="bi bi-link"></i></a>
                  </div>
                </div>
                <div class="portfolio-info">
                  <h4>My Deen List</h4>
                    <p>Mobile app for kids to track prayers, Quran recitations, and daily spiritual activities.</p>
                  <div class="portfolio-tags">
                    <span>Mobile Apps</span>
                    <span>Kids</span>
                    <span>Habbit Tracker</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-technology">
              <div class="portfolio-card">
                <div class="portfolio-img">
                  <img src="img/portfolio/portfolio-4.webp" alt="Portfolio Item" class="img-fluid">
                  <div class="portfolio-overlay">
                    <a href="img/portfolio/portfolio-4.webp" class="glightbox portfolio-lightbox"><i class="bi bi-plus"></i></a>
                    <a href="<?php echo e(url('/portfolio-details/4')); ?>" class="portfolio-details-link"><i class="bi bi-link"></i></a>
                  </div>
                </div>
                <div class="portfolio-info">
                  <h4>Digital Transformation</h4>
                  <p>Technology Consulting</p>
                  <div class="portfolio-tags">
                    <span>Technology</span>
                    <span>Innovation</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-strategy">
              <div class="portfolio-card">
                <div class="portfolio-img">
                  <img src="img/portfolio/portfolio-5.webp" alt="Portfolio Item" class="img-fluid">
                  <div class="portfolio-overlay">
                    <a href="img/portfolio/portfolio-5.webp" class="glightbox portfolio-lightbox"><i class="bi bi-plus"></i></a>
                    <a href="<?php echo e(url('/portfolio-details/5')); ?>" class="portfolio-details-link"><i class="bi bi-link"></i></a>
                  </div>
                </div>
                <div class="portfolio-info">
                  <h4>Market Expansion</h4>
                  <p>Strategic Planning</p>
                  <div class="portfolio-tags">
                    <span>Strategy</span>
                    <span>Growth</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-finance">
              <div class="portfolio-card">
                <div class="portfolio-img">
                  <img src="img/portfolio/portfolio-6.webp" alt="Portfolio Item" class="img-fluid">
                  <div class="portfolio-overlay">
                    <a href="img/portfolio/portfolio-6.webp" class="glightbox portfolio-lightbox"><i class="bi bi-plus"></i></a>
                    <a href="<?php echo e(url('/portfolio-details/6')); ?>" class="portfolio-details-link"><i class="bi bi-link"></i></a>
                  </div>
                </div>
                <div class="portfolio-info">
                  <h4>Investment Strategy</h4>
                  <p>Financial Advisory</p>
                  <div class="portfolio-tags">
                    <span>Finance</span>
                    <span>Investment</span>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Portfolio Items Container -->

        </div>

        <div class="text-center mt-5" data-aos="fade-up" data-aos-delay="400">
          <a href="<?php echo e(url('/portfolio-details/7')); ?>portfolio" class="btn btn-primary">View All Case Studies</a>
        </div>

      </div>

    </section><!-- /Portfolio Section -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampps\htdocs\Awang\resources\views/portfolio.blade.php ENDPATH**/ ?>