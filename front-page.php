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
		<?php if($title): ?><div class="hero_block__title"><?php echo $title; ?></div><?php endif; ?>
		<?php if($subtitle): ?><div class="hero_block__subtitle"><?php echo $subtitle; ?></div><?php endif; ?>
	</div>
</section>
<?php if(have_rows('links')): ?>
<section class="anchor_links_line">
	<div class="container">
		<ul class="anchor_links_line__list">
			<?php while(have_rows('links')): the_row(); ?>
				<?php $link = get_sub_field('link'); ?>
				<li class="anchor_links_line__item"><a href="<?php echo $link['url'] ?>"><?php echo $link['title']; ?></a></li>
			<?php endwhile; ?>
		</ul>
	</div>
</section>
<?php endif; ?>
<?php $id = get_field('brand_experience_block_id'); ?>
<section class="brand_experience" <?php if($id){echo 'id="' . $id . '"';} ?>>
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
				<div class="brand_experience__title">
					<?php echo $title; ?>
				</div>
			<?php endif; ?>
			<?php if($subtitle): ?>
				<div class="brand_experience__subtitle">
					<?php echo $subtitle; ?>
				</div>
			<?php endif; ?>
			<div class="separator"></div>
		</div>
	</div>
	<div class="brand_experience__bottom">
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
<section class="experimental" <?php if($id){echo 'id="' . $id . '"';} ?>>
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
				<div class="experimental__header__title">
					<?php echo $header_title; ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
	<div class="experimental__main">
		<div class="left_triangular_image">
			<img src="<?php if($image){echo $image;}else{echo get_template_directory_uri() . '/assets/images/experimental__main_left_triangular_image.png';} ?>" alt="">
		</div>
		<div class="experimental__main__line"></div>
		<div class="container">
			<div class="experimental__main__content">
				<?php if($title): ?>
					<div class="experimental__main__title"><?php echo $title; ?></div>
				<?php endif; ?>
				<div class="separator"></div>
				<?php if($text): ?>
					<div class="experimental__main__text">
						<?php echo $text; ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
<?php $id = get_field('digital_experience_block_id'); ?>
<section class="digital_experience" <?php if($id){echo 'id="' . $id . '"';} ?>>
	<div class="top_triangular"></div>
	<div class="right_triangular"></div>
	<?php 
		$title = get_field('digital_experience_title');
		$subtitle = get_field('digital_experience_subtitle');
		$text = get_field('digital_experience_text');
		$left_image = get_field('digital_experience_left_image');
		$right_image = get_field('digital_experience_right_image');
	?>
	<div class="container">
		<div class="digital_experience__contentWrapper">
			<?php if($title): ?>
				<div class="digital_experience__title">
					<?php echo $title; ?>
				</div>
			<?php endif; ?>
			<div class="digital_experience__content">
				<?php if($subtitle): ?>
					<div class="digital_experience__subtitle">
						<?php echo $subtitle; ?>
					</div>
				<?php endif; ?>
				<div class="separator"></div>
				<?php if($text): ?>
					<div class="digital_experience__text"><?php echo $text; ?></div>
				<?php endif; ?>
			</div>
		</div>
	</div>
	<div class="bottom_left_image">
		<img src="<?php if($left_image){echo $left_image;}else{echo get_template_directory_uri() . '/assets/images/OPEE04.jpg';} ?>" alt="">
	</div>
	<div class="bottom_right_image">
		<img src="<?php if($right_image){echo $right_image['url'];}else{ echo get_template_directory_uri() . '/assets/images/OPEE05.jpg';} ?>" alt="">
	</div>
</section>
<?php if(have_rows('brand_slider')): ?>
<?php $id = get_field('slider_block_id'); ?>
<section class="brands_line" <?php if($id){echo 'id="' . $id . '"';}?>>
	<div class="brands_line__slider">
		<?php while(have_rows('brand_slider')): the_row(); ?>
			<div class="brands_line__item"><img src="<?php the_sub_field('brand_image') ?>" alt=""></div>
		<?php endwhile; ?>
	</div>
</section>
<?php endif; ?>
<?php $id = get_field('cards_block_id'); ?>
<section class="home_page_cards_wrapper" <?php if($id){echo 'id="' . $id . '"';}?>>
	<?php if(have_rows('cards')): ?>
		<div class="row home_page_cards">
			<?php while(have_rows('cards')): the_row(); ?>
				<div class="col-3 home_page_card">
					<?php 
						$image = get_sub_field('card_background_image');
						$title = get_sub_field('card_title');
						$text = get_sub_field('card_subtitle');
					?>
					<div class="home_page_card__image"><img src="<?php if($image){echo $image;}else{echo get_template_directory_uri() . '/assets/images/card_img_placeholder.png';} ?>" alt=""></div>
					<div class="home_page_card__content">
						<?php if($title): ?><div class="home_page_card__title"><?php echo $title; ?></div><?php endif; ?>
						<?php if($text): ?><div class="home_page_card__subtitle"><?php echo $text; ?></div><?php endif; ?>
					</div>
					<div class="left_triangular"></div>		
				</div>
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
				<?php if($left_text): ?><div class="home_page_cards_bottom__title"><?php echo $left_text; ?></div><?php endif; ?>
				<?php if($right_text): ?><div class="home_page_cards_bottom__subtitle"><?php echo $right_text; ?></div><?php endif; ?>
			</div>
		</div>
	<?php endif; ?>
</section>
<?php $id = get_field('staff_block_id'); ?>
<section class="contact" <?php if($id){echo 'id="' . $id . '"';}?>>
	<?php if(have_rows('staff')): ?>
		<div class="contact__cards_wrapper">
			<div class="background_rectangle"></div>
			<div class="background_triangular"></div>
			<div class="container">
				<div class="contact__cards row">
					<?php while(have_rows('staff')): the_row(); ?>
						<?php 
							$image = get_sub_field('worker_image'); 
							$name = get_sub_field('worker_name');
							$position = get_sub_field('worker_position');
						?>
						<div class="contact__card col-4">
							<div class="contact__card__image">
								<div class="left_triangular"></div>
								<img src="<?php if($image){echo $image['url'];}else{echo get_template_directory_uri() . '/assets/images/card_img_placeholder.png';} ?>" alt="">
							</div>
							<?php if($name): ?><div class="contact__card__name"><?php echo $name; ?></div><?php endif; ?>
							<?php if($position): ?><div class="contact__card__position"><?php echo $position; ?></div><?php endif; ?>
						</div>
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
		<div class="contact__titleWrapper">
			<div class="contact__title">
				<?php echo $left_side_title; ?>
			</div>
		</div>
	<?php endif; ?>
	<div class="contact__data">
		<?php if($contact_text): ?><div class="contact__data__text"><?php echo $contact_text; ?></div><?php endif; ?>
		<?php if($contact_phone): ?><div class="contact__data__phone">T: <a href="<?php echo $contact_phone; ?>"><?php echo $contact_phone['title']; ?></a></div><?php endif; ?>
		<?php if($contact_email): ?><div class="contact__data__email">E: <a href="<?php echo $contact_email['url'] ?>"><?php echo $contact_email['title']; ?></a></div><?php endif; ?>
		<?php if($google_map): ?><div class="contact__data__google-maps"><a href="<?php echo $goolge_map['url']; ?>"><?php echo $google_map['title']; ?></a></div><?php endif; ?>	
	</div>
</section>
<?php get_footer(); ?>