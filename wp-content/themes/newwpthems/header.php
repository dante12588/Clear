<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(  ) ?>">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/libs/owl.theme.default.css'; ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri().'/libs/owl.carousel.css'; ?>">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">


</head>
<body>

<?php


$args = array(
    'post_type' => 'test',
);

$context = Timber::context();
$context['post'] =  Timber::get_posts( $args );
$context['topMenu'] = new \Timber\Menu('top-menu');


Timber::render('./templates/parts/header.twig');
Timber::render( '/templates/parts/menus/top-menu.twig', $context);

?>