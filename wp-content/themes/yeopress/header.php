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
      <meta name="author" content="">
      <link rel="author" href="">
      <?php wp_head() ?>
    </head>
    <body <?php body_class() ?>>
      <header class="header">
        <a class="header__lg" href="<?php bloginfo('url') ?>" title="<?php bloginfo('name') ?> - <?php bloginfo('description') ?>"></a>
        <div class="header__wrapper">
          <div class="header__share">
            <ul class="header__share__list">
              <li class="header__share__list__item header__share__list__item--fb"><a href="#" class=""></a></li>
              <li class="header__share__list__item header__share__list__item--fb"><a href="#" class=""></a></li>
            </ul>
            <div class="header__share__link">
              <a href="#" class="header__share__link__icon"></a>
            </div>
          </div>
          <nav class="header__nav">
            <ul class="header__nav__list">
              <li class="header__nav__list__item"><a href="/aconcagua/hacer">Hacer</a></li>
              <li class="header__nav__list__item"><a href="/aconcagua/pensar">Pensar</a></li>
              <li class="header__nav__list__item"><a href="/aconcagua/explorar">Explorar</a></li>
              <li class="header__nav__list__item"><a href="/aconcagua/cambiar">Cambiar</a></li>
            </ul>
          </nav>
        </div>
        <a href="#" class="header__hamb"></a>
      </header>

    <div class="main">
