

	 <!--Footer start section-->
    <footer class="header_wrapper">
    <div class="decor-line content-head-width"></div>
    <div class="header-content content-head-width">
        <div class="logo">
            <?php if( is_front_page() ){ ?>
                <a>
                   <span class="logo_first">D</span>
                   <span class="logo_second">J</span>
                </a> 
              <?php 
              }
              else { ?>
              	 <a href="<?php echo home_url();?>">
                   <span class="logo_first">D</span>
                   <span class="logo_second">J</span>
                 </a> 
            <?php  } ?>
        </div>
        <div class="social-wrapper">
            <ul class="header-socila">
                <li class="nav-items"><a href="https://www.instagram.com/">instagram</a></li>
                <li class="nav-items"><a href="https://www.facebook.com/">facebook</a></li>
                <li class="nav-items"><a href="https://www.pinterest.com/">pinterest</a></li>
            </ul>
        </div>

    </footer>
    <!--Footer end section-->

<?php wp_footer(); ?>

</body>
</html>
