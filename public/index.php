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
        $this->id       = $id;
        $this->category = $category;
        $this->name     = $name;
        $this->image    = $image;
        $this->describe = $describe;
        $this->price    = $price;
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
        $this->h1          = $h1;
        $this->title       = $title;
        $this->keywords    = $keywords;
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
        static $x = 0;       // Создаем свойства для класса A $x со значением по умолчанию равным 0
        echo ++$x;           // увеличиваем значение $x на единицу и возвращает новое значение $x при каждом вызове метода foo()
    }
}
$a1 = new A();
$a2 = new A();
$a1->foo();                  // Первый вызов метода foo() в результате получаем занчение $x = 1
$a2->foo();                  // Второй вызов метода foo() в результате получаем занчение $x = 2
$a1->foo();                  // Третий вызов метода foo() в результате получаем занчение $x = 3
$a2->foo();                  // Четвертый вызов метода foo() в результате получаем занчение $x = 4



class A {
    public function foo() {
        static $x = 0;       // Создаем свойства для класса A $x со значением по умолчанию равным 0
        echo ++$x;           // увеличиваем значение $x на единицу и возвращает новое значение $x при каждом вызове метода foo()
    }
}
class B extends A {          // Создаем класс B, который является наследником класса A и в котором будет создано свойство для класса B $x со значением по умолчанию равным 0
}
$a1 = new A();
$b1 = new B();
$a1->foo();                  // Первый вызов метода foo() класса А в результате получаем занчение $x = 1
$b1->foo();                  // Первый вызов метода foo() класса B в результате получаем занчение $x = 1
$a1->foo();                  // Второй вызов метода foo() класса А в результате получаем занчение $x = 2
$b1->foo();                  // Второй вызов метода foo() класса B в результате получаем занчение $x = 2