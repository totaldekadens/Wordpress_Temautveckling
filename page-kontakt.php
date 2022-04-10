<?php get_header(); ?>

<main>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-8 col-md-offset-2">
					<h1><?php wp_title(''); ?></h1>
					<?php dynamic_sidebar('contact-form'); ?> 
				</div>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>