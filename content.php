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
	<h2 class="article-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
	<div>
		<?php $excerptphoto = wp_trim_words(get_the_excerpt(), 120); ?>
		<p><?php echo $excerptphoto ?></p>
	</div>
	<footer>
		<span>
		<a href="#"><i class="fa fa-calendar"></i> <?php the_time('Y/n/j') ?></a>
		</span>
		<span>
		<?php $category = get_the_category(); echo '<a href="' . get_category_link($category[0] -> term_id) . '"><i class="fa fa-folder-open-o"></i> ' . $category[0] -> cat_name . '</a>'; ?>
		<a href="<?php the_permalink() ?>#respond"><i class="fa fa-commenting-o"></i> <?php echo snape_comments_users($post->ID); ?> Comments</a>
		</span>
		<span>
		<a href="<?php the_permalink() ?>"><i class="fa fa-eye"></i> <?php echo snape_get_post_views(); ?> Views</a>
		<a href="<?php the_permalink() ?>"><i class="fa fa-thumbs-o-up"></i> <?php if( get_post_meta($post->ID,'love',true) ){ echo get_post_meta($post->ID,'love',true); } else { echo '0'; }?> Times</a>
		</span>
	</footer>
</article>