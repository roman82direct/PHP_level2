<?php
require_once "../config/config.php";
require_once '../Twig/Autoloader.php';

Twig_Autoloader::register();

try {
    $loader = new Twig_Loader_Filesystem('../templates');
    $twig = new Twig_Environment($loader);
    $template = $twig->loadTemplate('gallery.tmpl');

    $result = $db->query("SELECT * FROM `goods` order by `id` desc LIMIT 4");

    echo $template->render(array('data' => $result));

} catch (Exception $e) {
    die ('ERROR: ' . $e->getMessage());
}
?>

