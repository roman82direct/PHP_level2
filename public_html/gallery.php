<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/config/config.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/Twig/Autoloader.php');
require_once($_SERVER['DOCUMENT_ROOT'] . '/models/dataDB.php');
Twig_Autoloader::register();

    try {
        $loader = new Twig_Loader_Filesystem('../views');
        $twig = new Twig_Environment($loader);
        $user = $_SESSION['email'];

        if ($user) {
            $template = $twig->loadTemplate('user.tmpl');
        } else {
            $template = $twig->loadTemplate('gallery.tmpl');
        }

        $str = "SELECT * FROM `goods` order by `id` desc LIMIT 4";
        echo $template->render(array('data' => getData($str, $db), 'user' => $user));

    } catch (Exception $e) {
        die ('ERROR: ' . $e->getMessage());

}
?>

