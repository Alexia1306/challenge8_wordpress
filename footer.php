<footer id="footer">
    <div class="row no-gutters">
        <div class="col-12 col-md-6 col-lg-4 ">
            <h2><?php echo get_cat_name(19);?></h2>
            <?php echo category_description(19)?>
            <?php $the_query = new WP_Query( array( "cat" => 19, "posts_per_page" => 10, "order" => "ASC"  ) );
            if ($the_query->have_posts() ) :
                while ($the_query->have_posts() ) : $the_query->the_post(); ?>
                    <h3><?php the_title(); ?></h3>
                    <?php the_content();?>
                    <div class="col-12 col-md-6 ">
                        <?php the_post_thumbnail("full");?>
                    </div>
                    <div class="symbole">
                        <?php echo get_post_meta(get_the_ID(), 'icone1', true);
                        echo get_post_meta(get_the_ID(), 'icone2', true);
                        echo get_post_meta(get_the_ID(), 'icone3', true);?>
                    </div>

            <?php endwhile;
        endif;?>
        </div>
        <!-- col-4 -->



<div class="col-12 col-md-6 col-lg-4 ">
    <h2 class="ml-3"><?php echo get_cat_name(20);?></h2>
        <?php echo category_description(20)?>
        <?php $the_query = new WP_Query( array( "cat" => 20 ,"posts_per_page" => 10, "order" => "ASC"  ) );
            if ($the_query->have_posts() ) :
                while ($the_query->have_posts() ) : $the_query->the_post(); ?>
                    <div class="row p-4">
                        <div class="col-12 col-md-3  image">
                            <?php the_post_thumbnail("full");?>
                        </div>

                        <div class="col-12 col-md-9 popular-text">
                            <?php the_content();?>
                        </div>
                    </div>
            <?php endwhile;
        endif;?>
    </div>
    <!-- col-4 -->


    <div class="col-12 col-md-6 col-lg-4 ">
        <h2><?php echo get_cat_name(21);?></h2>
        <?php echo category_description(21)?>
    <?php $the_query = new WP_Query( array( "category_name" => "recent-post","posts_per_page" => 10, "order" => "ASC"  ) );
    if ($the_query->have_posts() ) :            while ($the_query->have_posts() ) : $the_query->the_post(); ?>
        <div class="row p-4">
            <div class="col-12 col-md-3 image">
                <?php the_post_thumbnail("full");?>
            </div>

            <div class="col-12 col-md-9 post-recent">
                <?php the_content();?>
            </div>
        </div>
    <?php endwhile;
    endif;?>
</div>
    <!-- col-4 -->
</div>
<!-- row -->
    </footer>
    <?php wp_footer(); ?>
</div>
<!-- je ferme le container fluid du header -->

    </body>
</html>
