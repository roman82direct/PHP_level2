<?php
//Базовый класс

class Quantgoods extends Good {
//    private $id;
    private $title;
//    private $description;
    private $type; //Digital, Quant, Weight
    private $quantity; //количество на складе
    private $price; //отпускная цена
    private $sebes; //себестоимость
    private $soldQuant; //проданное количество

    public function __construct($title, $type, $quantity, $price, $sebes, $soldQuant){
        $this->title = $title;
        $this->type = $type;
        $this->quantity = $quantity;
        $this->price = $price;
        $this->sebes = $sebes;
        $this->soldQuant = $soldQuant;
    }

//    public function getTitle(){
//        return $this->title;
//    }
//    public  function getDescription(){
//        return $this->description;
//    }
    public function getType(){
        return $this->type;
    }
    public  function getQuantity(){
        return $this->quantity;
    }
    public  function getPrice(){
        return $this->price;
    }
    public  function getSebes(){
        return $this->sebes;
    }
    public  function getSold(){
        return $this->soldQuant;
    }

    public function getTotalPrice() {
        return $this->price * $this->quantity;
    }

    public function getProfit(){
        return  $this->price * $this->soldQuant - $this->sebes * $this->soldQuant;
    }

    function render(){
        $show = 'Наименование: '.'<h3>'.$this->title.'</h3>' .'<br>'.
                'Тип товара: '.$this->type. '<br>'.
                'Количество на складе: '.$this->quantity.'<br>'.
                'Цена за единицу: '.$this->price. '<br>'.
                'Общая стоимость товара в магазине: '.$this->getTotalPrice(). '<br>'.
                'Прибыль от продажи товаров типа '.$this->type. ' составляет: '.$this->getProfit(). '<hr>';
        return $show;
    }
}

