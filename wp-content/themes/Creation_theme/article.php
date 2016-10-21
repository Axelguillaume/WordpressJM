<?php
/*
Template Name: Articles
*/
?>

	<?php get_header(); ?> <!-- ouvrir header.php -->
	<div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div id="slider" class="carousel slide" data-ride="carousel">
                      <!-- Indicators -->
                      <ol class="carousel-indicators">
                        <li data-target="#slider" data-slide-to="0" class="active"></li>
                        <li data-target="#slider" data-slide-to="1"></li>
                        <li data-target="#slider" data-slide-to="2"></li>
                      </ol>

                      <!-- Wrapper for slides -->
                      <div class="carousel-inner" role="listbox">
                        <div class="item active">
                          <img src="<?php bloginfo('url'); ?>/wp-content/themes/Creation_theme/images/slider1.jpg" alt="...">
                          <div class="carousel-caption">
                            <h1>Jacqueline & Michelle</h1>
                          </div>
                        </div>
                        <div class="item">
                          <img src="<?php bloginfo('url'); ?>/wp-content/themes/Creation_theme/images/slider2.jpg" alt="...">
                          <div class="carousel-caption">
                            <h1>Jacqueline & Michelle</h1>
                          </div>
                        </div>
                        <div class="item">
                          <img src="<?php bloginfo('url'); ?>/wp-content/themes/Creation_theme/images/slider3.jpg" alt="...">
                          <div class="carousel-caption">
                            <h1>Jacqueline & Michelle</h1>
                          </div>
                        </div>
                      </div>

                      <!-- Controls -->
                      <a class="left carousel-control" href="#slider" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="right carousel-control" href="#slider" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                </div>
            </div>
    </div> 
	<div class="container">
		<div class="row">
			<div class="col-md-2">
			<?php get_sidebar(); ?>	
			</div>
			<div class="article">
				<div class="col-md-10">
					<div class="text-center">
						<h1>Retrouvez tous nos articles ici</h1>
						<ul>
							<?php
							    $recentPosts = new WP_Query();
							    $recentPosts->query();

							?>
							<?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); the_post_thumbnail('large'); ?>
							    <li>
							    	<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?> </a>
							    	<?php the_excerpt(); ?>
							    </li>
							<?php endwhile; ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php get_footer(); ?>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="<?php bloginfo('url'); ?>/wp-content/themes/Creation_theme/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('url'); ?>/wp-content/themes/Creation_theme/bootstrap-3.3.7-dist/js/bootstrap.js"></script>
</body> 
</html>


