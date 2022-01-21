<?php get_header(); ?>
<div id="app-wrapper" role="main">
    
    <?php 
    /*==============================================*/ 
    /*===============CHANGABLE PART=================*/ 
    /* Dont forget to change dta-namespace */ 
    ?>   

    <div id="app" class="app-container page-php" data-namespace="page">
        <?php /*=====WRITE YOUR CODE HERE=====*/ ?>
            
			<div id="post-<?php the_ID('default-page'); ?>" <?php post_class(); ?>>
				
                <?php 
                if ( ! post_password_required() ) : ?>

                    <section class="single-page__wrapper">
                        <div class="single-page__lines2"></div>
                        <div class="left_side_background">
                            <div class="single-page__lines1"></div>
                        </div>
                        <div class="right_side_image" style="background-color: #ca3240;clip-path: polygon(0% 0%, 100% 0%, 100% 100%, 100% 100%);"></div>
                    </section>

                    <div class="container">
                      <div class="col-12 col-lg-9 content-block" style="margin-top: 275px;">
                        <?php the_content(); ?>
                      </div>
                    </div>
                    

                <?php else :
                  // we will show password form here
                  echo get_the_password_form();
                endif;
              ?>
			</div>
            
        <?php /*=====END OF YOUR CODE=====*/ ?>
    </div>
    <?php /*==============================================*/ ?>

</div>
<?php get_footer(); ?>