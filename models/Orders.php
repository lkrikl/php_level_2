<?php
namespace app\models;

class Orders extends Model
{
    public $id;
    public $name;
    public $address;
    public $phone;
    public $email;
    public $comment;
    public $time;
    public $status;

    public static function getTableName()
    {
        return "orders";
    }
}