<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
	<?php wp_head(); ?>

	<?php the_field('header_scripts','option'); ?>
</head>
<?php if(!is_front_page()){ ?>
	<script>
		jQuery(document).ready(function(){
			jQuery('ul.menu li.anchor_link').each(function(){
				var link = jQuery(this).find('a').attr('href');
				jQuery(this).find('a').attr('href', '<?php echo get_home_url() ?>/' + link);
			});
		});
	</script>
<?php } ?>

<?php 
	$headerClasses = '';
	$headerWhite = false;
	
	if(get_field('white_header')):
		$headerWhite = true;
		$headerClasses .= ' header__white';
	endif;


	if(get_field('enable_header_banner','option')):
		$headerClasses .= ' headerBannerEnabled';
	endif;
?>

<body <?php body_class($headerClasses); ?>>

	<header id="header" class="header">
		<div class="logo">
			<?php 
                $logo = get_field('header_logo', 'option'); 

            ?>
            <?php if($logo): ?><a href="<?php echo get_home_url(  ) ?>"><?php echo file_get_contents(wp_get_original_image_path($logo['id'])); ?></a><?php endif; ?>
		</div>
		<div class="menu_wrapper">
			<?php 
				wp_nav_menu( [
					'theme_location'  => 'header-menu',
					'menu'            => '',
					'container'       => 'div',
					'container_class' => '',
					'container_id'    => '',
					'menu_class'      => 'menu',
					'menu_id'         => '',
					'echo'            => true,
					'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'depth'           => 0,
					'walker'          => '',
				] );
			?>
		</div>
		<?php if(have_rows('social_media', 'option')): ?>
			<div class="social_media_wrapper">
				<?php while(have_rows('social_media', 'option')): the_row(); ?>
					<?php 
						$link = get_sub_field('social_media_link'); 
						$image = get_sub_field('social_media_icon');
					?>
					<a href="<?php echo $link; ?>" class="social_media">
						<?php echo file_get_contents(wp_get_original_image_path($image['id'])); ?>
					</a>
				<?php endwhile; ?>
			</div>
		<?php endif; ?>
		<div class="mobile_burger_icon">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</header>

	<div id="main">