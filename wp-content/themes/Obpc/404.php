<?php get_header(); ?>
	<?php if(have_posts()): while(have_posts()): the_post; ?>
		
	<?php endwhile; endif; ?>
	<main id="404">
	</main>
<?php get_footer(); ?>