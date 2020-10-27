<?php
abstract class Good {

        abstract function getTotalPrice();// расчет общей стоимости товаров в магазине

        abstract function getProfit(); //расчет прибыли с продаж
}