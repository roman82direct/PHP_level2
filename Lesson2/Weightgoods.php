<?php
//include "Quantgoods.php";

class Weightgoods extends Quantgoods {
    private $newPrice;
    public function __construct($title, $type, $quantity, $price, $sebes, $soldQuant) {
        parent::__construct($title, $type, $quantity, $price, $sebes, $soldQuant);
    }
    private function calcPrice($weight){
        if ($weight < 10){
            $this->newPrice = $this->getPrice()*1.1;
        } else {
            $this->newPrice = $this->getPrice()*0.9;
        }
        return $this->newPrice;
    }

    function render(){
        $show = parent::render(). ' Цена за килограмм товара типа: '. $this->getType(). ' составляет ' .$this->calcPrice(20). '<br>'.
        'Было продано: '.$this->getSold() .' килограмм по себестоимости '.$this->getSebes() .'<hr>';
        return $show;
    }
}