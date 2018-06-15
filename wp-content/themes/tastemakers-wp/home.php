<?php get_header(); ?>
	<div class ="blog">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="absolute">
			<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
			<?php the_excerpt(); ?>
			<?php the_date(); ?>
			</div>
		<?php endwhile; else : ?>
			<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
	</div>
<?php get_footer(); ?>