<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package fundation
 */

get_header();
?>

	<main id="primary" class="site-main">

	<div class="container py-3">
			<div class="row">
				<?php if ( is_active_sidebar( 'entry-sidebar' ) ) : ?><!-- if load entry-sidebar showON -->
					<div class="col-md-8 col-sm-12" id="content1">
						<div id="pst">
							<?php
							while ( have_posts() ) :
								the_post();

								get_template_part( 'template-parts/content', get_post_type() );
							endwhile; // End of the loop.
							?>
							<div class="navigation">
									<?php the_post_navigation(	array(
										'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'fnd' ) . '</span> <span class="nav-title">%title</span>',
														'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'fnd' ) . '</span> <span class="nav-title">%title</span>',));
														?>
							</div><!-- navigation -->
						</div><!-- pst -->
					</div><!-- #content1  -->
					<div class="col-md-4 col-sm-12" id="sidebar2">
							<div id="entry-sidebar" class="sidebar card bg-dark text-center">
								<?php dynamic_sidebar( 'entry-sidebar' ); ?>
							</div><!-- #entry-sidebar -->
					</div><!-- #sidebar2  -->
				<?php else : ?><!-- if dont load entry-sidebar showOFF -->
					<div class="col-md-12 col-sm-12" id="content1">
						<div id="pst">
							<?php
							while ( have_posts() ) :
								the_post();

								get_template_part( 'template-parts/content', get_post_type() );
							endwhile; // End of the loop.
							?>
							<div class="navigation">
									<?php the_post_navigation(	array(
										'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'fnd' ) . '</span> <span class="nav-title">%title</span>',
														'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'fnd' ) . '</span> <span class="nav-title">%title</span>',));
														?>
							</div><!-- navigation -->
						</div><!-- pst -->
					</div><!-- #content1  -->
					<div class="col-md-4 col-sm-12" id="sidebar2" style="visibility: hidden;">
					</div><!-- #sidebar2  -->
				<?php endif; ?>
			</div><!-- .row -->

			<div class="accordion mb-5 " id="accordionExample">
                <div class="card border-0" style="background:transparent;">
                    <div class="card-header" id="headingOne">
                    	<h2 class="mb-0 text-center">
                           	<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							   <span id="tgtext-13">
									<?php if( get_theme_mod( "tgtext-13") != "" ) {echo get_theme_mod( "tgtext-13");} else {echo "Insert your text here";} ?>
									<br><i class="fas fa-angle-double-down"></i>
								</span><!-- #tgtext-13 -->
								<br>
							</button>
                		</h2>
                    </div><!-- .card-header -->

                    <div id="collapseOne" class="collapse hide" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
										<div class="container" id="coments" >
											<?php
												// If comments are open or we have at least one comment, load up the comment template.
												if ( comments_open() || get_comments_number() ) :
													comments_template();
													// comment_form();
												endif;
											?>
										</div><!-- #coments -->
								
                        </div><!-- .card-body -->
                    </div><!-- .collapseOne -->
				</div><!-- .card -->
            </div><!-- .accordion  -->
		</div><!-- .container -->

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
