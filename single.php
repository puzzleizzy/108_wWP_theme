<!--  trying to bav to the cntent of a single post/individual pages -->


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

<div class="talent">
<!-- <h2>Someone with many talents</h2> -->
</div>

</section>

<!-- section -->
<h1 id="form_title">Imagination</h1>
<fieldset>
  <legend>Contact Information</legend>

  <form>
    <input type="text" name="name"/>
    <label for=" name">Name</label>
  <br/>
  <input type="text" name=" buisness"/>
  <label for="buisness"> Email </label>
  <br/>
  <input type="text" name=" number"/>
  <label for="number"> Phone Number</label>

</br></fieldset></br>

<label for="pets" id="communicate">How would you like to communicate?</label>

<br/>
<input type="radio" name="pet" value=" person"/> In person
<input type="radio" name="pets" value=" vitually"/>  Vitually
<input type="radio" name="pets" value="email"> Email

<br/> <br/>
<label for="rooms" id="assist">what can I assist you with?</label>
<br/>
<!--NAVBAR -->

<input type="checkbox" name="season" value="logo"/> Logo/Animation
<input type="checkbox" name="rooms" value="photo"/> Photoshop
<input type="checkbox" name="rooms" value="illu"/>Illustration
<input type="checkbox" name="rooms" value="wire"/>Wire framing
<input type="checkbox" name="rooms" value="photo"/> Photography
<br/> <br/>
<label for="realm" id="date"> Let's make it a date!</label>
<input type="date" name="time"/>
<br/> <br/>

</select>

<br/> <br/>
<label for="weapon" id="infom"> Addictional information:</label>
<textarea name = "weapon" rows= "3" cols="30"> Details.. </textarea>
<br/> <br/>
<input type="submit" name="reset"/>
<input type="reset" name="reset"/>


  </form>

</main>


<!-- <footer>
    <div class="footer_left">

    <p>&copy; 2021 FIRST Institute</p>
    <button id="contact" type="button" name="contact"><a href="./index-contact.html">Contact</a></button>
    </div>

    <div class="footer_right">
      <h5 class="footer_title">Thanks for staying!</h5>
      <div class="footer_p">
    <p>I hope you enjoyed your viewing of my talents and my passion. Went to a great institute for my instructors to lead me the way to success; they have advanced and expanded my knowledge towards my career path. From Photography, Illustrator, XD wire framing, coding with ATOM and other sources to focus on. Please contact if you have a project you have in mind or someone you want to join your team!
    Have a good day! </p>

    </div>

  <div class="footer_left">
  <p>&copy; 2021 FIRST Institute</p>
  </div>
  <div class="footer_right">
    <h5>thanks for staying</h5>
  <p>description of the course and knowledge.</p>

  </div>
</footer> -->

<?php

$args + array(
'category_name' => 'about-me'
);

$aboutpost = new WP_Query($args);


if($aboutpost->have_posts()){
  while($aboutpost->have_post()){
    $aboutpost->the_post();

?>











<!-- footer template -->

<?php get_footer(); ?>
