<?php
/*
Template Name: index
*/ get_header(); ?>

<h1>Blog</h1>

<?php if (have_posts()) : while(have_posts()) : the_post();?>
	<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2>
	<?php the_excerpt(); ?></a>

<?php endwhile; endif;?>
<p>index</p>
<?php get_footer(); ?>