<?php
/**
 * The main template file
 *
 * @package Vtrois
 * @version 1.1
 */
get_header(); ?>

	<div class="main container" id="main">
		<div class="container">
			<div class="row">
				<div class="post-list col-md-8">
					<?php
					if(is_home()){
					snape_banner();
					}elseif(is_category()){
					?>
					<?php if ( snape_option( 'show_head_cat' )==1 ) : ?>
					<div class="hentry clearfix">
						<h1 class="post-header-title">分类：<?php echo single_cat_title('', false); ?></h1>
						<h1 class="post-header-description"><?php echo category_description(); ?></h1>
					</div>            
					<?php endif; ?>
					<?php
					}elseif(is_tag()){
					?>
					<?php if ( snape_option( 'show_head_tag' )==1 ) : ?>
					<div class="hentry clearfix">
						<h1 class="post-header-title">标签：<?php echo single_cat_title('', false); ?></h1>
						<h1 class="post-header-description"><?php echo category_description(); ?></h1>
					</div>
					<?php endif; ?>
					<?php }
					if ( have_posts() ) { while ( have_posts() ){
					the_post();
					get_template_part('content', get_post_format());
					}
					}else{
					?>
					<div class="hentry clearfix">
						<div class="err-img text-center"><img class="err-search" src="<?php echo get_template_directory_uri(); ?>/images/error.png"><br/><h1 class="post-notfound post-title-zw">抱歉，没有找到符合内容的结果，请换其它关键词再试！</h1></div>
					</div>
					<?php } ?>
					<?php snape_pages(3);?>
					<?php wp_reset_query(); ?>
				</div>

				<aside class="widget-list col-md-4 hidden-xs hidden-sm scrollspy">
					<?php dynamic_sidebar('sidebar_tool'); ?>
				</aside>
			</div>
		</div>
	</div>

<?php get_footer(); ?>