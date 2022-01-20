<?php get_header(); ?>
<section class="hero_block">
	<?php 
		$background_image = get_field('hero_block_background_image');
		$title = get_field( 'hero_block_title' );
		$subtitle = get_field( 'hero_block_subtitle' );
	?>
	<div class="background_image">
		<img src="<?php if($background_image){echo $background_image;}else{echo get_template_directory_uri() . '/assets/images/home_page_hero_background.jpg';} ?>" alt="">
		<div class="img_arrow"></div>
	</div>
	<div class="right_triangular"></div>
	<div class="background_lines1"></div>
	<div class="background_lines2"></div>
	<div class="container">
		<?php if($title): ?><h1 class="hero_block__title appear fade-right"><?php echo $title; ?></h1><?php endif; ?>
		<?php if($subtitle): ?><div class="hero_block__subtitle appear fade-right delay-1"><?php echo $subtitle; ?></div><?php endif; ?>
	</div>
</section>
<?php if(have_rows('links')): ?>
	<section class="anchor_links_line">
		<div class="container">
			<ul class="anchor_links_line__list">
				<?php $i = 0; ?>
				<?php while(have_rows('links')): the_row(); ?>
					<?php $link = get_sub_field('link'); ?>
					<li class="anchor_links_line__item appear fade-in delay-<?php echo $i; ?>"><a href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a></li>
					<?php $i++; ?>
				<?php endwhile; ?>
			</ul>
		</div>
	</section>
<?php endif; ?>
<?php $id = get_field('brand_experience_block_id'); ?>
<section class="brand_experience" id="<?php echo $id; ?>">
	<div class="background_triangular"></div>
	<div class="brand_experience__line"></div>
	<div class="brand_experience__top">
		<div class="container">
			<?php 
				$title = get_field('brand_experience_title');
				$subtitle = get_field('brand_experience_subtitle');
				$image = get_field('brand_experience_background_image');
				$left_col_text = get_field('brand_experience_left_col_text');
				$right_col_text = get_field('brand_experience_right_col_text');
			?>
			<div class="top_triangular"></div>
			<?php if($title): ?>
				<h2 class="brand_experience__title appear fade-left">
					<?php echo $title; ?>
				</h2>
			<?php endif; ?>
			<?php if($subtitle): ?>
				<h3 class="brand_experience__subtitle appear fade-left delay-1">
					<?php echo $subtitle; ?>
				</h3>
			<?php endif; ?>
			<div class="separator"></div>
		</div>
	</div>
	<div class="brand_experience__bottom appear fade-in delay-2">
		<div class="container">
			<div class="brand_experience__content">
				<?php if($left_col_text): ?>
					<div class="left_column">
						<?php echo $left_col_text; ?>
					</div>
				<?php endif; ?>
				<?php if($right_col_text): ?>
					<div class="right_column">
						<?php echo $right_col_text; ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
	<div class="bottom_background_triangular">
		<img src="<?php if($image){echo $image;}else{ echo get_template_directory_uri() . '/assets/images/brand-experience-background-triangular.png';} ?>" alt="">
	</div>
</section>
<?php $id = get_field('experimantal_ooh_block_id'); ?>
<section class="experimental" id="<?php echo $id; ?>">
	<div class="experimental__header">
		<div class="experimental__header__triangular"></div>
		<div class="experimental__header__line"></div>
		<?php 
			$header_title = get_field('experimental_ooh_header_title');
			$image = get_field('experimental_ooh_left_image');
			$title = get_field('experimental_ooh_title');
			$text = get_field('experimental_ooh_text');
		?>
		<div class="container">
			<?php if($header_title): ?>
				<h2 class="experimental__header__title appear fade-left">
					<?php echo $header_title; ?>
				</h2>
			<?php endif; ?>
		</div>
	</div>
	<div class="experimental__main">
		<div class="left_triangular_image appear fade-right delay-1">
			<img src="<?php if($image){echo $image;}else{echo get_template_directory_uri() . '/assets/images/experimental__main_left_triangular_image.png';} ?>" alt="">
		</div>
		<div class="experimental__main__line"></div>
		<div class="container">
			<div class="experimental__main__content">
				<?php if($title): ?>
					<h3 class="experimental__main__title appear fade-left delay-2"><?php echo $title; ?></h3>
				<?php endif; ?>
				<div class="separator"></div>
				<?php if($text): ?>
					<div class="experimental__main__text appear fade-left delay-3">
						<?php echo $text; ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
<?php $id = get_field('digital_experience_block_id'); ?>
<section class="digital_experience" id="<?php echo $id; ?>">
	<div class="top_triangular"></div>
	<?php 
		$title = get_field('digital_experience_title');
		$subtitle = get_field('digital_experience_subtitle');
		$text = get_field('digital_experience_text');
		$left_image = get_field('digital_experience_left_image');
		$right_image = get_field('digital_experience_right_image');
	?>
	<div class="container">
		<div class="digital_experience__contentWrapper">
			<div class="left_transparent_triangular"></div>
			<?php if($title): ?>
				<h2 class="digital_experience__title appear fade-right">
					<?php echo $title; ?>
				</h2>
			<?php endif; ?>
			<div class="digital_experience__content">
				<?php if($subtitle): ?>
					<h3 class="digital_experience__subtitle appear fade-right delay-1">
						<?php echo $subtitle; ?>
					</h3>
				<?php endif; ?>
				<div class="separator"></div>
				<?php if($text): ?>
					<div class="digital_experience__text appear fade-right delay-2"><?php echo $text; ?></div>
				<?php endif; ?>
			</div>
		</div>
	</div>
	<div class="bottom_left_image appear fade-right delay-3">
		<img src="<?php if($left_image){echo $left_image;}else{echo get_template_directory_uri() . '/assets/images/OPEE04.jpg';} ?>" alt="">
	</div>
	<div class="bottom_right_image appear fade-left delay-3">
		<img src="<?php if($right_image){echo $right_image;}else{ echo get_template_directory_uri() . '/assets/images/OPEE05.jpg';} ?>" alt="">
	</div>
