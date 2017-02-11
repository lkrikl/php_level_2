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
    protected $h1;
    protected $title;
    protected $keywords;
    protected $description;

    public function __construct($id, $category, $name, $image, $describe, $price, $h1, $title, $keywords, $description) {
        parent::__construct($id, $category, $name, $image, $describe, $price);
        $this->h1 = $h1;
        $this->title = $title;
        $this->keywords = $keywords;
        $this->description = $description;
    }

    public function prepareH1() {
        return $this->h1;
    }

    public function prepareTitle() {
        return $this->title;
    }

    public function prepareKeywords() {
        return $this->keywords;
    }

    public function prepareDescription() {
        return $this->description;
    }
}




$product = new SeoProduct(1, 'МФУ струйные', 'МФУ Canon MG3640 white', 'mg3640.jpg', 'МФУ (принтер, сканер, копир) 4-цветная струйная печать', 3600, 'МФУ Canon MG3640 white', 'МФУ Canon MG3640 white', 'mg3640', 'МФУ (принтер, сканер, копир) 4-цветная струйная печать');
echo '<pre>';
var_dump($product);
echo '</pre>';

$product->view();

echo $product->prepareH1();
echo $product->prepareTitle();
echo $product->prepareKeywords();
echo $product->prepareDescription();




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

