<?php 
/*
Template Name: Our Work
*/
?>
<?php get_header(); ?>
<section class="case_study_archive">
    <div class="left_triangular"></div>
    <div class="right_triangular"></div>
    <h1 class="page_title"><?php the_title(); ?></h1>
    <?php 
    if(have_rows('posts')):
        while(have_rows('posts')): the_row();
        $post_1 = get_sub_field('post_1');
        $post_2 = get_sub_field('post_2');
        $post_3 = get_sub_field('post_3');
        $post_4 = get_sub_field('post_4');
        $post_5 = get_sub_field('post_5');
        $post_6 = get_sub_field('post_6');
        $post_7 = get_sub_field('post_7');
        $post_8 = get_sub_field('post_8');
        $post_9 = get_sub_field('post_9');
        $post_10 = get_sub_field('post_10');
    ?>
    <div class="first_grid row cards_wrapper">
        <div class="col-lg-6 col-12 cards_col">
            <div class="row">
                <?php 
                    if($post_1): 
                        $post = $post_1;
                        setup_postdata($post);
                ?>
                    <div class="col-md-6 card <?php echo the_field('triangular_and_line_color'); ?>">
                        <div class="card__background"><img src="<?php echo get_the_post_thumbnail_url() ?>"></div>
                        <div class="card__content">
                            <div class="card__title"><?php the_title(); ?></div>
                            <div class="card__subtitle"><?php echo the_field('subtitle'); ?></div>
                        </div>
                    <div class="left_triangular"></div>
                    </div>
                <?php 
                    endif;
                ?>
                <?php 
                    if($post_2): 
                        $post = $post_2;
                        setup_postdata($post);
                ?>
                <div class="col-md-6 card <?php echo the_field('triangular_and_line_color'); ?>">
                    <div class="card__background"><img src="<?php echo get_the_post_thumbnail_url() ?>"></div>
                    <div class="card__content">
                        <div class="card__title"><?php the_title(); ?></div>
                            <div class="card__subtitle"><?php echo the_field('subtitle'); ?></div>
                    </div>
                    <div class="left_triangular"></div>
                </div>
                <?php 
                    endif;
                ?>
            </div>
        </div>
        <div class="col-lg-6 col-12 cards_col">
            <div class="row">
                <?php 
                    if($post_3): 
                        $post = $post_3;
                        setup_postdata($post);
                ?>
                <div class="col-md-6 card <?php echo the_field('triangular_and_line_color'); ?>">
                    <div class="card__background"><img src="<?php echo get_the_post_thumbnail_url() ?>"></div>
                    <div class="card__content">
                        <div class="card__title"><?php the_title(); ?></div>
                            <div class="card__subtitle"><?php echo the_field('subtitle'); ?></div>
                    </div>
                    <div class="left_triangular"></div>
                </div>
                <?php 
                    endif;
                ?>
                <?php 
                    if($post_4): 
                        $post = $post_4;
                        setup_postdata($post);
                ?>
                <div class="col-12 card <?php echo the_field('triangular_and_line_color'); ?>">
                    <div class="card__background"><img src="<?php echo get_the_post_thumbnail_url() ?>"></div>
                    <div class="card__content">
                        <div class="card__title"><?php the_title(); ?>E</div>
                            <div class="card__subtitle"><?php echo the_field('subtitle'); ?></div>
                    </div>
                    <div class="left_triangular"></div>
                </div>
                <?php 
                    endif;
                ?>
            </div>
        </div>
    </div>
    <div class="second_grid row cards_wrapper">
        <div class="col-lg-6 col-12 cards_col">
            <div class="row">
                <?php 
                    if($post_5): 
                        $post = $post_5;
                        setup_postdata($post);
                ?>
                <div class="col-12 card <?php echo the_field('triangular_and_line_color'); ?>">
                    <div class="card__background"><img src="<?php echo get_the_post_thumbnail_url() ?>"></div>
                    <div class="card__content">
                        <div class="card__title"><?php the_title(); ?></div>
                            <div class="card__subtitle"><?php echo the_field('subtitle'); ?></div>
                    </div>
                    <div class="left_triangular"></div>
                </div>
                <?php 
                    endif;
                ?>
            </div>
        </div>
        <div class="col-lg-6 col-12 cards_col">
            <div class="row">
                <?php 
                    if($post_6): 
                        $post = $post_6;
                        setup_postdata($post);
                ?>
                <div class="col-md-6 card <?php echo the_field('triangular_and_line_color'); ?>">
                    <div class="card__background"><img src="<?php echo get_the_post_thumbnail_url() ?>"></div>
                    <div class="card__content">
                        <div class="card__title"><?php the_title(); ?></div>
                            <div class="card__subtitle"><?php echo the_field('subtitle'); ?></div>
                    </div>
                    <div class="left_triangular"></div>
                </div>
                <?php 
                    endif;
                ?>
                <?php 
                    if($post_7): 
                        $post = $post_7;
                        setup_postdata($post);
                ?>
                <div class="col-md-6 card <?php echo the_field('triangular_and_line_color'); ?>">
                    <div class="card__background"><img src="<?php echo get_the_post_thumbnail_url() ?>"></div>
                    <div class="card__content">
                        <div class="card__title"><?php the_title(); ?></div>
                            <div class="card__subtitle"><?php echo the_field('subtitle'); ?></div>
                    </div>
                    <div class="left_triangular"></div>
                </div>
                <?php 
                    endif;
                ?>
            </div>
        </div>
    </div>
    <div class="third_grid row cards_wrapper">
        <div class="col-12 cards_col">
            <div class="row">
                <?php 
                    if($post_8): 
                        $post = $post_8;
                        setup_postdata($post);
                ?>
                <div class="col-lg-6 col-12 card <?php echo the_field('triangular_and_line_color'); ?>">
                    <div class="card__background"><img src="<?php echo get_the_post_thumbnail_url() ?>"></div>
                    <div class="card__content">
                        <div class="card__title"><?php the_title(); ?></div>
                            <div class="card__subtitle"><?php echo the_field('subtitle'); ?></div>
                    </div>
                    <div class="left_triangular"></div>
                </div>
                <?php 
                    endif;
                ?>
            </div>
        </div>
        <div class="col-12 cards_col">
            <div class="row">
                <?php 
                    if($post_9): 
                        $post = $post_9;
                        setup_postdata($post);
                ?>
                <div class="col-lg-6 col-12 card <?php echo the_field('triangular_and_line_color'); ?>">
                    <div class="card__background"><img src="<?php echo get_the_post_thumbnail_url() ?>"></div>
                    <div class="card__content">
                        <div class="card__title"><?php the_title(); ?></div>
                            <div class="card__subtitle"><?php echo the_field('subtitle'); ?></div>
                    </div>
                    <div class="left_triangular"></div>
                </div>
                <?php 
                    endif;
                ?>
                <?php 
                    if($post_10): 
                        $post = $post_10;
                        setup_postdata($post);
                ?>
                <div class="col-lg-6 col-12 card <?php echo the_field('triangular_and_line_color'); ?>">
                    <div class="card__background"><img src="<?php echo get_the_post_thumbnail_url() ?>"></div>
                    <div class="card__content">
                        <div class="card__title"><?php the_title(); ?></div>
                            <div class="card__subtitle"><?php echo the_field('subtitle'); ?></div>
                    </div>
                    <div class="left_triangular"></div>
                </div>
                <?php 
                    endif;
                ?>
            </div>
        </div>
    </div>
    <?php 
        endwhile;
    endif; 
    ?>
    <div class="bottom_right_triangular"></div>
</section>
<?php get_footer(); ?>