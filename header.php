<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title><?php echo (isset($page['title']) ? $page['title'] . ' | ' : ''); ?>Freifunk Hann. Münden</title>

        <link href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo get_stylesheet_directory_uri(); ?>/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <?php
        wp_head();
        ?>
    </head>
    <body>
        <header>
            <div class="container">
                <div id="rhombus">
                    <a href="/"><img src="/wp-content/themes/ffhmue/images/logo_oT_298px.png" alt="Freifunk Hann. Münden" id="ffLogo" /></a>
                </div>
                <span id="title"><?php bloginfo('name'); ?></span>
                <span id="subtitle">freies Mitmach-Netz • ohne Risiken • für alle</span>
               <!-- <img src="/style/images/rathaus.png" alt="Rathaus Hann. Münden" style="float: right; height: 70px; position: absolute; bottom: 0;" />-->
            </div>
            <nav><div class="container"><?php wp_nav_menu(array('theme_location' => 'main-menu', 'depth' => '2')); ?></div></nav>
            <?php
            ?>
        </header>
        <div class="container whiteContainer rows" style="margin: 0 auto;">