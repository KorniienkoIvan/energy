<?php get_header(); ?>
<?php 
/*
Template Name: Single page
*/
?>
<?php get_header(); ?>
<section class="single-page__wrapper">
    <div class="single-page__lines2"></div>
    <div class="left_side_background">
        <div class="single-page__lines1"></div>
    </div>
    <div class="right_side_image"><img src="<?php echo get_template_directory_uri() ?>/assets/images/Dettol_TFL06.jpg" alt=""></div>

    <div class="container">
        <div class="single-page__content">
            <?php 
                $header_logo = get_field('single_header_logo');
                $header_title = get_field('single_header_title');
                $header_content = get_field('single_header_content');
            ?>
            <?php if($header_logo): ?><div class="single-page__logo"><img src="<?php echo $header_logo; ?>" alt=""></div><?php endif; ?>
            <?php if($header_title): ?><div class="single-page__title"><?php echo $header_title; ?></div><?php endif; ?>
            <?php if($header_content): ?><div class="single-page__subtitle"><?php echo $header_content; ?></div><?php endif; ?>
            <div class="separator"></div>
            <?php 
                $challenge_title = get_field('challenge_title');
                $challenge_left_column = get_field('challenge_left_column');
                $challenge_right_column = get_field('challenge_right_column');
            ?>
            <div class="single-page__additional-text">
                <?php if($challenge_title): ?><div class="title"><?php echo $challenge_title; ?></div><?php endif; ?>
                <?php if($challenge_left_column || $challenge_right_column): ?>
                    <div class="text">
                        <div class="left-col"><?php echo $challenge_left_column; ?></div>
                        <div class="right-col"><?php echo $challenge_right_column; ?></div>
                    </div>
                <?php endif; ?>
            </div>
            <?php $gallery = get_field('post_gallery'); ?>
            <?php if($gallery): ?>
                <div class="single-page__slider">
                    <?php foreach($gallery as $gallery_item): ?>
                        <img src="<?php echo $gallery_item['url']; ?>" alt="">
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            <?php 
                $results_title = get_field('results_title');
                $results_left_column = get_field('results_left_column');
                $results_right_column = get_field('results_right_column');
            ?>
            <div class="single-page__additional-text">
                <?php if($results_title): ?><div class="title"><?php echo $results_title; ?></div><?php endif; ?>
                <?php if($results_left_column || $results_right_column): ?>
                    <div class="text">
                        <div class="left-col"><?php echo $results_left_column; ?></div>
                        <div class="right-col"><?php echo $results_right_column; ?></div>
                    </div>
                <?php endif; ?>
            </div>
            <?php $full_width_image = get_field('full_width_image'); ?>
            <?php if($full_width_image): ?>
                <div class="single-page__image">
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
                    <div class="testimonial__text">
                        <?php echo $content; ?>
                    </div>
                    <div class="testimonial__author">
                        <?php echo $title; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
<?php endif; ?>
<?php get_footer(); ?>
<?php get_footer(); ?>