<?php get_header(); ?>


<!-- navbar -->

<nav class="navbar">
  <!-- <div>
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
<section>
<!-- backimage -->
<main class="triangle">
  <!-- image display -->
  <section class="four">
    <div class="row">
  <div class="column">
    <img src="<?php echo get_template_directory_uri();?>/assets/collage/whale.jpg" alt="Whale" style="width:80%" >
  </div>
  <div class="column">
    <img src="<?php echo get_template_directory_uri();?>/assets/collage/last_dwarfs.jpeg" alt="Last Supper" style="width:60%" >
  </div>
  <div class="column">
    <div class="ghost">
      <img src="<?php echo get_template_directory_uri();?>/assets/collage/ghostbusters1.jpeg" alt="Ghost Busters" style="width:60%" >
    </div>
  </div>
  <div class="column">
    <img src="<?php echo get_template_directory_uri();?>/assets/collage/airbnb.png" alt="Advertisement"style="width:60%" >
  </div>
</div>

<div class="container">

  <img id="expandedImg" style="width:100%">
  <div id="imgtext"></div>
</div>

  <div class="talent">



</section>









<?php get_footer(); ?>
