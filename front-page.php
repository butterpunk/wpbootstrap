<?php get_header(); ?>
 
  <h1>HELLO WORLD!</h1>

  <?php
 
 if ( have_posts() ) {
  
     while ( have_posts() ) {
  
        echo '<h1>'.the_post().'</h1>';
  
         // Post data goes here.
  
     }
  
 }
  
 ?>

<?php get_footer(); ?>