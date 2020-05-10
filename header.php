<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body>
    <span id="span-top"></span>
    <header>
        <div class="header-content">
            <h1><a href="/" title="escrever código">EC</a></h1>

            <nav>
                <?php wp_nav_menu( array(
                    'theme_location' => 'menu-1',
                    'container' => 'nav',
                    'menu_class' => 'menu'
                ) ); ?>
            </nav>
        </div>
    </header>
