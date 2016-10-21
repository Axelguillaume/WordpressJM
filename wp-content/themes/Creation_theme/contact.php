<?php
/*
Template Name: Contact
*/
?>

	<?php get_header(); ?> <!-- ouvrir header.php --> 
	<footer id="contact">
			<div class="container-fluid">
				<div class="row">
					<div class="text-center">
						<h1>Contact</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<form class="form-horizontal" role="form" method="post" action="index.php">
							<div class="form-group">
								<div class="col-md-6">
									<input type="text" class="form-control" id="name" name="name" placeholder="Nom et Prénom*" value="">
								</div>
								<div class="col-md-6 animated wow bounceInRight">
									<input type="email" class="form-control" id="email" name="email" placeholder="Email*" value="">
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-12">
									<textarea class="form-control" rows="7" name="message" placeholder="Message"></textarea>
								</div>
							</div>
							<div class="form-group">
								<div class="text-center">
									<input id="submit" name="submit" type="submit" value="Envoyer" class="btn btn-danger">
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
	</footer>
	<?php get_footer(); ?>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="<?php bloginfo('url'); ?>/wp-content/themes/Creation_theme/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('url'); ?>/wp-content/themes/Creation_theme/bootstrap-3.3.7-dist/js/bootstrap.js"></script>
</body> 
</html>