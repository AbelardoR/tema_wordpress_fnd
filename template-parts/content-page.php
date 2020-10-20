<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fundation
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<div class="cont3 container p-4" style="background-image: url(<?php echo header_image(); ?>); background-repeat: no-repeat; background-size: cover;">
	<div class="container py-2">
		<div class="headerimg">
			<header class="entry-header text-center texto-borde">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</header><!-- .entry-header -->
		</div>	
	</div>
	<div class="row border-card">
	<?php if ( has_post_thumbnail() ) :?>
		<div class="col-md-6">
			<div class="container text-justify">
				<div class="entry-content px-4 cont3">
					<?php
					the_content();

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'fnd' ),
						'after'  => '</div>',
					) );
					?>
				</div><!-- .entry-content -->
			</div>
		</div>
		<div class="col-md-6">
			<div class="float-md-right m-3">
				<div class="card mb-3 img-fluid" style="max-width: 500px; max-height:auto;">
					<?php fnd_post_thumbnail(); ?>	
				</div>
			</div><!-- float-md-right -->
		</div>
		<?php else : ?>
		<div class="col-md-12">
			<div class="container text-justify">
				<div class="entry-content px-4 cont3">
					<?php
					the_content();

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'fnd' ),
						'after'  => '</div>',
					) );
					?>
				</div><!-- .entry-content -->
			</div>
		</div>
		<div class="" style="visibility: hidden;">
			<div class="float-md-right m-3">
				<div class="card mb-3 img-fluid" style="max-width: 500px; max-height:auto;">
					<?php fnd_post_thumbnail(); ?>	
				</div>
			</div><!-- float-md-right -->
		</div>
		<?php endif; ?>
	</div>

</div>

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'fnd' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
