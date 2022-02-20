<?php

get_header();
?>
<?php

$context = Timber::context();
$context['post'] = new Timber\Post();
$context['mainMenu'] = new \Timber\Menu('main-menu');

Timber::render( '/templates/parts/menu.twig', $context);
Timber::render( '/templates/parts/slider.twig', $context);
Timber::render('./templates/parts/single.twig', $context);


?>
<?php

get_footer();