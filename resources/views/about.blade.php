@extends('layouts.app')

@section('title', 'About - Awang)

@section('body-class', 'about-page')

@section('content')
    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>About</h2>
        <p>I am an IT graduate with experience in developing web, mobile, and IoT applications.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <!-- Intro + Photo -->
        <div class="row align-items-center justify-content-between gy-5 mb-5">
          <div class="col-lg-7" data-aos="fade-right" data-aos-delay="150">
            <div class="intro-content">
              <span class="eyebrow">Hello there</span>
              <h2 class="headline">Hi, I'm Awang Hilmi - an IT graduate specializing in web, mobile, and IoT system development.</h2>
              <p class="lead">
                I have hands-on experience in developing analytics dashboards, report generation systems, and real-time monitoring applications. During my internship, I worked on data analysis projects and refactored system code from Java to Python for sentiment analysis research.
              </p>
              <p>
                I am passionate about building efficient systems and providing technical solutions. My expertise includes system development, database management, troubleshooting, and technical support. I am currently seeking an IT Officer or Software Developer position.
              </p>

              <div class="cta-group">
                <a href="{{ url('/resume') }}" class="btn-ghost">
                  Digital Resume <i class="bi bi-arrow-up-right"></i>
                </a>
                <a href="{{ asset('pdf/DOC-20251102-WA0019. (3).pdf') }}" class="link-underline" download>
                  Download Physical Resume <i class="bi bi-download"></i>
                </a>
              </div>
            </div>
          </div>

          <div class="col-lg-5" data-aos="zoom-in" data-aos-delay="250">
            <figure class="profile-figure text-center text-lg-end">
              <img src="{{ asset('img/profile/awanghilmi.jpg') }}" alt="Portrait of Alex" class="img-fluid profile-photo">
            </figure>
          </div>
        </div>
        <!-- End Intro + Photo -->

        <!-- Skills Grid -->
        <div class="mb-5">
          <div class="row g-4">
            <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="120">
              <div class="skill-item">
                <i class="bi bi-code-slash"></i>
                <h3>System Development</h3>
                <p>Developed web and dashboard systems for analytics, reporting, and information display.</p>
              </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="180">
              <div class="skill-item">
                <i class="bi bi-diagram-3"></i>
                <h3>Database Management</h3>
                <p>Experienced in handling MySQL, postgresql, MariaDB, and Firebase databases.</p>
              </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="240">
              <div class="skill-item">
                <i class="bi bi-phone"></i>
                <h3>Mobile App Development</h3>
                <p>Developed mobile applications including smartwatch and Android apps.</p>
              </div>
            </div>
            <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="300">
              <div class="skill-item">
                <i class="bi bi-gear"></i>
                <h3>IT Support & Troubleshooting</h3>
                <p>Provided technical support and troubleshooting for systems.</p>
              </div>
            </div>
          </div>
        </div>
        <!-- End Skills Grid -->

        <!-- Journey Timeline -->
        <div class="mb-5">
          <div class="row g-4">
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="120">
              <article class="timeline-item">
                <span class="dot"></span>
                <time>2024</time>
                <h4>Freelance Start</h4>
                <p>Freelanced at UniSZA, assisting lecturers with IoT projects and system administration.</p>
              </article>
            </div>
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="180">
              <article class="timeline-item">
                <span class="dot"></span>
                <time>2025</time>
                <h4>Computer Science Graduate</h4>
                <p>Graduated with a Bachelor of Computer Science (Computer Internet) from University Sultan Zainal Abidin.</p>
              </article>
            </div>
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="240">
                <article class="timeline-item">
                <span class="dot"></span>
                <time>2024</time>
                <h4>Internship at Dataspeak Analytica</h4>
                <p>Worked on data analysis and dashboard reporting systems, developed report generator tools, and gained hands-on experience in system development and IT support.</p>
                </article>
            </div>
            <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                <article class="timeline-item">
                <span class="dot"></span>
                <time>2025 - Present</time>
                <h4>IT Assistant - Senai Desaru Express</h4>
                <p>Providing technical support, system maintenance, and troubleshooting for company IT operations, including network management and internal software systems.</p>
                </article>
            </div>
          </div>
        </div>
        <!-- End Journey Timeline -->

        <!-- Quote -->
        <blockquote class="personal-quote text-center mb-5" data-aos="fade-down" data-aos-delay="200">
          <p>"Building clean and meaningful experiences through thoughtful code and quiet design."</p>
        </blockquote>
        <!-- End Quote -->

        <!-- Fun Facts -->
        <div class="row g-3 justify-content-center">
          <div class="col-6 col-md-3 col-lg-2" data-aos="zoom-in" data-aos-delay="120">
            <div class="fact-pill">
              <i class="bi bi-laptop"></i>
              <span>Coding</span>
            </div>
          </div>
          <div class="col-6 col-md-3 col-lg-2" data-aos="zoom-in" data-aos-delay="160">
            <div class="fact-pill">
              <i class="bi bi-lightning"></i>
              <span>Problem Solving</span>
            </div>
          </div>
          <div class="col-6 col-md-3 col-lg-2" data-aos="zoom-in" data-aos-delay="200">
            <div class="fact-pill">
              <i class="bi bi-gear"></i>
              <span>IoT Projects</span>
            </div>
          </div>
          <div class="col-6 col-md-3 col-lg-2" data-aos="zoom-in" data-aos-delay="240">
            <div class="fact-pill">
              <i class="bi bi-brush"></i>
              <span>UI/UX</span>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->
@endsection
