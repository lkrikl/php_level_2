<?php
namespace app\models;
class Product extends Model
{
    public $id;
    public $name;
    public $description;
    public $price;
    public $image;
    
    protected $tableName = 'product';

    public static function getTableName()
    {
        return "product";
    }
}