<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

	<section id="primary" class="content-area post-archive-content">
		<div id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header post-archive-header">
				<?php
					the_archive_title( '<h1 class="section-title">', '</h1>' );
				?>
				<img src="<?php echo SITE_URL(); ?>/wp-content/uploads/2022/02/home-landing-img.png" alt="Post Archive img" class="img-fluid">
			</header><!-- .page-header -->

			<div class="container">
				<div class="row">
					<?php
					/* Start the Loop */
					while ( have_posts() ) : the_post(); ?>
						<div class="col col-12 col-md-4 col-lg-4">
							<div class="story-card">
								<div class="story-img">
									<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Story Image" class="img-fluid">
								</div>
								<div class="story-body">
									<h3 class="story-title"><?php echo the_title()  ?></h3>
									<?php $author_id=$post->post_author; ?>
									<label class="story-author"><?php the_author_meta( 'user_nicename' , $author_id ); ?></label>
									<div class="story-link-button text-center">
										<a href="<?php echo get_permalink(); ?>" class="story-link">+ Read More</a>
									</div>
								</div>
							</div>
						</div>
					<?php endwhile; ?>
				</div>
			</div>
			<?php the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</div><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
