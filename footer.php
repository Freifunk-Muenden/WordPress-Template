<?php
get_sidebar();
?>
</div>
<div class="clear"></div>
<footer>
    <div class="container rows">
        <div class="col-md-4"><?php dynamic_sidebar('footer_1'); ?>&nbsp;</div>
        <div class="col-md-4"><?php dynamic_sidebar('footer_2'); ?>&nbsp;</div>
        <div class="col-md-4"><?php dynamic_sidebar('footer_3'); ?>&nbsp;</div>
        <div class="col-md-4"><?php dynamic_sidebar('footer_4'); ?>&nbsp;</div>
        <!--<div class="menu-footer-container">
            <ul id="menu-footer" class="menu">
                <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/materialsammlung/">Materialsammlung</a></li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/wiki/wie-kann-ich-mitmachen/">Wie kann ich mitmachen?</a></li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="/impressum/">Impressum</a></li>
            </ul>
        </div>-->
    </div>
</footer>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/ga.js" type="text/javascript"></script>
</body>
</html>