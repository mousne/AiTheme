<?php
/**
 * The default template for displaying content
 *
 * @package Vtrois
 * @version 1.1
 */
?>

<article>
	<?php if ( snape_option( 'show_thumb' )==1 ) : ?>
	<header class="article-img img-box">
		<a href="<?php the_permalink() ?>"><?php snape_blog_thumbnail() ?></a>
	</header>
	<?php endif; ?>
	<h2 class="article-title"><a href="<?php the_permalink() ?>"><?php if( get_the_title() == '' ){ echo '无标题'; } else { the_title(); }?></a></h2>
	<div>
		<?php $excerptphoto = wp_trim_words(get_the_excerpt(), 120); ?>
		<p><?php echo $excerptphoto ?></p>
	</div>
	<footer>
		<a href="#" title="创建时间"><i class="fa fa-calendar"></i> <?php the_time('Y/n/j') ?></a>
		<?php $category = get_the_category(); echo '<a href="' . get_category_link($category[0] -> term_id) . '" title="分类"><i class="fa fa-folder-open-o"></i> ' . $category[0] -> cat_name . '</a>'; ?>
		<a href="<?php the_permalink() ?>#respond" title="回复"><i class="fa fa-commenting-o"></i> <?php echo snape_comments_users($post->ID); ?> <span class="hidden-xs">回复</span></a>
		<a href="<?php the_permalink() ?>" title="查看"><i class="fa fa-eye"></i> <?php echo snape_get_post_views(); ?> <span class="hidden-xs">查看</span></a>
		<a href="<?php the_permalink() ?>" title="赞"><i class="fa fa-thumbs-o-up"></i> <?php if( get_post_meta($post->ID,'love',true) ){ echo get_post_meta($post->ID,'love',true); } else { echo '0'; }?> <span class="hidden-xs">赞</span></a>
	</footer>
</article>