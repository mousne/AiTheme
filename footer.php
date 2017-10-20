<?php
/**
 * The template for displaying the footer
 *
 * @package MousNE
 * @version 1.0
 */
?>

	<footer class="bottom-bar" id="footer">
		<a class="cd-top hidden-xs text-center"><span class="fa fa-chevron-up"></span></a>
		<div class="container">
			<div class="row">
				<div class="copyright col-md-6 col-md-offset-3 text-center">
					<p>© 2017 <a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a> All Rights Reserved.<br>Theme <a href="https://github.com/mousne/AiTheme" target="_blank" rel="nofollow">AiTheme</a> made by <a href="https://blog.tirisfal.org" target="_blank" rel="nofollow">MousNE</a>
					</p>
					<p><?php echo (!snape_option('site_tongji')) ? '' : '<script>' . snape_option('site_tongji') . '</script>'; ?></p>
				</div>
			</div>
		</div>
	</footer>

	<?php wp_footer();?>
	<?php echo (!snape_option('ad_code')) ? '' : '<script>' . snape_option('ad_code') . '</script>'; ?>

</body>
</html>