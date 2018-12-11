<?php $imagePath = '//res.cloudinary.com/jamie-scott-co-uk'; ?>

<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>jamie-scott.co.uk</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="manifest" href="site.webmanifest">
  
  <?php // Favicons and App images ?>
  <link rel="apple-touch-icon" sizes="57x57" href="//res.cloudinary.com/jamie-scott-co-uk/c_scale,h_57,w_57/icons/favicons/icon-master.png">
  <link rel="apple-touch-icon" href="//res.cloudinary.com/jamie-scott-co-uk/c_scale,h_120,w_120/icons/favicons/icon-master.png">  
  <link rel="apple-touch-icon" sizes="180x180" href="//res.cloudinary.com/jamie-scott-co-uk/c_scale,h_180,w_180/icons/favicons/icon-master.png">  
  <link rel="apple-touch-icon" sizes="152x152" href="//res.cloudinary.com/jamie-scott-co-uk/c_scale,h_152,w_152/icons/favicons/icon-master.png">  
  <link rel="apple-touch-icon" sizes="167x167" href="//res.cloudinary.com/jamie-scott-co-uk/c_scale,h_167,w_167/icons/favicons/icon-master.png"> 
  <link rel="icon" type="image/png" sizes="16x16" href="//res.cloudinary.com/jamie-scott-co-uk/c_scale,h_16,w_16/icons/favicons/icon-master.png">
  <link rel="icon" type="image/png" sizes="32x32" href="//res.cloudinary.com/jamie-scott-co-uk/c_scale,h_32,w_32/icons/favicons/icon-master.png">
  <link rel="icon" type="image/png" sizes="96x96" href="//res.cloudinary.com/jamie-scott-co-uk/c_scale,h_96,w_96/icons/favicons/icon-master.png">

  <link href="//fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/main.css">
</head>

<body class="landscape">

  <!--[if lte IE 9]>
  <div id="tophat">
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="//browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  </div>
  <![endif]-->

  <header role="banner">
    <h2 id="header-navigation">Main site navigation</h2>
    <nav aria-labelledby="header-navigation" class="navigation-inline">
        <ul>
          <li><a href="#" aria-current="page">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Resumé</a></li>
          <li><a href="#">Portfolio</a></li>
          <li><a href="#">Testimonials</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
    </nav>
  </header>
  
  <!-- //res.cloudinary.com/jamie-scott-co-uk/video/upload/v1433454936/videos/storm-light.mp4 -->
  
  <main role="main">
    <section id="about">
    </section>

    <section id="resume"></section>

    <section id="portfolio"></section>

    <section id="testimonials"></section>

    <section id="contact"></section>
  </main>

  <footer class="page-footer">
    <ul>
      <li>Twitter</li>
      <li>LinkedIn</li>
      <li>Instagram</li>
      <li>Bitbucket</li>
      <li>Codepen</li>
      <li>Docker</li>
    </ul>

    <div class="footer-copyright">
      <p>
        <small>&copy; Jamie Scott <?php echo Date('Y'); ?> </small>
      </p>
    </div>

  </footer>

  <!-- <video playsinline autoplay muted loop poster="https://res.cloudinary.com/jamie-scott-co-uk/video/upload/c_scale,w_1366/videos/Storm_darck_web720p_clipchamp.com.jpg" id="bgvid">
    <source src="https://res.cloudinary.com/jamie-scott-co-uk/video/upload/c_scale,w_1366/videos/Storm_darck_web720p_clipchamp.com.webm" type="video/webm">
    <source src="https://res.cloudinary.com/jamie-scott-co-uk/video/upload/c_scale,w_1366/videos/Storm_darck_web720p_clipchamp.com.mp4" type="video/mp4">
  </video> -->

  <script src="assets/javascript/vendor/modernizr-3.6.0.min.js"></script>
  <script src="//code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script>
    window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')
  </script>
  <script src="dev-assets/javascript/vendor/materialize/bin/materialize.min.js"></script>
  <script src="dev-assets/javascript/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function() {
      ga.q.push(arguments)
    };
    ga.q = [];
    ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto');
    ga('send', 'pageview')
  </script>
  <script src="//www.google-analytics.com/analytics.js" async defer></script>

</body>

</html>