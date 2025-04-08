<?php

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc.
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 *
 * @var \App\View\AppView $this
 */

$cakeDescription = 'Sipa-2025: le salon international de la production animale';
?>
<!DOCTYPE html>
<html>

<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?> </title>



    <!-- Chargement des CSS additionnels -->
    <?= $this->Html->css([
        'assets/css/bootstrap.min.css',
        'assets/css/owl.carousel.min.css',
        'assets/css/slicknav.css',
        'assets/css/animate.min.css',
        'assets/css/magnific-popup.css',
        'assets/css/fontawesome-all.min.css',
        'assets/css/themify-icons.css',
        'assets/css/slick.css',
        'assets/css/nice-select.css',
        'assets/css/style.css'
    ]) ?>
    <!-- Swiper CSS -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>

<body>
    <?= $this->element('website/header'); ?>

    <main>
        <?= $this->fetch('content'); ?>
    </main>

    <?= $this->element('website/footer'); ?>

    <?= $this->Html->script([
        'assets/js/vendor/modernizr-3.5.0.min.js',
        'assets/js/vendor/jquery-1.12.4.min.js',
        'assets/js/popper.min.js',
        'assets/js/bootstrap.min.js',
        'assets/js/jquery.slicknav.min.js',
        'assets/js/owl.carousel.min.js',
        'assets/js/slick.min.js',
        'assets/js/gijgo.min.js',
        'assets/js/wow.min.js',
        'assets/js/animated.headline.js',
        'assets/js/jquery.magnific-popup.js',
        'assets/js/jquery.scrollUp.min.js',
        'assets/js/jquery.nice-select.min.js',
        'assets/js/jquery.sticky.js',
        'http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js',
        'assets/js/jquery.counterup.min.js',
        'assets/js/contact.js',
        'assets/js/jquery.form.js',
        'assets/js/jquery.validate.min.js',
        'assets/js/mail-script.js',
        'assets/js/jquery.ajaxchimp.min.js',
        'assets/js/plugins.js',
        'assets/js/main.js'
    ]) ?>
</body>

</html>