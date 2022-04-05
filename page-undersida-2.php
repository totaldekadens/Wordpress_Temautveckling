<?php get_header(); ?>

<main>
	<section>
		<div class="container">
			<div class="row">
				<div id="primary" class="col-xs-12 col-md-9 col-md-push-3">
					<?php while (have_posts()) {
						the_post(); ?>
						<h1><?php the_title(); ?></h1>
						<p><?php the_content();?></p>
					<?php } ?>
				</div>
				<?php get_template_part('sidebar-undersida-left'); ?>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>