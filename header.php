<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wpElementCore
 */

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/be944c981e.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>

  <?php wp_head(); ?>
</head>

<body>
  <div class="ver-desk">
    <nav class="nav">
      <a href="/" class="logo"></a>
      <div class="nav-items-wrapper">
      <div class="nav-item"><a href="/spaces">Пространства</a></div>
      <div class="nav-item"><a href="/partnership">Сотрудничество</a></div>
      <div class="nav-item"><a href="/contacts">О нас</a></div>
      <div class="nav-item"><a href="tel:+7(778)784-79-97">+7&nbsp;(778)&nbsp;784-79-97</a></div>
      <div class="nav-item social">
        <a href="https://wa.me/77787847997"><i class="fab fa-whatsapp"></i></a>
        <a href="https://www.instagram.com/element1_astana/"><i class="fab fa-instagram"></i></a>
        <a href=""><i class="fas fa-envelope"></i></a>
      </div>
      </div>
    </nav>