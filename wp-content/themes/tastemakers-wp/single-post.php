<?php get_header(); ?>
	<div class ="blog-page">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="absolute">
			<h1><?php the_title(); ?></h1>
			<?php the_post_thumbnail( 'large' ); ?>
			<?php the_content(); ?>
			<?php the_date(); ?>
			</div>
		<?php endwhile; else : ?>
			<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
	</div>
<?php get_footer(); ?>