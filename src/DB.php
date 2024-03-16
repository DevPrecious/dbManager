<?php

class DB
{

    private static String $localhost = 'localhost';
    private static String $databsename = 'testdb';
    private static String $username = 'root';
    private static String $password = '';

    protected static function connect()
    {
        try {
            $conn = new PDO(
                "mysql:host=".self::$localhost.";dbname=".self::$databsename, 
            self::$username, self::$password,
        );
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}