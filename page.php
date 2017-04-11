<?php
get_header();
?>
<main itemscope itemtype="http://schema.org/Blog" class="col-md-8">
    <?php
    if (have_posts()) {
        while (have_posts()) : the_post();
            ?>
            <section class="news">
                <h2><?php the_title(); ?></h2>
                <article><?php the_content(); ?></article>
                <small class="author">Zuletzt geändert am <?php echo get_post_modified_time(get_option('date_format')); ?></small>
                <div class="clear"></div>
                <hr class="newsDivider" />
            </section>
            <?php
        endwhile;
    }
    ?>
</main>
<?php
get_footer();
