<?php
require_once '../Twig/Autoloader.php';
Twig_Autoloader::register();

try {
  $loader = new Twig_Loader_Filesystem('../templates');
  $twig = new Twig_Environment($loader);
  $template = $twig->loadTemplate('index.tmpl');
  
  $images = array_slice(scandir("../img"), 2);

  echo $template->render(array(
            'title' => 'Галерея MODAL',
            'images' => $images
            ));

} catch (Exception $e) {
  die ('ERROR: ' . $e->getMessage());
}
?>
