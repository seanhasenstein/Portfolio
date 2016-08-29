<?php get_header(); ?>
  
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <img class="profile" src="<?php bloginfo('template_directory'); ?>/images/sean.jpg" alt="Sean Hasenstein">
        <h1>Sean Hasenstein</h1>
        <!-- <h3>Sheboygan, Wisconsin</h3> -->
        <h2>
          Digital Designer<span></span>
          <i class="fa fa-circle" aria-hidden="true"></i>
          Front End Developer<span></span>
          <i class="fa fa-circle" aria-hidden="true"></i>
          Content Strategist
        </h2>
        <div class="buttons text-center">
          <a class="btn-blue" href="http://www.seanhasenstein.com/contact"><i class="fa fa-envelope" aria-hidden="true"></i>Hire Me</a>
          <a class="btn-grey" href="http://www.seanhasenstein.com/wp-content/uploads/2016/08/resume-sean-hasenstein.pdf" target="_blank"><i class="fa fa-file-text" aria-hidden="true"></i>See My Resume</a>
        </div>

        <div class="work">
			
        <?php 
         $labels = new WP_Query(array(
          'posts_per_page' => 1000
          )); 
         while ( $labels->have_posts() ) : 
         $labels->the_post();
        ?>

      <a href="#myModal-<? the_ID(); ?>" data-toggle="modal" class="post-thumb">
        <?php the_post_thumbnail('large'); ?>
        <span>
          <h3><?php if (strlen($post->post_title) > 22) {
          echo substr(the_title($before = '', $after = '', FALSE), 0, 22) . '...'; } else {
          the_title();
          } ?></h3>
          <?php echo custom_field_excerpt(); ?>
          <p class="timestamp"><?php the_time('F j, Y'); ?></p>
        </span>
      </a>

      <div id="myModal-<? the_ID(); ?>" class="modal fade" data-keyboard="true" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal"  aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="modal-body">
              <div class="row">
                <img class="profile" src="<?php bloginfo('template_directory'); ?>/images/sean.jpg">
                <h4><?php the_title(); ?></h4>
                <p class="date">Created by Sean on <?php the_time('F j, Y'); ?></p>
                <div class="left-side">
                  <div class="snapshot_img">
                    <img src="<?php the_field('post_img'); ?>" alt="" />
                  </div>
                </div>
                <div class="right-side">
                  <h4>Details</h4>
                  <?php the_field('wysiwyg'); ?>
                  <h4>Colors</h4>
                  <ul class="color-scheme">
                    <?php

                    $color_1 = get_field( 'color_1' );

                    ?>
                    <li class="color_1" data-toggle="tooltip" title="<?=$color_1?>" style="background-color: <?=$color_1?>;"></li>
                    <!-- Generated markup by the plugin -->
                    <div class="tooltip bottom" role="tooltip">
                      <div class="tooltip-arrow"></div>
                      <div class="tooltip-inner">
                        <?php the_field('color_1'); ?>
                      </div>
                    </div>

                    <?php

                    $color_2 = get_field( 'color_2' );

                    ?>
                    <li class="color_2" title="<?=$color_2?>" style="background-color: <?=$color_2?>;"></li>
                    <!-- Generated markup by the plugin -->
                    <div class="tooltip bottom" role="tooltip">
                      <div class="tooltip-arrow"></div>
                      <div class="tooltip-inner">
                        <?php the_field('color_2'); ?>
                      </div>
                    </div>

                    <?php

                    $color_3 = get_field( 'color_3' );

                    ?>
                    <li class="color_3" title="<?=$color_3?>" style="background-color: <?=$color_3?>;"></li>
                    <!-- Generated markup by the plugin -->
                    <div class="tooltip bottom" role="tooltip">
                      <div class="tooltip-arrow"></div>
                      <div class="tooltip-inner">
                        <?php the_field('color_3'); ?>
                      </div>
                    </div>

                    <?php

                    $color_4 = get_field( 'color_4' );

                    ?>
                    <li class="color_4" title="<?=$color_4?>" style="background-color: <?=$color_4?>;"></li>
                    <!-- Generated markup by the plugin -->
                    <div class="tooltip bottom" role="tooltip">
                      <div class="tooltip-arrow"></div>
                      <div class="tooltip-inner">
                        <?php the_field('color_4'); ?>
                      </div>
                    </div>

                  </ul>
                  <!-- <h4>Full Image</h4> -->
                  <!-- <p><a href="<?php the_field('post_img'); ?>" target="_blank">See Full Image</a></p> -->
                  <h4>Link</h4>
                  <p><?php the_field('source_link'); ?></p>
                  <h4>Tags</h4>
                  <p class="tags">
                    <?php
                    echo get_the_tag_list('','','');
                    ?>
                  </p>
                </div>
               </div>

              <?php $next_post = get_adjacent_post(false,'',false);?>
              <?php $previous_post = get_adjacent_post(false,'',true);?> 

              <?php if($next_post->ID != ''): ?>
                  <a class="previous-link" data-toggle="modal" data-target="#myModal-<?php echo $next_post->ID; ?>">
                      <!-- <button type="button" class="btn btn-default m-t-30">Previous</button> -->
                      <i class="fa fa-angle-left" aria-hidden="true"></i>
                  </a>
              <?php endif; ?>

              <?php if($previous_post->ID != ''): ?>
                  <a class="next-link" data-toggle="modal" data-target="#myModal-<?php echo $previous_post->ID;  ?>" >
                      <!-- <button type="button" class="btn btn-default m-t-30">Next</button> -->
                      <i class="fa fa-angle-right" aria-hidden="true"></i>
                  </a>
              <?php endif; ?>

            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->

      <?php endwhile; ?>

		</div> <!-- end work section -->

      </div>
    </div>
  </div>

<?php get_footer (); ?>