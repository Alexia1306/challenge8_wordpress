<?php
/*
Template Name: home
*/
?>

<?php get_header();?>
<main class="row no-gutters">
    <div class="col-12">
		<?php get_template_part('post'); ?>
        <?php get_template_part('article'); ?>
    </div>
</main>
 <?php get_footer(); ?>
