<?php
    // Add this to all your php files for added security

    if (!defined('ABSPATH'))
        exit; 
        // Exit if accessed directly. 
        // Ex: Not being called up directly by index.php or some other theme PHP file
    ?>


    <?php wp_head(); ?>
    <?php // this function loads the header.php file ?>

    <h1><?php the_title(); ?></h1>
  
  <!-- opening flex-container will go here -->

  <div class="flex-container">
  
  <main id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <?php 
          if ( have_posts() ) : 
          while ( have_posts() ) : the_post();
              the_content();
          endwhile;
      else :
          _e( 'Sorry, no posts matched your criteria.', 'jennifer-mastromonaco' );
      endif;
      ?>
  </main>
  
  </div>

  <!-- closing flex-container will go here -->

  <?php wp_footer(); ?>
  <?php // this function loads the footer.php file ?>

  <!-- START STEP 2.8 ADD H1 AND WORDPRESS LOOP -->
  <h1><?php the_title(); // AUTOMATICALLY ADDS THE PAGE TITLE ?></h1>
  
  <!-- opening flex-container will go here -->
  
  <main id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php // NOTE IDs AND CLASSES ARE AUTOMATICALLY ADDED HERE ?>


  <!-- START WORDPRESS LOOP -->

      <?php 
          if ( have_posts() ) : 
          while ( have_posts() ) : the_post();
              the_content();
          endwhile;
      else :
          _e( 'Sorry, no posts matched your criteria.', 'billy-poppins' );
          // MAKE SURE TO CHANGE BILLY-POPPINS HERE
      endif;
      ?>

      <?php wp_link_pages(); ?>

  <!-- END WORDPRESS LOOP -->    
  </main>

   <!-- END STEP 2.8 ADD H1 AND WORDPRESS LOOP -->
  <!-- closing flex-container will go here -->