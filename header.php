<!doctype html>
<html lang='en'>
<head>
    <meta charset='utf-8'>
    <title></title>
    <?php wp_head(); ?>
</head>
<body>

<header>
   <div class="container">
<?php
    wp_nav_menu(
        array(
            'theme_location' => 'top-menu',
            'menu_class' => 'top-menu'
        )
    );
?>
    </div>
</header>  