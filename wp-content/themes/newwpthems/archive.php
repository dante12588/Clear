<?php 
get_header();

$categories = wp_title( '', false);
$test= Timber::context();
$context['mainMenu'] = new \Timber\Menu('main-menu');
$test['archive'] =  Timber::get_posts( ['post_type'=>$categories] );
Timber::render( '/templates/parts/menu.twig', $context);
Timber::render( '/templates/parts/archive.twig', $test);