<footer id="footer">
	<div class="container">
		<div class="row top">
			<div class="col-xs-12 col-sm-6 col-md-4">
			<?php dynamic_sidebar('footer-kontakt'); ?> <!-- Widget till kontakt i footern -->
			</div>
			<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
			<?php dynamic_sidebar('footer-om'); ?> <!-- Widget till Om oss i footern -->
			</div>
			<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
				<ul class="social">
				<?php dynamic_sidebar('footer-social'); ?> <!-- Widget till Sociala medier i footern -->
				</ul> 
			</div>
		</div>
		<div class="row bottom">
			<div class="col-xs-12">
			<?php dynamic_sidebar('footer-copyright'); ?> <!-- Widget till copyright i footern -->
			</div>
		</div>
	</div>
</footer>
    <?php wp_footer();?>
</body>
</html>