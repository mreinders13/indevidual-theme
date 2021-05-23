<!-- this is for individual blog posts -->
<?php get_header(); ?>

<h1><?php the_title(); ?></h1>
<div style="margin:0 15%;">
	<?php if (have_posts()) : while(have_posts()) : the_post();?>

	<?php the_content(); ?>

	<?php endwhile; endif;?>
	
</div>

<?php get_footer(); ?>