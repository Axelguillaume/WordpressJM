	<?php get_header(); ?> <!-- ouvrir header,php --> 
	<!-- <div id="content"> 
		<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?> 
			<div class="post" id="post-<?php the_ID(); ?>"> 
				<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2> 
				<div class="post_content"> <?php the_excerpt(); ?> 
				</div> 
			</div> 
		<?php endwhile; ?> 
		<?php endif; ?> 
	</div> -->
	
	

	<div class="carou">
		<div class="container-fluid">
			<div class="row">
			<div class="text-center">
			<h1>Retrouvez les 3 derniers articles ici</h1>
			</div>
				<div class="col-md-6 col-md-offset-3">
					<div id="slider" class="carousel slide" data-ride="carousel">
						<!-- Indicators -->
						<ol class="carousel-indicators">
							<li data-target="#slider" data-slide-to="0" class="active"></li>
							<li data-target="#slider" data-slide-to="1"></li>
							<li data-target="#slider" data-slide-to="2"></li>
							<li data-target="#slider" data-slide-to="3"></li>
						</ol>

						<!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">
							<div class="item active">
								<img src="<?php bloginfo('url'); ?>/wp-content/themes/Creation_theme/images/titre.jpg">
								
							</div>
							<?php
								$recentPosts = new WP_Query();
								$recentPosts->query('showposts=3');
								?>
								<?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
							<div class="item">
								<?php the_post_thumbnail('large'); ?>"
								<div class="carousel-caption">
									<h1><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?> </a></h1>
								</div>
							</div>
							<?php endwhile; ?>
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
	</div>

	<div class="container-fluid separation">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="col-md-4">
					<div class="text-center">
						<img src="<?php bloginfo('url'); ?>/wp-content/themes/Creation_theme/images/1230.png" alt="" class="img-responsive">
						<h2>Vidéo Réalisées</h1>
						</div>
					</div>
					<div class="col-md-4">
						<div class="text-center">
							<img src="<?php bloginfo('url'); ?>/wp-content/themes/Creation_theme/images/120.png" alt="" class="img-responsive">
							<h2>Paires de Chaussures</h1>
							</div>
						</div>
						<div class="col-md-4">
							<div class="text-center">
								<img src="<?php bloginfo('url'); ?>/wp-content/themes/Creation_theme/images/50000.png" alt="" class="img-responsive">
								<h2>Followers</h1>
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