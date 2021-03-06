<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes() ?>><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" <?php language_attributes() ?>><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" <?php language_attributes() ?>><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" <?php language_attributes() ?>><!--<![endif]-->
    <head>
      <meta charset="<?php bloginfo( 'charset' ) ?>">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta name="viewport" content="width=device-width">
      <title><?php wp_title( '|', true, 'right' ) ?></title>
      <link rel="icon" href="wp-content/themes/yeopress/images/favicon.png" type="image/x-icon" />
      <link rel="shortcut icon" href="wp-content/themes/yeopress/images/favicon.png" type="image/x-icon" />
      <meta name="author" content="Patricio Testolin">
      <meta name="google-site-verification" content="miM-HeYubOPHdbwSZPTxGS8OIL5PQxYtTi04TEFp35w" />
      <?php wp_head() ?>
    </head>
    <body <?php body_class() ?>>
      <div class="overlay-menu">
        <a href="#" class="overlay-menu__title icon-arrow-back"></a>
        <div class="overlay-menu__wrapper">
          <ul class="overlay-menu__list">
            <li class="overlay-menu__list__item"><a href="/">Inicio</a></li>
            <li class="overlay-menu__list__item"><a href="/hacer">Hacer</a></li>
            <li class="overlay-menu__list__item"><a href="/pensar">Pensar</a></li>
            <li class="overlay-menu__list__item"><a href="/explorar">Explorar</a></li>
            <li class="overlay-menu__list__item"><a href="/cambiar">Cambiar</a></li>
          </ul>
        </div>
      </div>

      <header class="header">
        <a class="header__lg" href="<?php bloginfo('url') ?>" title="<?php bloginfo('name') ?> - <?php bloginfo('description') ?>"></a>
        <div class="header__wrapper">
          <div class="header__share">
            <ul class="header__share__list">
              <li class="header__share__list__item"><a href="https://www.facebook.com/AconcaguaLat" target="_blank" class="icon-facebook"></a></li>
              <li class="header__share__list__item"><a href="https://twitter.com/AconcaguaLat" target="_blank" class="icon-twitter"></a></li>
              <li class="header__share__list__item"><a href="https://www.instagram.com/AconcaguaLat/" target="_blank" class="icon-instagram"></a></li>
            </ul>
            <div class="header__share__link">
              <a href="#" class="header__share__link__icon icon-arrow-next"></a>
            </div>
          </div>
          <nav class="header__nav">
            <ul class="header__nav__list">
              <li class="header__nav__list__item"><a href="/hacer">Hacer</a></li>
              <li class="header__nav__list__item"><a href="/pensar">Pensar</a></li>
              <li class="header__nav__list__item"><a href="/explorar">Explorar</a></li>
              <li class="header__nav__list__item"><a href="/cambiar">Cambiar</a></li>
            </ul>
          </nav>
        </div>
        <a href="#" class="header__hamb icon-hamb"></a>
      </header>

    <div class="main">
