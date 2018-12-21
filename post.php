<div class="row no-gutters">
<?php
 // $the_query = new WP_Query( array( "category_name__in" => [ "main", "photo-large"], "posts_per_page" => 10 ) );


$the_query = new WP_Query( array( "category_name" => "main", "posts_per_page" => 10 ) );


if ($the_query->have_posts() ) :
    while ($the_query->have_posts() ) : $the_query->the_post(); ?>


    <div class="contenu col-12 col-md-6 col-lg-4 col-xl-3 mx-auto">
        <picture class="image">
            <?php the_post_thumbnail("full");?>
        </picture>
    </div>
<?php endwhile;
endif;


$the_query = new WP_Query( array( "category_name" => "photo-large", "posts_per_page" => 10 ) );


if ($the_query->have_posts() ) :
    while ($the_query->have_posts() ) : $the_query->the_post(); ?>


    <div class="contenu col-12 col-md-6 mx-auto">

            <?php the_post_thumbnail("full");?>

    </div>
<?php endwhile;
endif;?>
</div>
