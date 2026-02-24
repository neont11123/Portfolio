@extends('layouts.app')
@section('title', 'Skills - Awang Hilmi')
@section('body-class', 'skills-page')

@section('content')

<!-- Skills Section -->
<section id="skills" class="services section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Skills</h2>
    <p>
      My technical skills include web, mobile, IoT development, backend integration,
      and graphic design using modern technologies and tools.
    </p>
  </div>

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row justify-content-center g-5">

      <!-- Web Development -->
      <div class="col-md-6">
        <div class="service-item">
          <div class="service-icon">
            <i class="bi bi-code-slash"></i>
          </div>
          <div class="service-content">
            <h3>Web Development</h3>
            <p>
              Laravel, Angular, Ionic, HTML, CSS, JavaScript, and Bootstrap for building
              modern, responsive, and scalable web applications.
            </p>
          </div>
        </div>
      </div>

      <!-- Mobile Development -->
      <div class="col-md-6">
        <div class="service-item">
          <div class="service-icon">
            <i class="bi bi-phone"></i>
          </div>
          <div class="service-content">
            <h3>Mobile Development</h3>
            <p>
              Flutter and Ionic for cross-platform mobile app development integrated
              with Firebase backend services.
            </p>
          </div>
        </div>
      </div>

      <!-- IoT Development -->
      <div class="col-md-6">
        <div class="service-item">
          <div class="service-icon">
            <i class="bi bi-cpu"></i>
          </div>
          <div class="service-content">
            <h3>IoT Development</h3>
            <p>
              Smartwatch integration, sensor monitoring, and real-time IoT data processing systems.
            </p>
          </div>
        </div>
      </div>

      <!-- Firebase Development -->
      <div class="col-md-6">
        <div class="service-item">
          <div class="service-icon">
            <i class="bi bi-fire"></i>
          </div>
          <div class="service-content">
            <h3>Firebase Development</h3>
            <p>
              Firestore, Realtime Database, Cloud Functions, and Push Notification integration.
            </p>
          </div>
        </div>
      </div>

      <!-- API Development -->
      <div class="col-md-6">
        <div class="service-item">
          <div class="service-icon">
            <i class="bi bi-plug"></i>
          </div>
          <div class="service-content">
            <h3>API Development</h3>
            <p>
              REST API development and integration for web and mobile applications.
            </p>
          </div>
        </div>
      </div>

      <!-- Dashboard Development -->
      <div class="col-md-6">
        <div class="service-item">
          <div class="service-icon">
            <i class="bi bi-speedometer2"></i>
          </div>
          <div class="service-content">
            <h3>Dashboard Development</h3>
            <p>
              Interactive dashboards with real-time data display and export features (PDF, PPTX, DOCX).
            </p>
          </div>
        </div>
      </div>

      <!-- Database -->
      <div class="col-md-6">
        <div class="service-item">
          <div class="service-icon">
            <i class="bi bi-database"></i>
          </div>
          <div class="service-content">
            <h3>Database Management</h3>
            <p>
              Firebase, MariaDB, and MySQL database design, management, and integration.
            </p>
          </div>
        </div>
      </div>

      <!-- Programming -->
      <div class="col-md-6">
        <div class="service-item">
          <div class="service-icon">
            <i class="bi bi-file-code"></i>
          </div>
          <div class="service-content">
            <h3>Programming Languages</h3>
            <p>
              Java, Python, TypeScript, and JavaScript for backend and frontend development.
            </p>
          </div>
        </div>
      </div>

      <!-- Version Control -->
      <div class="col-md-6">
        <div class="service-item">
          <div class="service-icon">
            <i class="bi bi-git"></i>
          </div>
          <div class="service-content">
            <h3>Version Control</h3>
            <p>
              Git and GitHub for source code management and collaborative development.
            </p>
          </div>
        </div>
      </div>

      <!-- Deployment -->
      <div class="col-md-6">
        <div class="service-item">
          <div class="service-icon">
            <i class="bi bi-cloud-upload"></i>
          </div>
          <div class="service-content">
            <h3>Deployment</h3>
            <p>
              Application deployment using Render, Railway, and Hostinger.
            </p>
          </div>
        </div>
      </div>

      <!-- Graphic Design -->
      <div class="col-md-6">
        <div class="service-item">
          <div class="service-icon">
            <i class="bi bi-palette"></i>
          </div>
          <div class="service-content">
            <h3>Graphic Design</h3>
            <p>
              Canva and Adobe Photoshop for UI design, posters, and digital assets.
            </p>
          </div>
        </div>
      </div>

    </div>

  </div>

</section>

@endsection
