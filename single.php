<?php get_header();?>

	<main id="primary" class="site-main">
      <!--Content start section-->
           <div class="content">
               <div class="content-wrapper content-width">
                   <div class="decration-wrap header-mage">
                       <div class="special-decor-line">
                           <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/spec-decor.png" alt="decoration">
                       </div>
                   </div>
                   <?php if( have_posts() ){
                	  while( have_posts() ){ the_post();?>
                   
                    <div class="post-wrap read-post">
                        <h1><?php the_title();?></h1>
                        <div class="img-post-wrap">
                            <img src="<?php echo catch_that_image() ?>" title="<?php the_title();?>" alt="<?php the_title();?>">
                        </div>
                        <div class="post-content">
                            <div class="time-wrap"><span class="time-poblish"><?php echo get_the_date('j F'); ?></span>, by <?php the_author(); ?></div>
                            <div class="content-text">
                                <?php add_filter('the_content','htm_image_content_filter',11); 
                                    the_content();
                                ?>
                            </div>
                        </div>
                    </div>
                   <?php }} else {?>
                   <?php } ?>
                    
                   <div class="decor-line border_marge"></div>
                       <div class="post-mover-wrap">
                           <div class="post-mover">
                               <div class="left-move">
                                   <div class="preview-button"></div>
                                   <div class="discr-preview">
                                       <span>Preview Post</span>
                                       <h5 class="previw-post">Small Business Saturday: honey&gazelle</h5>
                                   </div>
                               </div>
                               <div class="right-move">
                                   
                                   <div class="discr-next">
                                       <span>Next Post</span>
                                       <h5 class="next-post">By Invite Only x Green Banana: A Botany Project</h5>
                                   </div>
                                   <div class="next-button"></div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           <!--Content end section-->
		

	</main><!-- #main -->

<?php get_footer();



