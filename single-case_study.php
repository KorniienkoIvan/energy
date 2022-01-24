<?php get_header(); ?>
<?php 
/*
Template Name: Single page
*/
?>
<?php get_header(); 
	$featured_image_url = get_the_post_thumbnail_url();
	if (empty($featured_image_url)) : $featured_image_url = get_template_directory_uri() . '/assets/images/Dettol_TFL06.jpg'; endif;
	

?>
<section class="single-page__wrapper">
    <div class="single-page__lines2"></div>
    <div class="left_side_background">
        <div class="single-page__lines1"></div>
    </div>
    <div class="right_side_image"><img src="<?php echo $featured_image_url;?>" alt=""></div>

    <div class="container">
        <div class="single-page__content">
            <?php 
                $header_logo = get_field('single_header_logo');
                $header_title = get_field('single_header_title');
                $header_content = get_field('single_header_content');
            ?>
            <?php if($header_logo): ?><div class="single-page__logoWrapper appear fade-right"><div class="single-page__logo"><img src="<?php echo $header_logo; ?>" alt=""></div></div><?php endif; ?>
            <?php if($header_title): ?><h2 class="single-page__title appear fade-right delay-1"><?php echo $header_title; ?></h2><?php endif; ?>
            <?php if($header_content): ?><h3 class="single-page__subtitle appear fade-right delay-2"><?php echo $header_content; ?></h3><?php endif; ?>
            <div class="separator"></div>
            <?php 
                $challenge_title = get_field('challenge_title');
                $challenge_left_column = get_field('challenge_left_column');
                $challenge_right_column = get_field('challenge_right_column');
            ?>
            <div class="single-page__additional-text">
                <?php if($challenge_title): ?><h3 class="title appear fade-bottom"><?php echo $challenge_title; ?></h3><?php endif; ?>
                <?php if($challenge_left_column || $challenge_right_column): ?>
                    <div class="text content-block">
                        <div class="left-col appear fade-right delay-1"><?php echo $challenge_left_column; ?></div>
                        <div class="right-col appear fade-left delay-1"><?php echo $challenge_right_column; ?></div>
                    </div>
                <?php endif; ?>
            </div>
            <?php $gallery = get_field('post_gallery'); ?>
            <?php if($gallery): ?>
                <div class="single-page__slider appear fade-bottom">
                    <?php $i = 0; ?>
                    <?php foreach($gallery as $gallery_item): ?>
                        <img src="<?php echo $gallery_item['url']; ?>" class="" alt="">
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            <?php 
                $results_title = get_field('results_title');
                $results_left_column = get_field('results_left_column');
                $results_right_column = get_field('results_right_column');
            ?>
            <div class="single-page__additional-text">
                <?php if($results_title): ?><h3 class="title appear fade-bottom"><?php echo $results_title; ?></h3><?php endif; ?>
                <?php if($results_left_column || $results_right_column): ?>
                    <div class="text">
                        <div class="left-col appear fade-right delay-1"><?php echo $results_left_column; ?></div>
                        <div class="right-col appear fade-left delay-1"><?php echo $results_right_column; ?></div>
                    </div>
                <?php endif; ?>
            </div>
            <?php $full_width_image = get_field('full_width_image'); ?>
            <?php if($full_width_image): ?>
                <div class="single-page__image appear fade-bottom">
                    <img src="<?php echo $full_width_image; ?>" alt="">
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php $testimonials = get_field('testimonials'); ?>
<?php if($testimonials): ?>
    <section class="testimonial">
        <div class="testimonial__slider">
            <?php foreach($testimonials as $testimonial): ?>
                <?php 
                    $title = $testimonial->post_title;
                    $content = $testimonial->post_content;    
                ?>
                <div class="testimonial__content">
                    <h3 class="testimonial__text">
                        <?php echo $content; ?>
                    </h3>
                    <h3 class="testimonial__author">
                        <?php echo $title; ?>
                    </h3>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
<?php endif; ?>
<?php get_footer(); ?>
