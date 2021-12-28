<?php 
/*
Template Name: About Us
*/
get_header(); ?>
<?php if(have_rows('about_blocks')): ?>
    <section class="aboutUs">
        <?php $i = 1; ?>
        <?php while(have_rows('about_blocks')): the_row(); ?>
            <?php 
            $background_image = get_sub_field('background_image');
            $title = get_sub_field('block_title');
            $subTitle = get_sub_field('block_sub_title');
            ?>
            <div class="aboutUs_block" style="background-image: url('<?php echo $background_image; ?>')">
                <div class="aboutUs_block__content">
                    <?php if($title): ?><div class="aboutUs_block__title"><?php echo $title; ?></div><?php endif; ?>
                    <?php if($subTitle): ?><div class="aboutUs_block__subtitle"><?php echo $subTitle; ?></div><?php endif; ?>
                </div>
                <?php if($i == 1 || $i == 2): ?>
                    <div class="aboutUs_block__lines1"></div>
                    <div class="aboutUs_block__lines2"></div>
                    <?php if($i == 1): ?><div class="aboutUs_block__lines3"></div><?php endif; ?>
                <?php endif; ?>
            </div>
            <?php $i++; ?>
        <?php endwhile; ?>
    </section>
<?php endif; ?>
<?php get_footer(); ?>