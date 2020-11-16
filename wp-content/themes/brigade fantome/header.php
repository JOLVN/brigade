<!DOCTYPE html>
<html <?php language_attributes(); ?>lang="fr">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> - <?php bloginfo('description');?></title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Obligatoire -->
    <?php wp_head(); ?>
</head>
<body>
    <div class="container">
    <header>
        <h1>
            <?php bloginfo('name'); ?>
        </h1>
        <h2>
            <?php bloginfo('description') ?>
        </h2>
        <nav id="menuprincipal">
             <div id="legendemenuprincipal"> Menu principal </div>
             <!-- Ajout de l'acceuil dans le menu principal -->
            <li><?php wp_page_menu('show_home=1'); ?></li>
        </nav>
    <header>
    </div>


