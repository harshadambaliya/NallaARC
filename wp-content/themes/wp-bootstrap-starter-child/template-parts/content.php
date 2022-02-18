<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="single-post-content">
	<div class="post-thumbnail">
		<?php the_post_thumbnail(); ?>
		<header class="entry-header">
			<div class="container">
				<?php
				if ( is_single() ) :
					the_title( '<h1 class=" section-title">', '</h1>' );
				else :
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif;
		
				if ( 'post' === get_post_type() ) : ?>
				<div class="entry-meta">
					<?php wp_bootstrap_starter_posted_on(); ?>
				</div><!-- .entry-meta -->
				<?php
				endif; ?>
				<p class="section-description"><?php echo get_the_excerpt(); ?></p>
				<div class="go-down-link">
					<span><img src="<?php echo SITE_URL(); ?>/wp-content/uploads/2021/08/down-arrow.png" alt=""></span>
				</div>
				<span></span>
			</div>
		</header><!-- .entry-header -->
	</div>
	<div class="entry-content single-post-content__inner" >
		<div class="container">
			<?php
			if ( is_single() ) :
				the_content();
			else :
				the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'wp-bootstrap-starter' ) );
			endif;

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wp-bootstrap-starter' ),
					'after'  => '</div>',
				) );
			?>
		</div>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php wp_bootstrap_starter_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
