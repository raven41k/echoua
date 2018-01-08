<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package echoUA
 */

?>

	<!-- footer start -->
	<footer class="footer">
		<div class="wrapper">
			<div class="footer__copyright">© Copyright @Junaed <?php echo get_the_date('Y'); ?>, All rights reserved.</div>
			<div class="footer__social">
				<?php
			    $rows = get_field('footer_social');
			    ?>
				<?php if ($rows): ?>
			        <?php foreach ($rows as $row): ?>
						<a href="<?php echo $row['twitter']; ?>" class="icon icon hvr-push">
							<i class="fa fa-twitter" aria-hidden="true"></i>
						</a>
						<a href="<?php echo $row['linkedin']; ?>" class="icon icon hvr-push">
							<i class="fa fa-linkedin" aria-hidden="true"></i>
						</a>
						<a href="<?php echo $row['google']; ?>" class="icon icon hvr-push">
							<i class="fa fa-google-plus" aria-hidden="true"></i>
						</a>
						<a href="<?php echo $row['facebook']; ?>" class="icon icon hvr-push">
							<i class="fa fa-facebook" aria-hidden="true"></i>
						</a>
			        <?php endforeach; ?>
		    	<?php endif; ?>
				
			</div>
		</div>
	</footer>
	<!-- footer start -->
	<!-- Site Overlay -->
	<div class="site-overlay"></div>
<?php wp_footer(); ?>
</body>
</html>
