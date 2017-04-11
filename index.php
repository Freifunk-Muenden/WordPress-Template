<?php
get_header();
?>
<main itemscope itemtype="http://schema.org/Blog" class="col-md-8">
    <?php
    if (have_posts()) {
        while (have_posts()) : the_post();
            ?>
            <section class="news">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <article><?php the_content(); ?></article>

                <small class="author">Veröffentlicht von <?php the_author(); ?> am <?php the_date(); ?></small>
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
