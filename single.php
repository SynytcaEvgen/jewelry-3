<?php get_header();?>

	<main id="primary" class="site-main">
      <!--Content start section-->
           <div class="content">
               <div class="content-wrapper content-width">
                   <div class="decration-wrap header-mage">
                       <div class="special-decor-line">
                           <img src="/assets/images/spec-decor.png" alt="decoration">
                       </div>
                   </div>
                   <div class="post-wrap read-post">
                       <h1>Small Business Saturday: Gifts Of Grace Design</h1>
                       <div class="img-post-wrap">
                           <img src="/assets/images/img_post_2.png" alt="img-post_2">
                       </div>
                       <div class="post-content">
                           <div class="time-wrap"><span class="time-poblish">4 August</span>, by Motopress</div>
                           <div class="content-text">
                               <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque veritatem laudantium, totam rem
                                   aperiam, eaque ipsa quae ab illo inventore veritatiset quasi architecto beatae voluptatem accusantium doloremque
                                   laudantium, totam rem aperiam, mued ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                   doloremque veritatem laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatiset quasi architecto beatae
                                   voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae. Sed ut perspiciatis unde omnis
                                   iste natus error sit voluptatem accusantium doloremque veritatem laudantium, totam rem aperiam, eaque ipsa quae ab illo
                                   inventore veritatiset quasi architecto beatae voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque
                                   ipsa quae.
                               </p>
                               <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque veritatem laudantium, totam rem
                                  aperiam, eaque ipsa quae ab illo inventore veritatiset quasi architecto beatae voluptatem accusantium doloremque
                                  laudantium, totam rem aperiam.
                               </p>
                           </div>
                       </div>
                   </div>
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
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'jewelry-3' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'jewelry-3' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php get_footer();



