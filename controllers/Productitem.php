<?php

class Productitem {
    private $id;
    private $title;
    private $price;
    private $img;
    private $mainImg;
    private $description; //поле info в таблице
    private $stock;

    public function __construct($id, $title, $price, $img, $mainImg, $description, $stock){
        $this->id = $id;
        $this->title = $title;
        $this->price = $price;
        $this->img = $img;
        $this->mainImg = $mainImg;
        $this->description = $description;
        $this->stock = $stock;
    }

//    public function getId(){
//        return $this->id;
//    }

    function render(){
        return
            "<div class='galitem'>" .
            "<img src=" . "../admin/uploadimg/" . $this->img . ">" .
            "<p>" . $this->title . "</p>" .
            "<p class='itemId'>" . $this->id . "</p>" .
            "<p class='itemprice'>" . $this->price . "$"."</p>" .
            "<a href=" . "#" . " class=" . "buy1" . ">Купить</a>" .
            "</div>";
    }
}