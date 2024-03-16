<?php


class Manager extends DB {

    public static function __callStatic($name, $arguments)
    {
        if(strpos($name, 'all') === 0) {
            $tableName = lcfirst(substr($name, 3));
            return self::getAllRecords($tableName);
        }else{
            throw new Exception("Call to undefined static method '$name'.");
        }
        
    }

    public static function getAllRecords($tableName)
    {
        $query = "SELECT * FROM $tableName";
        $stmt = parent::connect()->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }

}