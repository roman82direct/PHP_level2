<?php
//include "Quantgoods.php";

class Digitalgoods extends Quantgoods {
    private $newPrice;

    public function __construct($title, $type, $quantity, $price, $sebes, $soldQuant) {
        $this->newPrice = $price/2;
        parent::__construct($title, $type, $quantity, $this->newPrice, $sebes, $soldQuant);
    }
    function render(){
        $show = parent::render(). ' Новая цена на товар типа: '. $this->getType(). ' составляет ' .$this->newPrice . '<hr>';
        return $show;
    }

}