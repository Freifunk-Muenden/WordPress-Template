<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title><?php echo (isset($page['title']) ? $page['title'] . ' | ' : ''); ?>Freifunk Hann. Münden</title>

        <link href="/wp-content/themes/ffhmue/style.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="/wp-content/themes/ffhmue/webfonts/font-awesome-4.7.0/css/font-awesome.min.css" />

        <link href="/wp-content/themes/ffhmue/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>

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
            </div>
            <nav><div class="container"><?php wp_nav_menu(array('theme_location' => 'main-menu', 'depth' => '2')); ?></div></nav>
        </header>
        <div class="container whiteContainer rows" style="margin: 0 auto;">