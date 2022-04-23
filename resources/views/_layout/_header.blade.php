<!-- ======= Header ======= -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container px-5">
  <div class="container d-flex align-items-center justify-content-between">
  <div class="logo"><a>MySchool</a></div>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item"><a class="nav-link" href="{{ route('home') }}"><i class="uil uil-home"></i>Home</a></li>
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" id="navbarDropdownBlog" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="uil uil-blogger"></i>Profile</a>
                  <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownBlog">
                      <li><a class="dropdown-item" href="{{ route('page', ['slug' => 'Tentang']) }}">About</a></li>
                      <li><a class="dropdown-item" href="{{ route('page', ['slug' => 'sejarah']) }}">History</a></li>
                       <li><a class="dropdown-item" href="{{ route('page', ['slug' => 'visi-misi']) }}">Vision and mission</a></li>
                  </ul>
                </li>
              <li class="nav-item"><a class="nav-link" href="{{ route('guru.index') }}"><i class="uil uil-bag"></i>Teacher</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ route('berita.index') }}"><i class="uil uil-phone"></i>News</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ route('galeri.index') }}"><i class="uil uil-info-circle"></i>Gallery</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ route('kontak.index') }}"><i class="uil uil-info-circle"></i>Contact</a></li>
          </ul>
      </div>
  </div>
</nav>

<link href="http://127.0.0.1:8000/assets/css/style.css" rel="stylesheet">
<section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">sekolahku@gmail.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+62812 3456 7890</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a class="twitter"><i class="bi bi-twitter"></i></a>
        <a class="facebook"><i class="bi bi-facebook"></i></a>
        <a class="instagram"><i class="bi bi-instagram"></i></a>
      </div>
    </div>
  </section>
