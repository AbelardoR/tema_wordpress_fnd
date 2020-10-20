<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fundation
 */

?>

<div class="container" id="info">
  <div class="row justify-content-md-center border-deck py-2">
    <div class="col-md-3">
      <div class="card" style="max-width: 18rem;">
        <div class="card-body">
          <h5 class="site-title card-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h5>
          <?php
          $fnd_description = get_bloginfo( 'description', 'display' );
          if ( $fnd_description || is_customize_preview() ) : ?>
          <p class="site-description card-text"><?php echo $fnd_description; /* WPCS: xss ok. */ ?></p>
          <?php endif; ?>
        </div>
      </div>   
    </div><!-- col-md-3 -->
    <div class="col-md-3 px-4 mt-2">
      <h5><span id="tgtext-14">
									<?php if( get_theme_mod( "tgtext-14") != "" ) {echo get_theme_mod( "tgtext-14");} else {echo "Where find us";} ?>
								</span><!-- #tgtext-14 --></h5>
      <p><span id="tgtext-15">
									<?php if( get_theme_mod( "tgtext-15") != "" ) {echo get_theme_mod( "tgtext-15");} else {echo "Where find us";} ?>
								</span><!-- #tgtext-15 --></p>
    </div>
    <div class="col-md-3 px-4 mt-2">
       <?php if ( is_active_sidebar( 'menu-sidebar' ) ) : ?>
					<?php dynamic_sidebar( 'menu-sidebar' ); ?>
				<?php else : ?>
					<!-- Time to add some widgets! -->
				<?php endif; ?>
    </div>
    <div class="col-md-3 px-4 mt-2">
       <?php if ( is_active_sidebar( 'Content Sidebar' ) ) : ?>
					<?php dynamic_sidebar( 'Content Sidebar' ); ?>
				<?php else : ?>
					<!-- Time to add some widgets! -->
				<?php endif; ?>
    </div>
  </div>

</div><!-- Info -->

	<div class="container-fluid py-3 mb-3">
		<div class="float-right"><a href="#" class="hvr-float">
		<i class="far fa-arrow-alt-circle-up fa-2x"></i></a></div>
	
		<div class="container text-white" style="background-color: #085f63 ;">
			<div class="row text-center">
				<div class="col-md-8 offset-md-2">
					<div class="py-3">
							Copyright &copy;<script>document.write(new Date().getFullYear());</script> 
							All rights reserved | This template made <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="#"  class="hvr-wobble-vertical" target="_blank" >j26a90</a>
					</div>
				</div>     
			</div><!-- row -->	
		</div>
	</div>
	
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
