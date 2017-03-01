<?php
namespace app\models;
use app\services\Db;
abstract class Model
{
    protected static $db;

    abstract public static function getTableName();

    public static function getById($id){
        
        $table = static::getTableName();
        $sql = "SELECT * FROM {$table} WHERE id = :id";
        return Db::getInstance()->fetchOne($sql, [":id" => $id]);
    }

    public static function getAll(){
        $table = static::getTableName();
        $sql = "SELECT * FROM {$table}";        
        return Db::getInstance()->fetchAll($sql);
    }
}
?>