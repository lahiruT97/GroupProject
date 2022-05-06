<?php

class Database {
    private static $connection = null;

    public static function createConnection() {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "group12";
        self::$connection = new mysqli($servername, $username, $password, $dbname);

        if (self::$connection->connect_error) {
            die("connection failed: " . self::$connection->connect_error);
        }
    }

    public static function getConnection() {
        if (self::$connection == null) {
            self::createConnection();
        }

        return self::$connection;
    }

}
?>