<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fundation
 */

?>

<div class="container" id="slider" > 
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <span id="tgimg-1">		
              <img <?php if( get_theme_mod( "tgimg-1") != "" ) {echo "src='".get_theme_mod( "tgimg-1")."'";} else {echo " src='".get_template_directory_uri()."/img/sunset-odl.jpg'";} ?>
              id="sliderimg1" class="img-fluid d-block simg"/>
            </span><!-- #sliderimg1 -->
            <div class="carousel-caption d-none d-md-block cont2">
              <h1><span id="tgtext-1">
									<?php if( get_theme_mod( "tgtext-1") != "" ) {echo get_theme_mod( "tgtext-1");} else {echo "First slide label";} ?>
								</span><!-- #tgtext-1 --></h1>
              <h5><span id="tgtext-4">
									<?php if( get_theme_mod( "tgtext-4") != "" ) {echo get_theme_mod( "tgtext-4");} else {echo "Insert your text here";} ?>
								</span><!-- #tgtext-4 --></h5>
            </div>
          </div>
          <div class="carousel-item">
            <span id="tgimg-2">		
              <img <?php if( get_theme_mod( "tgimg-2") != "" ) {echo "src='".get_theme_mod( "tgimg-2")."'";} else {echo " src='".get_template_directory_uri()."/img/old-couple.jpg'";} ?>
              id="sliderimg2" class="img-fluid d-block simg"/>
            </span><!-- #sliderimg2 -->
            <div class="carousel-caption d-none d-md-block cont2">
              <h1><span id="tgtext-2">
									<?php if( get_theme_mod( "tgtext-2") != "" ) {echo get_theme_mod( "tgtext-2");} else {echo "Second slide label";} ?>
								</span><!-- #tgtext-2 --></h1>
              <h5><span id="tgtext-5">
									<?php if( get_theme_mod( "tgtext-5") != "" ) {echo get_theme_mod( "tgtext-5");} else {echo "Insert your text here";} ?>
								</span><!-- #tgtext-5 --></h5>
            </div>
          </div>
          <div class="carousel-item">
            <span id="tgimg-3">		
              <img <?php if( get_theme_mod( "tgimg-3") != "" ) {echo "src='".get_theme_mod( "tgimg-3")."'";} else {echo " src='".get_template_directory_uri()."/img/people-old.jpg'";} ?>
              id="sliderimg3" class="img-fluid d-block simg"/>
            </span><!-- #sliderimg3 -->
            <div class="carousel-caption d-none d-md-block cont2">
              <h1><span id="tgtext-3">
									<?php if( get_theme_mod( "tgtext-3") != "" ) {echo get_theme_mod( "tgtext-3");} else {echo "Third slide label";} ?>
								</span><!-- #tgtext-3 --></h1>
              <h5><span id="tgtext-6">
									<?php if( get_theme_mod( "tgtext-6") != "" ) {echo get_theme_mod( "tgtext-6");} else {echo "Insert your text here";} ?>
								</span><!-- #tgtext-6 --></h5>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>
</div><!-- #slider -->

