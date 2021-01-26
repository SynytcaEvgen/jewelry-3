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
            <div class="decration-wrap header-mage">
                <div class="special-decor-line">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/spec-decor.png" alt="decoration">
                </div>
			</div>
			<?php
                // проверяем есть ли посты в глобальном запросе - переменная $wp_query
                if( have_posts() ){
                	// перебираем все имеющиеся посты и выводим их
                	while( have_posts() ){
                		the_post();
                		?>
                          <div class="post-wrap">
                            <div class="img-post-wrap">
                                <img src="<?php echo catch_that_image() ?>" alt="img-post_2">
                            </div>
                            <div class="post-content">
                                <div class="time-wrap"><span class="time-publish">4 August</span>, by Motopress</div>
                                <div class="content-text">
                                    <h2><?php single_post_title(); ?></h2>
                                    <?php add_filter('the_content','htm_image_content_filter',11); ?>
                                    <?php the_content(); ?>
                                </div>
                                <a href="<?php the_permalink(); ?>"><button class="read-post">read post</button></a>
                            </div>
                          </div>
                		
                
                		<?php
                	}
                	?>
                
                	<div class="navigation">
                		<div class="next-posts"><?php next_posts_link(); ?></div>
                		<div class="prev-posts"><?php previous_posts_link(); ?></div>
                	</div>
                
                	<?php
                }
                // постов нет
                else {
                	echo "<h2>Записей нет.</h2>";
                }
			     ?>
		
				
				
			
            
            <div class="decor-line border_marge"></div>
            <div class="decration-wrap header-mage">
                <div class="special-decor-line">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/spec-decor.png" alt="decoration">
                </div>
            </div>
            <div class="post-wrap">
                <div class="img-post-wrap" hidden>
                    <img src="" alt="img-post_2">
                </div>
                <div class="post-content">
                    <div class="time-wrap"><span class="time-publish">4 August</span>, by Motopress</div>
                    <div class="content-text">
                        <h2>Mother's Day interview II with Marie Soh</h2>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque veritatem
                            laudantium, totam rem
                            aperiam, eaque ipsa quae ab illo inventore veritatiset quasi architecto beatae voluptatem accusantium
                            doloremque
                            laudantium, totam rem aperiam, eaque ipsa quae
                        </p>
                    </div>
                    <button class="read-post">read post</button>
                </div>
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
