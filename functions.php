<?php

define('ffhmue_themePath', realpath(dirname(__FILE__)));

require_once ffhmue_themePath . '/includes/menus.php';
require_once ffhmue_themePath . '/includes/sidebars.php';

remove_action('wp_head', 'wp_generator');
