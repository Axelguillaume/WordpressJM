	<?php get_header(); ?> <!-- ouvrir header,php --> 
	<div id="content"> 
		<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?> 
			<div class="post" id="post-<?php the_ID(); ?>"> 
				<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2> 
				<div class="post_content"> <?php the_excerpt(); ?> 
				</div> 
			</div> 
		<?php endwhile; ?> 
		<?php endif; ?> 
	</div>
	<?php get_footer(); ?>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="wp-content/themes/Creation_theme/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <script src="wp-content/themes/Creation_theme/bootstrap-3.3.7-dist/js/bootstrap.js"></script>
</body> 
</html>