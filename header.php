<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet"href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="container-fluid p-0">


	<div class="font">
		<header>
			<!-- pour faire nav responsive j'ai integré div class nav bootstrap  -->

			<nav class="nav-one navbar navbar-expand-md navbar-light">
		 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		   <span class="navbar-toggler-icon"></span>
		 </button>
		 		<?php wp_nav_menu(array( "container_class" => "collapse navbar-collapse", "container_id" => "navbarSupportedContent")); ?>
			</nav>
			<?php //wp_nav_menu(array('menu' => 'Accueil')); ?>
			<?php //wp_nav_menu(array('menu' => 'Page one')); ?>
		<?php

		if (is_page(65)):
			$the_query = new WP_Query( array( "category_name" => "header", "posts_per_page" => 10 ) );
			if ($the_query->have_posts() ) :
			    while ($the_query->have_posts() ) : $the_query->the_post(); ?>
		        <div class="contenu col-12 col-md-4"> <!-- responsive -->
		             <div class="caption">
						 <h1><?php the_title(); ?></h1>
						 <?php the_content();?>
						 <a href="#footer">scrowl down <i class="fas fa-arrow-circle-down"></i></a>
					 </div>
		         </div>
		<?php endwhile;
			endif;
		else :
			if ( have_posts() ) :
				while ( have_posts() ) : the_post(); ?>
			 <?php the_content();
				 endwhile;
			endif;
		endif; ?>
	</header>


	</div>
