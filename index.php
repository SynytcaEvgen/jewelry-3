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
           
            <div class="post-wrap main-post">
                <div class="img-post-wrap">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/img_post_1.png" alt="img-post_1">
                </div>
                <div class="post-content">
                    <div class="time-wrap"><span class="time-publish">4 August</span>, by Motopress</div>
                    <div class="content-text">
                        <h2>Our Design Process</h2>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium totam doloremque veritatem laudantium, totam
                          rem aperiam, eaque ipsa quae ab illo inventore veritatiset quasi architecto beatae voluptatem accusantium doloremque
                        </p>
                    </div>
                    <button class="read-post">read post</button>
                </div>
            </div>
            <div class="decor-line border_marge"></div>
            <?php $args = array(
               'posts_per_page' => 5,
               'offset' => 1,
	           'orderby' => 'data'
                );
                
                $query = new WP_Query( $args );
                   
                // Цикл
                if ( $query->have_posts() ) {
                	while ( $query->have_posts() ) {
                		$query->the_post();
                		echo '<h5>' . get_the_title() . '</h5>';
                	}
                } else {
                	echo '<h2> Empty post</h2>';
                }
                wp_reset_postdata();?>
			<?php
                if( have_posts() ){
                	while( have_posts() ){
                		the_post();
                        ?>
                          <div class="decration-wrap header-mage">
                          <div class="special-decor-line">
                              <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/spec-decor.png" alt="decoration">
                          </div>
			              </div>
                          <div class="post-wrap">
                              <?php if( catch_that_image() ){ ?>
                            <div class="img-post-wrap">
                                <img src="<?php echo catch_that_image() ?>" title="<?php the_title();?>" alt="<?php the_title();?>">
                            </div>
                            <?php
                              } else{

                              } ?>
                            <div class="post-content">
                                <div class="time-wrap"><span class="time-publish"> <?php echo get_the_date('j F'); ?> </span>, by <?php the_author(); ?></div>
                                <div class="content-text">
                                    <h2><?php the_title(); ?></h2>
                                    <?php  
                                     add_filter( 'excerpt_length', function(){
                                      	return 35;
                                      } );
                                      add_filter('excerpt_more', function($more) {
                                      	return '...';
                                      });
                                      the_excerpt();
                                    ?>
                                </div>
                                <a href="<?php the_permalink(); ?>"><button class="read-post">read post</button></a>
                            </div>
                          </div>
                          <div class="decor-line border_marge"></div>
                		
                
                		<?php
                	}
                	?>

                
                	<?php
                }
                else {
                	echo "<h2>Empty post</h2>";
                }
			     ?>  
                <div class="pagination-wrap">
                    <ul class="pagination-item">
                        <li class="pagination-items">1</li>
                        <li class="pagination-items">2</li>
                        <li class="pagination-items">3</li>
                        <li class="pagination-items">4</li>
                    </ul>
                </div>
            </div>
         </div>
        </div>
        <!--Content end section-->

		

	</main><!-- #main -->

<?php
get_footer();
