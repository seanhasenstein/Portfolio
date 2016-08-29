<?php
/*
Template Name: Contact Page
*/
?>

<?php get_header(); ?>

  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <img class="profile" src="<?php bloginfo('template_directory'); ?>/images/sean.jpg" alt="Sean Hasenstein">
        <h3 class="tag-header"><span><a href="http://www.seanhasenstein.com">Sean Hasenstein</a>&nbsp;&nbsp;/&nbsp;&nbsp;Contact</h3>

        <div class="work contact-section">
          
          <?php gravity_form(1, false, false, false, '', true, 12); ?>

        </div><!-- end work section -->
    
    </div>
  </div>
</div>

<?php get_footer (); ?>