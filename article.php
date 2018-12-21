<article class="our-service">
    <div class="row no-gutters one">
        <div class="col-12">
            <h2><?php echo get_cat_name(11);?></h2>
            <blockquote class="block-p">
            <?php echo category_description(11)?>
        </blockquote>
        </div>

<?php $the_query = new WP_Query( array( "cat" => 11, "posts_per_page" => 10, "order" => "ASC" ) );
// order asc prend article dans ordre creation
if ($the_query->have_posts() ) :
    while ($the_query->have_posts() ) : $the_query->the_post(); ?>
     <div class="col-12 col-md-4">
            <h4 class="emo"><?php echo get_post_meta(get_the_ID(),'iconeOur', true);?>
             <?php the_title();?></h4>
             <?php the_content();?>
                <ul>
                    <li><?php echo get_post_meta(get_the_ID(), 'icone', true);echo get_post_meta(get_the_ID(), 'texte1', true);?></li>
                    <li><?php echo get_post_meta(get_the_ID(), 'icone', true);echo get_post_meta(get_the_ID(), 'texte2', true);?></li>
                    <li><?php echo get_post_meta(get_the_ID(), 'icone', true);echo get_post_meta(get_the_ID(), 'texte3', true);?></li>
                </ul>
    </div>
<?php endwhile;
endif;?>
<button type="button" name="button"><a href="#">View all services</a></button>
    </div>
</article>


<article class="our-product">
    <div class="row no-gutters">
        <div class="col-12 tow">
            <h2><?php echo get_cat_name(14);?></h2>
            <blockquote class="block-p">
            <?php echo category_description(14)?>
            </blockquote>
        </div>
    <?php $the_query = new WP_Query( array( "cat" => 14, "posts_per_page" => 10, "order" => "ASC" ) );
    if ($the_query->have_posts() ) :
        while ($the_query->have_posts() ) : $the_query->the_post(); ?>
    <div class="col-12 col-md-4 cont">
        <?php the_post_thumbnail("full");?>
        <div class="text">
            <h4><?php the_title();?></h4>
            <?php the_content();?>
        </div>

   </div>
<?php endwhile;
endif;?>
<button name="button" type="button"><a href="#">View all services</a></button>

</div>
</article>


<article class="more-benfits">
    <div class="row no-gutters">
        <div class="col-12 conta">
            <blockquote class="block-art">
            <h4><?php echo get_cat_name(16);?></h4>
            <?php echo category_description(16)?>
        </blockquote>
        </div>

    <?php $the_query = new WP_Query( array( "cat" => 16, "posts_per_page" => 10, "order" => "ASC"  ) );
    if ($the_query->have_posts() ) :
        while ($the_query->have_posts() ) : $the_query->the_post(); ?>
        <div class="col-12 col-md-4 benfits">
            <?php the_post_thumbnail("full");?>
            <h4><?php echo get_post_meta(get_the_ID(), 'icone', true);?>
            <?php the_title();?></h4>
            <?php the_content();?>
        </div>
    <?php endwhile;
    endif;?>
    </div>
</article>
