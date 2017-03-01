<?php
abstract class Product{
    public $price = 500;
    abstract public function getPrice();
}

class DefaultProduct extends Product{
    public function getPrice()
    {
        return $this->price;
    }
}

class DigitProduct extends Product{
    public function getPrice()
    {
        return $this->price / 2;
    }
}

class CountableProduct extends Product{
    public $count;

    public function getPrice()
    {
        return $this->count * $this->price;
    }
}