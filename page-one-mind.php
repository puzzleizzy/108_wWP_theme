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
<body>
  <main class="palmer">






    <section class="out">
      <section>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
<div class="carousel-inner">
  <div class="carousel-item active">
<div class="me1">
    <img src="./assets/photo/profile.jpg"   class="d-block w-100" alt="...">
</div>
  </div>
  <div class="carousel-item">
    <div class="me2">
    <img src="./assets/photo/excited.jpg" class="d-block w-100 excited" alt="...">
  </div>

    </div>

  <div class="carousel-item">
    <div class="me3">
    <img src="./assets/photo/beach.jpg" class="d-block w-100" alt="...">
  </div>

  </div>
</div>
<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="visually-hidden">Next</span>
</button>
</div>
      </section>
      <div class="header">
      <h1>Isabella Odak</h1>
      </div>

        <div class="body">
        </div>
      <p class="words">A little something about myself- is that I ADORE long walks on the beach with a warm coffee in my hand. There is not much that can stop myself from going far in life with the knowledge and great people skills . All that is presented on this site is my own work and what I have accomplished so far. Along aside of operating: WINDOWS & GOOGLE platforms, After Effects (animation/logo), and a multitasker. Pretty wild imagination and would love too meet and work with you.
        <br></br>
        <div class="container2">


      <div class="like">
          <i onclick="myFunction(this)" class="fa fa-thumbs-up"></i>Like
    </div>
    <div class="dislike">
      <i onclick="myFunction(this)" class="fa fa-thumbs-up"></i>Dislike
    </div>
  </div>
</p>
    </section>


    <section>







<?php get_footer(); ?>
