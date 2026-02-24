<?php $__env->startSection('title', 'Contact - Awang Hilmi'); ?>
<?php $__env->startSection('body-class', 'contact-page'); ?>

<?php $__env->startSection('content'); ?>

<!-- Contact Section -->
<section id="contact" class="contact section">
    <div class="container py-5" data-aos="fade-up">

        <!-- Section Title -->
        <div class="section-title text-center mb-5">
            <h2>Contact Me</h2>
            <p>If you want to hire me or collaborate, reach out via email or social media.</p>
        </div>

        <div class="row align-items-center g-5">

            <!-- Left Image -->
            <div class="col-lg-5 text-center text-lg-start">
                <img src="<?php echo e(asset('img/profile/awanghilmi2.png')); ?>"
                     alt="Awang Hilmi"
                     class="img-fluid rounded shadow-sm">
            </div>

            <!-- Right Info -->
            <div class="col-lg-7">

                <div class="row g-4">

                    <!-- Email Card -->
                    <div class="col-12 col-md-6">
                        <div class="info-item p-4 text-center shadow-sm rounded hover-card h-100 d-flex flex-column justify-content-center">
                            <i class="bi bi-envelope display-4 mb-3"></i>
                            <h4>Email</h4>
                            <p><a href="mailto:awanghilmi05@gmail.com">awanghilmi05@gmail.com</a></p>
                        </div>
                    </div>
                    <!-- Telegram Card -->
                     <div class="col-12 col-md-6">
                        <div class="info-item p-4 text-center shadow-sm rounded hover-card h-100 d-flex flex-column justify-content-center">
                            <i class="bi bi-telegram display-4 mb-3"></i>
                            <h4>Telegram</h4>
                            <p><a href="https://t.me/hilmi_emy" target="_blank">Chat On Telegram</a></p>
                        </div>
                    </div>

                    <!-- GitHub Card -->
                    <div class="col-12 col-md-6">
                        <div class="info-item p-4 text-center shadow-sm rounded hover-card h-100 d-flex flex-column justify-content-center">
                            <i class="bi bi-github display-4 mb-3"></i>
                            <h4>GitHub</h4>
                            <p><a href="https://github.com/awangemy" target="_blank">github.com/awangmemy</a></p>
                        </div>
                    </div>

<!-- WhatsApp Card -->
<div class="col-12 col-md-6">
    <div class="info-item p-4 text-center shadow-sm rounded hover-card h-100 d-flex flex-column justify-content-center">
        <i class="bi bi-whatsapp display-4 mb-3"></i>
        <h4>WhatsApp</h4>
        <p><a href="https://wa.me/60189751748" target="_blank">+60 18-975 1748</a></p>
    </div>
</div>
                </div>
            </div>

        </div>

    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampps\htdocs\Awang\resources\views/contact.blade.php ENDPATH**/ ?>