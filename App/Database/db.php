<?php
    namespace App\Database;
    use PDO;
    class DB{
        private static $host = 'localhost';
        private static $user = 'root';
        private static $password = '';
        private static $database = 'test';
        
        public static function connect(){
            return new PDO("mysql:host" . self::$host . ";dbname=" . self::$database, self::$user, self::$password);
        }

    }
?>