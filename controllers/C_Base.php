<?php
require_once '../controllers/C_Controller.php';
//require_once '../vendor/twig/twig/src/Loader/FilesystemLoader.php';
//
// Базовый контроллер сайта.
//
abstract class C_Base extends C_Controller
{
	protected $title;		// заголовок страницы
	protected $content;		// содержание страницы


	protected function before(){
		$this->title = 'Gamers |';
	}
	
	protected function render($template, $args){
		$arg = $args;
		$loader = new \Twig\Loader\FilesystemLoader('./views/');
		$twig = new \Twig\Environment($loader);
		if (isset($_SESSION['basket'])){
            $goodsInBasket = count($_SESSION['basket']);
        } else {
            $goodsInBasket = 0;
		}
		$arg['goodsInBasket'] = $goodsInBasket;
		$arg['user'] = $_SESSION['user'];
		echo $twig->render($template, $arg);	
	}
}
