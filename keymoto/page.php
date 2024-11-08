<?php
 get_header();
?>

<!--Main Start-->
<div class="fl_main">
<?php if (keymoto_get_theme_mod('page_padding_top',true) != 'false') { ?>
    <div class="fl-page-padding top"></div>
<?php } ?>
    <!--Main content Start-->
<div class="fl_content_story container">
    <!--Sidebar End-->
    <div class="fl_content page-template content">
        <div class="fl-content-wrapper single-page-wrapper">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <!--Content Start-->
            <?php get_template_part('template-parts/content' );?>

        <?php endwhile; else: ?>
            <?php get_template_part('template-parts/content','none');?>
        <?php endif; ?>
        <!--Content End-->
        <!--Comment Start-->
        <?php if (comments_open()) : ?>
            <?php comments_template(); ?>
        <?php endif; ?>
            <!--Comment End-->
        </div>
    </div>
</div>
    <!--Main content End-->

<?php if (keymoto_get_theme_mod('page_padding_bottom',true) != 'false') { ?>
    <!--Padding bottom Start-->
    <div class="fl-page-padding bottom"></div>
    <!--Padding bottom End-->
<?php } ?>

</div>
<!--Main End-->
    <!--Footer Start-->
<?php get_footer(); ?>
    <!--Footer End-->

