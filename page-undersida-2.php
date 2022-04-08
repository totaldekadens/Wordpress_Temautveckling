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
				<aside id="secondary" class="col-xs-12 col-md-3 col-md-pull-9">
					<?php wp_nav_menu(array(
            		'theme_location' => 'sidebar-sibling',
            		'menu_class' => 'side-menu',
            			)); ?> 
				</aside>
				
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>