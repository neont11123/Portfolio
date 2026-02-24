<?php $__env->startSection('title', 'Home - Awang Hilmi Portfolio'); ?>

<?php $__env->startSection('content'); ?>
    <!-- Hero Section -->
    <section id="hero" class="hero section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 align-items-center">
          <div class="col-lg-6 order-2 order-lg-1">
            <div class="hero-content">
              <h1 data-aos="fade-up" data-aos-delay="200">Hello, I'm <span class="highlight">Awang Hilmi</span></h1>
              <h2 data-aos="fade-up" data-aos-delay="300">Creative <span class="typed" data-typed-items="UI/UX Designer, Web Developer, Mobile App Developer"></span></h2>
                <p data-aos="fade-up" data-aos-delay="400">Experienced in developing mobile applications, web platforms, and IoT solutions. I enjoy creating practical and effective solutions that meet both user needs and business goals.</p>
              <div class="hero-actions" data-aos="fade-up" data-aos-delay="500">
                <a href="<?php echo e(route('about')); ?>" class="btn btn-primary">View About Me</a>
                <a href="https://wa.me/qr/NHFY5B3BHCTVB1" class="btn btn-outline">Get In Touch</a>
              </div>
              <div class="social-links" data-aos="fade-up" data-aos-delay="600">
                <a href="https://www.tiktok.com/@awanghilmi?_r=1&_t=ZS-949I9twluJF"><i class="bi bi-tiktok"></i></a>
                <a href="https://www.instagram.com/awangemy?igsh=cDBxc2YzZGo2OXdl" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="https://www.facebook.com/share/1CLBqu89pY/" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="https://wa.me/qr/NHFY5B3BHCTVB1" class="Whatsapp"><i class="bi bi-whatsapp"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2">
            <div class="hero-image" data-aos="zoom-in" data-aos-delay="300">
              <div class="image-wrapper">
                <img src="<?php echo e(asset('img/profile/awang.jpg')); ?>" alt="Sarah Mitchell" class="img-fluid">
                <div class="floating-elements">
                  <div class="floating-card design" data-aos="fade-left" data-aos-delay="700">
                    <i class="bi bi-palette"></i>
                    <span>Design</span>
                  </div>
                  <div class="floating-card code" data-aos="fade-right" data-aos-delay="800">
                    <i class="bi bi-code-slash"></i>
                    <span>Code</span>
                  </div>
                  <div class="floating-card creativity" data-aos="fade-up" data-aos-delay="900">
                    <i class="bi bi-lightbulb"></i>
                    <span>Ideas</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Hero Section -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampps\htdocs\Awang\resources\views/index.blade.php ENDPATH**/ ?>