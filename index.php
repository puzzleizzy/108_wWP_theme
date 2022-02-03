<!--  header template -->
<?php get_header(); ?>

<!-- <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="./CSS/master.css">
    <meta charset="utf-8">
    <title> My Personal Corner</title>
  </head>
  <body> -->
    <header>

      <div class="header_left">
        <h1>Nailed It!</h1>
      </div>
      <div class="header_right">
        <p>Someone to look foward too!</p>
        <p>Central Orlando, Florida</p>
        <p>Isabella.Odak@gmail.com</p>
      </div>

      <main class="meadow">

      <section>
<img width="50%" src="<?php echo get_template_directory_uri();?>/assets/background/flower.jpg" alt=""> 
      <!-- <div class="talent">

        <nav class="navbar">

          <div>
            <ul>

              <li ><a> Photography </a></li>
              <li ><a> Illustration </a></li>
              <li ><a> About </a></li>
              <li ><a> Home </a></li>
            </ul>
          </div> -->
          <?php
          $args = array(
            'theme_location' => 'primary'
          );
          wp_nav_menu($args);

           ?>
        </nav>



    <!-- </div>

      <div class="nav">

      <ul class="navbar1">
        <li><a href="./index-photo.html">Photography</a></li>
        <li><a href="./index-illustration.html">Illustration</a></li>
        <li><a href="./index-about.html">About</a></li>
        <li><a href="#">Home</a></li>

      </ul>
    </div> -->
      </header>

      </section>


<!-- footer template -->

<?php get_footer(); ?>
