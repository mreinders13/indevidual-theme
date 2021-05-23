<?php 
/*
Template Name: archive
*/get_header(); ?>

<h1>Blog</h1>
<div style="margin:0 15%;">
	<?php if (have_posts()) : while(have_posts()) : the_post();?>
	<a href="<?php the_permalink(); ?>" style="text-decoration:none;color:#707070;"><h2><?php the_title(); ?></h2>
	<?php the_excerpt(); ?></a>

	<?php endwhile; endif;?>
</div>

<?php get_footer(); ?>
 
 
