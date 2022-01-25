	</div>

	<footer id="footer" class="footer">
		<a href="#main" class="back_to_top_button">
            Back to top
        </a>

		<?php if (get_privacy_policy_url()) : ?>

			<a href="<?php echo get_privacy_policy_url();?>" class="footer__privacy">
				Privacy Policy
			</a>
		<?php endif; ?>

	</footer>

	<?php wp_footer(); ?>
</body>
</html>