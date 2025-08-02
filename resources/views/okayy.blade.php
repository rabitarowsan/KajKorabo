<!-- CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">
<!-- JS -->
<script src="{{ asset('assets/js/index.js') }}"></script>





<!-- <script src="https://cdn.freecodecamp.org/testable-projects-fcc/v1/bundle.js"></script> -->

<header id="header">
  <!--  Brand Logo  -->
  <a class="nav-brand" href="" target="_blank">
    <img id="header-img" src="{{ asset('uploads\KajKorabo (5).png') }}" alt="Pixel Skincare">
  </a>
  
  <!--  Toggle Menu for Mobile  -->
  
  <input type="checkbox" id="toggle-menu" role="button">
  <label for="toggle-menu" class="toggle-menu">Menu</label>
  
  <!--  Menus  -->
  <nav id="nav-bar" class="navbar">
    <ul class="menu">
      <li><a class="nav-link" href="#featured">New in!</a></li>
      <li><a class="nav-link" href="#collections">Collections</a></li>
      <li><a class="nav-link" href="#about">About</a></li>
      <li><a class="nav-link" href="#contact">Contact</a></li>
    </ul>
    <ul class="social-menu">
      <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
      <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
      <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
      <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
    </ul>
  </nav>
</header>

<!-- Hero Section -->
<div class="hero">
  <div class="hero-img">
    <img src="{{ asset('uploads/Untitled design.gif') }}" alt="Pixel Skincare" style="width:800px; height:auto;">
  </div>
  <div class="hero-text">
    <h1>Your One-Stop Solution</br> for all your technological services</h1>
    <a href="{{ route('services') }}" class="btn">Explore</a>
  </div>
</div>

<!-- Featured Section -->
<section id="featured">
  <div class="title title-left">
    <span class="line"></span><h3>New Service!</h3>
  </div>
  <div class="wrapper">
    <div class="image">
      <img src="{{ asset('uploads\KajKorabo (6).png') }}" alt="Pixel Facial Cream">
    </div>
    <div class="text">
      <h2>Websites based on Laravel Framework</h2>
      <p>Laravel is a powerful PHP framework designed for modern web application development.
It offers elegant syntax, built-in security, and tools that accelerate scalable and maintainable development.</p>
      <a href="{{ route('products') }}" class=btn>Details</a>
    </div>
  </div>
</section>

<!-- Collection Section -->
<section id="collections">
  <div class="title title-right">
    <span class="line line-right"></span><h3>Services we offer</h3>
  </div>
  <div class="wrapper">
    <a class="box box1" href="#">
      <h4>Web Development</h4>
      <div class="box-overlay"></div>
    </a>
    <a class="box box2" href="#">
      <h4>SEO</h4>
      <div class="box-overlay"></div>
    </a>
    <a class="box box3" href="#">
      <h4>VFX</h4>
      <div class="box-overlay"></div>
    </a>
  </div>
</section>

<!-- About Section -->
<section id="about">
  <div class="title title-left">
    <span class="line"></span><h3>PIXEL Skincare</h3>
  </div>
  <div class="wrapper">
    <div class="text">
      <p>Since 2016, Pixel Skin Care has been at the forefront of the move towards organic and natural skincare.</p>
      <p>Specialising in emerging niche natural skin care brands, Pixel Skin Care is a safe zone for you and your skin where we have taken special care to hand pick and offer you some of the purest and safest brands from global organic specialists.</p>
      <p>From cutting edge science to luxurious natural indulgence, we have selected the best products and treatments for healing and improving your well-being.</p>
    </div>
    <div class="video-wrapper">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/otej7WLdPh0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
  </div>
</section>

<!-- Contact Section -->
<section id="contact">
  <div class="wrapper">
    <div class="form-wrapper">    
      <h4>Add More Beauty To Your Email</h4>
      <form id="form" action="https://www.freecodecamp.com/email-submit">
        <input type="email" id="email" name="email" placeholder="Your email" required>
        <input type="submit" id="submit" value="OK" class="submit">
      </form>
    </div>
    <div class="contact-wrapper">
      <h4>Stay In Touch With PIXEL</h4>
      <div class="wrapper">        
        <ul class="social-menu">
          <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
        </ul>
        <a class="contact-footer contact-tel" href="#"><i class="fa fa-phone" aria-hidden="true"></i>001-283-4892</a>
        <a class="contact-footer contact-email" href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i>Send an email</a>
      </div>
    </div>
    <div class="copy-wrapper">
      <h6><i class="fa fa-copyright" aria-hidden="true"></i> Theme, Logo, Product Design by <a href="https://codepen.io/ann_">Ann</a></h6>
    </div>
  </div>
</section>