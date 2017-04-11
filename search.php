<?php
get_header();
?>
<main itemscope itemtype="http://schema.org/Blog" class="col-md-8">
    <h2>Suchergebnisse</h2>
    <?php
    if (have_posts()) {
        while (have_posts()) : the_post();
            ?>
            <section class="news">
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <article><?php the_excerpt(); ?></article>
                <div class="clear"></div>
                <hr class="newsDivider" />
            </section>
            <?php
        endwhile;
    } else {
        ?>
        <p>Leider konnten wir keine Ergebnisse zu deinem Suchbegriff finden.</p>
        <?php
    }
    ?>
</main>
<?php
get_footer();
