<?php 
/*
Template Name: Single page
*/
?>
<?php get_header(); ?>
<section class="single-page-content">
    
    <div class="box"><img src="<?php echo get_template_directory_uri() ?>/assets/images/Dettol_TFL06.jpg" alt=""></div>
</section>
<style>
    img {
        height: 500px;
        clip-path: polygon(-3% 0%, 100% 0%, 100% 100%, 100% 100%);
        width: 60%;
        object-position: bottom left;
        object-fit: cover;
    }
    .box {
        position: relative;
        width: 20%;
        /* desired width */
        margin: 5px;
    }

    .box:before {
        content: "";
        display: block;
        padding-top: 100%;
        /* initial ratio of 1:1*/
    }
    
</style>
<?php get_footer(); ?>