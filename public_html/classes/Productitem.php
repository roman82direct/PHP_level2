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

    public function getId(){
        return $this->id;
    }
    public function getTitle(){
        return $this->title;
    }
    public function getPrice(){
        return $this->price;
    }
    public function getImg(){
        return $this->img;
    }
    public  function getStock(){
        return $this->stock;
    }
    function render(){
        $show =
            "<div class='galitem'>" .
            "<img src=" . "../admin/uploadimg/" . $this->img . ">" .
            "<p>" . $this->title . "</p>" .
            "<p class='itemId'>" . $this->id . "</p>" .
            "<a href=" . "card.php?good=" . $this->id . " class=" . "buy1" . ">Купить</a>" .
            "</div>";
        return $show;
    }
}