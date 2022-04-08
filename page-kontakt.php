<?php get_header(); ?>

<main>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-8 col-md-offset-2">
					<h1><?php wp_title(''); ?></h1>
					<?php echo do_shortcode( '[contact-form-7 id="73" title="Kontakt"]' ); ?>
				</div>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>