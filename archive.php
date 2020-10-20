<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fundation
 */

get_header();
?>

	<main id="primary" class="site-main">

		<div class="container text-center">
			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->
		</div><!-- container text-center -->

		<div class="container">
			<div class="row">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
				<div class="col-6 p-2">
					<div class="card mb-3 ">
						<?php if ( has_post_thumbnail() ) : ?>
							<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="text-center">
								<?php the_post_thumbnail('post-thumbnails', array('class' => 'cont4 text-center')); ?>
							</a>
						<?php endif; ?>
						
						<div class="card-body">
							<div class="card-title">
							<a href="<?php the_permalink(); ?>">
								<h5><?php the_title(); ?></h5>
							</div>
							<p class="card-text">
								<?php the_excerpt(); ?>
							</p>
							<p class="card-text"><small class="text-muted">	<?php fnd_posted_on() ?></small></p>
						</div>
					</div>
				</div>
				<?php endwhile; endif; ?>
			</div>
		</div>
		

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
