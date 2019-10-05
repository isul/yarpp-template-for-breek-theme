<?php 
/*
YARPP Template: Breek
Author: isul (https://isulnara.com)
Description: YARPP template for Breek theme with thumbnail and title list.
*/
?>
<?php if (have_posts()):?>
<section id="epcl_related_articles-2" class="widget widget_epcl_related_articles underline-effect"><h4 class="widget-title title bordered">Related Posts</h4>
<ol>
	<?php while (have_posts()) : the_post(); ?>
	<article class="item post type-post status-publish format-standard has-post-thumbnail hentry">
		<a href="<?php the_permalink() ?>" class="thumb hover-effect">
			<?php if (has_post_thumbnail()):?>
				<span class="fullimage cover lazy loaded" style="background-image: url(&quot;<?php the_post_thumbnail_url('thumbnail');?>&quot;); display: block;"></span>
			<?php endif; ?>
		</a>
		<div class="info gradient-effect">
			<time datetime="<?php the_date(); ?>"><?php echo get_the_date(); ?></time>
			<h4 class="title usmall"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>								
		</div>
		<div class="clear"></div>
	</article>
	<?php endwhile; ?>
</ol>
</section>
<?php endif; ?>