<div class="container mt-3 py-3">
  <div class="row">
    <div class="col-md-8">
      <div class="container" id="news">
        <div class="text-center mb-4"><h2><span id="tgtext-7">
									<?php if( get_theme_mod( "tgtext-7") != "" ) {echo get_theme_mod( "tgtext-7");} else {echo "News";} ?>
								</span><!-- #tgtext-7 --> </h2> </div>
        <div class="card mb-3 border-card">
          <span id="page_contentz_name1">
					</span>
					<div class="pagecontz-1 p-3">
						<?php if(( trim(get_theme_mod("page_contentz_name1")) != "default" )&&( trim(get_theme_mod("page_contentz_name1")) != "0" )) { $pagetoshow = get_theme_mod("page_contentz_name1"); if (!empty($pagetoshow)) {$args1 = array( "p" =>
						"$pagetoshow", "post_type" =>
						"page" ); $my_three_posts = new WP_Query( $args1 ); while ($my_three_posts ->
						have_posts()) : $my_three_posts ->
						the_post(); the_content(); endwhile;}else {echo "<p style=\"text-align:center;\">
						Select a page to show its content here using <strong>
						customize</strong>
						menu</p>
						";}} else {echo "<p style=\"text-align:center;\">
						Select a page to show its content here using <strong>
						customize</strong>
						menu</p>
						";} ?>	
					</div>
        </div><!-- show the last post -->
      </div><!-- #news -->
    </div><!-- .col-md-8 -->
    <div class="col-md-4">
      <div class="container" id="objectives">
        <div class="text-center mb-4">
          <h2><span id="tgtext-8">
									<?php if( get_theme_mod( "tgtext-8") != "" ) {echo get_theme_mod( "tgtext-8");} else {echo "Goals";} ?>
								</span><!-- #tgtext-8 --> </h2>
        </div>
        <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
          <li class="nav-item text-capitalize font-weight-bold">
            <a class="nav-link active" id="general-tab" data-toggle="tab" href="#general" role="tab" aria-controls="general" aria-selected="true">
                <span id="tgtext-8a">
									<?php if( get_theme_mod( "tgtext-8a") != "" ) {echo get_theme_mod( "tgtext-8a");} else {echo "general";} ?>
								</span><!-- #tgtext-8a --> 
            </a>
          </li>
          <li class="nav-item text-capitalize font-weight-bold">
            <a class="nav-link" id="especifico-tab" data-toggle="tab" href="#especifico" role="tab" aria-controls="especifico" aria-selected="false">
                <span id="tgtext-8b">
									<?php if( get_theme_mod( "tgtext-8b") != "" ) {echo get_theme_mod( "tgtext-8b");} else {echo "especifico";} ?>
								</span><!-- #tgtext-8b -->
            </a>
          </li>
        </ul>
        <div class="tab-content text-justify" id="myTabContent">
          <div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general-tab">
                <span id="tgtext-8ac">
									<?php if( get_theme_mod( "tgtext-8ac") != "" ) {echo get_theme_mod( "tgtext-8ac");} else {echo "Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, expedita.";} ?>
								</span><!-- #tgtext-8ac -->
          </div>
          <div class="tab-pane fade" id="especifico" role="tabpanel" aria-labelledby="especifico-tab">
                <span id="tgtext-8bc">
									<?php if( get_theme_mod( "tgtext-8bc") != "" ) {echo get_theme_mod( "tgtext-8bc");} else {echo "Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, expedita.";} ?>
								</span><!-- #tgtext-8bc -->
          </div>
        </div>
      </div><!-- #objectives -->
    </div><!-- .col-md-4 -->
  </div>
</div><!-- post -->


<div class="container" id="donar">
  <div class="row justify-content-center">
    <div class="col-md-4 mb-2 d-flex justify-content-center">
      <div class="card" style="width: 18rem;">
            <span id="tgback-5">		
              <img <?php if( get_theme_mod( "tgback-5") != "" ) {echo "src='".get_theme_mod( "tgback-5")."'";} else {echo " src='".get_template_directory_uri()."/img/sunset-odl.jpg'";} ?>
              id="cardimg5" class="img-fluid d-block simg"/>
            </span><!-- #sliderimg18 -->
        <div class="card-body" >
          <h5 class="card-title"><span id="tgtext-18">
									<?php if( get_theme_mod( "tgtext-18") != "" ) {echo get_theme_mod( "tgtext-18");} else {echo "Beneficios de donar";} ?>
								</span><!-- #tgtext-18 --></h5>
          <p class="card-text"><span id="tgtext-18a">
									<?php if( get_theme_mod( "tgtext-18a") != "" ) {echo get_theme_mod( "tgtext-18a");} else {echo "Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, expedita.";} ?>
								</span><!-- #tgtext-18a --></p>
        </div>
      </div>  
    </div>
    <div class="col-md-3"></div>
    <div class="col-md-4 mb-2 d-flex justify-content-center">
      <div class="card" style="width: 18rem;">
            <span id="tgback-6">		
              <img <?php if( get_theme_mod( "tgback-6") != "" ) {echo "src='".get_theme_mod( "tgback-6")."'";} else {echo " src='".get_template_directory_uri()."/img/sunset-odl.jpg'";} ?>
              id="cardimg6" class="img-fluid d-block simg"/>
            </span><!-- #sliderimg18 -->
        <div class="card-body" >
          <h5 class="card-title"><span id="tgtext-19">
									<?php if( get_theme_mod( "tgtext-19") != "" ) {echo get_theme_mod( "tgtext-19");} else {echo "Donar";} ?>
								</span><!-- #tgtext-19 --></h5>
          <p class="card-text"><span id="tgtext-19a">
									<?php if( get_theme_mod( "tgtext-19a") != "" ) {echo get_theme_mod( "tgtext-19a");} else {echo "Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, expedita.";} ?>
								</span><!-- #tgtext-19a --></p>
        </div>
      </div>  
    </div>
  </div>
     
</div><!-- #donar -->


<div class="container mt-3 mb-3 py-2" id="activities">
  <h3 class="text-center mb-3"><span id="tgtext-9">
									<?php if( get_theme_mod( "tgtext-9") != "" ) {echo get_theme_mod( "tgtext-9");} else {echo "Our activities";} ?>
								</span><!-- #tgtext-9 --></h3>
    <div class="row">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
        <div class="col-md-3 col-sm-12">
          <div class="card border-deck mb-3">
            <div class="card-header text-center mb-2">
              <a href="<?php the_permalink(); ?>">
                <h5><?php the_title(); ?></h5>
              </a>
            </div>
            <div class="card-body">
              <?php if ( has_post_thumbnail() ) : ?>
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                 <?php the_post_thumbnail('post-thumbnails', array('class' => 'card-img-top img-fluid')); ?>
                </a>
              <?php endif; ?>
            </div>
          </div>
        </div><!-- col-md-3 col-sm-12 -->
      <?php endwhile; endif; ?>
    </div><!-- row -->
</div><!-- #activities -->

<div class="container border-card mb-4">
  <div class="jumbotron jumbotron-fluid" style="background-image: url(<?php echo get_theme_mod("tgback-4"); ?>); background-repeat: no-repeat; background-size: cover;">
    <div class="container text-center cont2 ">
      <h1 class="display-5"><span id="tgtext-11">
									<?php if( get_theme_mod( "tgtext-11") != "" ) {echo get_theme_mod( "tgtext-11");} else {echo "About us";} ?>
								</span><!-- #tgtext-11 --></h1>
      <p class="lead"><span id="tgtext-12">
									<?php if( get_theme_mod( "tgtext-12") != "" ) {echo get_theme_mod( "tgtext-12");} else {echo "Short text of us";} ?>
								</span><!-- #tgtext-12 --></p>
      <a href="" type="button" class="btn btn-outline-primary active hvr-float-shadow"> + Información</a>
    </div>
  </div><!-- jumbotron jumbotron-fluid -->
</div><!-- container border-card mb-4 -->

<div id="galeria-sidebar" class="container sidebar">
  <h3 class="text-center mb-5"><span id="tgtext-10">
									<?php if( get_theme_mod( "tgtext-10") != "" ) {echo get_theme_mod( "tgtext-10");} else {echo "Galery";} ?>
								</span><!-- #tgtext-10 --></h3>

				<?php if ( is_active_sidebar( 'galeria-sidebar' ) ) : ?>
					<?php dynamic_sidebar( 'galeria-sidebar' ); ?>
				<?php else : ?>
					<!-- Time to add some widgets! -->
				<?php endif; ?>
</div><!-- Galeria -->

