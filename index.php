<?php
/**
 * The main template file.
 *
 */

get_header(); ?>

<?php get_sidebar(); ?>
    <div id="main">
	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			<h1><?php the_title(); ?></h1>
			<h2><?php the_date(); ?></h2>
    			<?php the_content('Read the rest of this entry'); ?>
			<hr />
		<?php endwhile; ?>
	<?php endif; ?>
    </div>
   
<?php get_footer(); ?>