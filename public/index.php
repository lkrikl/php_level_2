<?php
header("Content-type: text/html; charset=utf-8");

class Product {
    protected $id;
    protected $category;
    protected $name;
    protected $image;
    protected $describe;
    protected $price;

    public function __construct($id, $category, $name, $image, $describe, $price) {
        $this->id = $id;
        $this->category = $category;
        $this->name = $name;
        $this->image = $image;
        $this->describe = $describe;
        $this->price = $price;
    }

    public function view() {
        echo $this->prepareCategory() . $this->prepareName() . $this->prepareDescribe() . $this->preparePrice();
    }

    protected function prepareCategory() {
        return "<p>$this->category</p>";
    }

    protected function prepareName() {
        return "<h1>$this->name</h1>";
    }

    protected function prepareDescribe() {
        return "<p>$this->describe</p>";
    }

    protected function preparePrice() {
        return "<p>$this->price</p>";
    }
}

class SeoProduct extends Product {
    
}




$product = new Product(1, 'МФУ струйные', 'МФУ Canon MG3640 white', 'mg3640.jpg', 'МФУ (принтер, сканер, копир) 4-цветная струйная печать', 3600);
echo '<pre>';
var_dump($product);
echo '</pre>';

$product->view();




class A {
    public function foo() {
        static $x = 0;
        echo ++$x;
    }
}
class B extends A {
}
$a1 = new A;
$b1 = new B;
$a1->foo();
$b1->foo();
$a1->foo();
$b1->foo();

