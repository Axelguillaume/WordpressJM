<?php
/*
Template Name: Articles
*/
?>

	<?php get_header(); ?> <!-- ouvrir header.php --> 
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