</section>
<?php $id = get_field('slider_block_id'); ?>
<?php if(have_rows('brand_slider')): ?>
<section class="brands_line" id="<?php echo $id; ?>">
	<div class="brands_line__slider">
		<?php while(have_rows('brand_slider')): the_row(); ?>
			<div class="brands_line__item"><img src="<?php the_sub_field('brand_image') ?>" alt=""></div>
		<?php endwhile; ?>
	</div>
</section>
<?php endif; ?>
<?php $id = get_field('cards_block_id'); ?>
<section class="home_page_cards_wrapper" id="<?php echo $id; ?>">
	<?php if(have_rows('cards')): ?>
		<div class="row home_page_cards">
			<?php $i = 0; ?>
			<?php while(have_rows('cards')): the_row(); ?>
					<?php 
						$image = get_sub_field('card_background_image');
						$title = get_sub_field('card_title');
						$text = get_sub_field('card_subtitle');
						$link = get_sub_field('card_link');
					?>
				<a <?php if($link): ?>href="<?php echo $link['url'] ?>"<?php endif; ?> class="col-lg-3 col-md-6 col-12 home_page_card appear fade-bottom" style="transition-delay: 0.<?php echo $i; ?>s;">
					<div class="home_page_card__image"><img src="<?php if($image){echo $image;}else{echo get_template_directory_uri() . '/assets/images/card_img_placeholder.png';} ?>" alt=""></div>
					<div class="home_page_card__content">
						<?php if($title): ?><div class="home_page_card__title"><?php echo $title; ?></div><?php endif; ?>
						<?php if($text): ?><div class="home_page_card__subtitle"><?php echo $text; ?></div><?php endif; ?>
					</div>
					<div class="left_triangular"></div>		
				</a>
				<?php $i++; ?>
			<?php endwhile; ?>
		</div>
	<?php endif; ?>
	<?php 
		$left_text = get_field('left_text');
		$right_text = get_field('right_text');
	?>
	<?php if($left_text || $right_text): ?>
		<div class="home_page_cards_bottom">
			<div class="container">
				<?php if($left_text): ?><div class="home_page_cards_bottom__title appear fade-right delay-2"><?php echo $left_text; ?></div><?php endif; ?>
				<?php if($right_text): ?><div class="home_page_cards_bottom__subtitle appear fade-left delay-2"><?php echo $right_text; ?></div><?php endif; ?>
			</div>
		</div>
	<?php endif; ?>
</section>
<?php $id = get_field('staff_block_id'); ?>
<section class="contact" id="<?php echo $id; ?>">
	<?php if(have_rows('staff')): ?>
		<div class="contact__cards_wrapper" id="people">
			<div class="background_rectangle"></div>
			<div class="background_triangular"></div>
			<div class="container">
				<div class="contact__cards row">
					<?php $i = 0; ?>
					<?php while(have_rows('staff')): the_row(); ?>
						<?php 
							$image = get_sub_field('worker_image'); 
							$name = get_sub_field('worker_name');
							$position = get_sub_field('worker_position');
						?>
						<div class="contact__card col-lg-4 col-md-6 col-12" style="transition-delay: 0.<?php echo $i; ?>s">
							<div class="contact__card__image">
								<div class="left_triangular"></div>
								<img src="<?php if($image){echo $image['url'];}else{echo get_template_directory_uri() . '/assets/images/card_img_placeholder.png';} ?>" alt="">
							</div>
							<?php if($name): ?><div class="contact__card__name"><?php echo $name; ?></div><?php endif; ?>
							<?php if($position): ?><div class="contact__card__position"><?php echo $position; ?></div><?php endif; ?>
						</div>
						<?php $i++; ?>
					<?php endwhile; ?>
				</div>
			</div>
		</div>
	<?php endif; ?>
	<?php 
		$left_side_title = get_field('left_side_title');
		$contact_text = get_field('contact_text');
		$contact_phone = get_field('contact_phone');
		$contact_email = get_field('contact_email');
		$google_map = get_field('google_map');
	?>
	<?php if($left_side_title): ?>
		<div class="contact__titleWrapper appear fade-right delay-2">
			<div class="contact__title">
				<?php echo $left_side_title; ?>
			</div>
		</div>
	<?php endif; ?>
	<div class="contact__data appear fade-left delay-2" id="contact">
		<?php if($contact_text): ?><div class="contact__data__text"><?php echo $contact_text; ?></div><?php endif; ?>
		<?php if($contact_phone): ?><div class="contact__data__phone">T: <a href="<?php echo $contact_phone; ?>"><?php echo $contact_phone['title']; ?></a></div><?php endif; ?>
		<?php if($contact_email): ?><div class="contact__data__email">E: <a href="<?php echo $contact_email['url'] ?>"><?php echo $contact_email['title']; ?></a></div><?php endif; ?>
		<?php if($google_map): ?><div class="contact__data__google-maps"><a href="<?php echo $goolge_map['url']; ?>"><?php echo $google_map['title']; ?></a></div><?php endif; ?>	
	</div>
</section>
<?php get_footer(); ?>